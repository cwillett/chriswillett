<?php

	/*
	Plugin Name: Feed Count
	Plugin URI: http://www.mapelli.info/feedcount
	Description: Displays the number of subscriber to your Feedburner account (without that ugly feedburner chicklet) 
	Version: 1.2
	Author: Francesco Mapelli
	Author URI: http://www.mapelli.info
	*/


function mapelli_fc_get_version(){
	return '1.2';
}

function mapelli_fc_get_optionlist() {
	
	return array (
		'map_fc_feedurl',
		'map_fc_queryurl',
		'map_fc_lastcount',
		'map_fc_lastupdate',
		'map_fc_updateinterval',
		'map_fc_before',
		'map_fc_after',
		'map_fc_error_updateinterval',
		'map_fc_last_status',
		'map_fc_link'
		);
	
}


/*
* get the default values
*/
function mapelli_fc_get_defaults() {
	return array(
			'map_fc_feedurl' => '',
		  'map_fc_queryurl' =>'http://api.feedburner.com/awareness/1.0/GetFeedData?uri=',
			'map_fc_lastcount' => 'N/A',
			'map_fc_lastupdate' => 0,
			'map_fc_updateinterval' => 60, // 1 h
	    'map_fc_error_updateinterval' => 5, // 5 min
		  );
}

/*
* get the stored values
*/
function mapelli_fc_get_stored() {
	
	$list = mapelli_fc_get_optionlist();
	$stored = array();
	
	foreach ($list as $option) {
		
		$s = get_option($option);
		if ( $s ) {
		  $stored[$option] = $s;
		}
		
	}
	return $stored;
}	

	
function fc_feedcount() {
	
  $values = array_merge(mapelli_fc_get_defaults(), mapelli_fc_get_stored());
	
	extract($values);
	
	/*
	* if $lastcount is not numeric we had problems in the last update
	* so we use error_updateinterval
	*/
	if (!is_numeric($map_fc_lastcount)) {
		$interval = $map_fc_error_updateinterval;
	} else {
		$interval = $map_fc_updateinterval;
	}
	
	$interval = $interval *60; //we convert the interval in seconds
	
	if ( mapelli_fc_need_update($map_fc_lastupdate, $interval) ) {
	  
	  mapelli_fc_debug('need update');
	  $toopen = $map_fc_queryurl.$map_fc_feedurl;
    $xml = mapelli_fc_get_xml($toopen);
    mapelli_fc_debug ("$xml");
		$number = mapelli_fc_extract_subscribers($xml);
		mapelli_fc_debug("number: $number");
	  
	  update_option('map_fc_lastupdate',time());
	  
	  if (is_numeric($number)) {
		  mapelli_fc_debug('number parsed correctly, setting laststatus to ok');
	    update_option('map_fc_lastcount', $number);
	    update_option('map_fc_last_status', 'ok');
	    $map_fc_last_status = 'ok';
	  } else {
		update_option('map_fc_last_status', $number);
		  $map_fc_last_status = $number;
		  $number = $map_fc_lastcount;
	  }
	} else {
		mapelli_fc_debug('don\'need update');
		$number = $map_fc_lastcount;
		$map_fc_last_status = get_option('map_fc_last_status');
	}
	if (trim($map_fc_link)!='') {
		$openlink = "<a href='$map_fc_link'>"; 
		$closelink="</a>";
		}
	print "<div class='feedcountdiv'><p>$openlink<span class='feedcount'>\n";
	if ($map_fc_before) { 
		print " <span class='before'>$map_fc_before</span>\n";
	} 
	
	print "<span class='subscribers'>$number</span>\n";
		
	if ($map_fc_after) { 
		print " <span class='after'>$map_fc_after</span>\n";
	}
	print "</span>$closelink</p></div>";
  
 if (get_option('map_fc_last_status')!='ok') {
	    //we have had problems, so we print out a comment with the error (can be seen only in source code)
		  print("<!--error: $map_fc_last_status-->");
	}
}
	
function mapelli_fc_need_update($lastupdate, $updateinterval) {
	
	 $time = time();
	 mapelli_fc_debug("time: $time, <br>lastupd: $lastupdate, <br>updateint: $updateinterval<br>, diff = " .$time-$lastupdate);
	 return ($time - $lastupdate > $updateinterval);
	
	}
	
	
function mapelli_fc_extract_subscribers($xml) {
	$p = xml_parser_create();
  xml_parse_into_struct($p, $xml, $vals, $index);
  xml_parser_free($p);
  
  if ($vals[0]['attributes']['STAT']=="ok") {
		return $vals[2]['attributes']['CIRCULATION'];
	} else {
		if ($vals[0]['attributes']['STAT']=="fail") {
			return($vals[1]['attributes']['MSG']);
		}
	}
	    return "unknown error";
}
	
function mapelli_fc_get_xml($toopen) {
		
  
    if (function_exists('curl_init')) {

	  	mapelli_fc_debug('curl found, trying curl...');
      
      $ch = curl_init(); /// initialize a cURL session
			curl_setopt($ch, CURLOPT_URL, $toopen );
			curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
			$content = curl_exec ($ch);
		
	    mapelli_fc_debug( "curl retrieved $content" );
		
		  if (curl_errno($ch)) {
	   
	    mapelli_fc_debug( "curl failed with error: " . curl_error($ch) . ", using fopen..." );
      $content =  mapelli_fc_get_xml_with_fopen ($toopen);
		
			} else {
     		mapelli_fc_debug( "curl ok: result: $xmlResponse" );
				
	 		}
	
	    curl_close($ch);
	  } else {
		    mapelli_fc_debug( "curl not found, using fopen..." );
		  	$content =  mapelli_fc_get_xml_with_fopen ($toopen);
		}    
	   
	return $content;
		
	}
	
	function mapelli_fc_get_xml_with_fopen ($toopen) {
		
			$fp = fopen( $toopen, 'r' );
			if (!$fp) {
				     mapelli_fc_debug( "fopen failed, dropping..." );
						 return "<resp stat='fail'><err msg='unable to open remote file'/></resp>";
	           exit;
	        }
	        mapelli_fc_debug( "fopen ok!" );
					$content = "";
	        while( !feof( $fp ) ) {
	           $buffer = trim( fgets( $fp, 4096 ) );
	           $content .= $buffer;
	        }
	  return $content;
		
	}
	
function mapelli_fc_admin_menu() {
	   if (function_exists('add_submenu_page')) {
	        add_options_page(__('Feed Count'), __('Feed Count'), 1, __FILE__, 'mapelli_fc_option_page');
	        }
}
	
	

function mapelli_fc_option_page () {
	
	//if reset
	if (isset($_POST['fc_reset'])) {
		$list = mapelli_fc_get_optionlist();
    $defaults = mapelli_fc_get_defaults();
		
	  foreach ($list as $option) {
		  update_option($option, $default[$option]);
	  }
	       ?> <div class="updated"><p>Default values restored</p></div> <?php

	}

	   //if update
	if (isset($_POST['fc_update'])) {
		//exctract the options
	  extract($_POST);
    $error=false;
	  
		//check errors
	  if (!is_numeric($map_fc_updateinterval) or (!is_numeric($map_fc_error_updateinterval))) {
		  $error .='<li>error in update intervals: update intrerval and ';
	    $error .=' recovery update interval should be numeric</li>';
	  }
     
		//if something went wrong we write an error message       
	  if ($error) {
			?>
	    	<div class="error">
	      <p>Some Errors Occurred:</p>
	      <ul><?php echo $error;?>
	      </ul>
	      </div> 
	     <?php
	  } else {
			$list = mapelli_fc_get_optionlist();
				
			foreach ($list as $option) {
				update_option($option, $_POST[$option]);
			}
			print '<div class="updated"><p>Options saved!</p></div>';
	   }

	} //end update

	 //load the options
	 $defaults = mapelli_fc_get_defaults();
	 $stored = mapelli_fc_get_stored();
	 //merge all
	 $values = array_merge($defaults, $stored);

	 //exctract it
	 extract($values);

	?>

  <div class="wrap">
			<h2>Feed Count Options</h2>
	<div style="text-align:center;">
	<p>Feed Count v <?php echo mapelli_fc_get_version() ?> by <a href="http://www.mapelli.info">Francesco Mapelli</a>.
	</p></div>

	<form method="post">
			<fieldset class="options">
			<table>
				<tr>
					<td><label for="map_fc_feedurl">Feed Url </label>:</td>
					<td>http://feeds.feedburner.com/<input name="map_fc_feedurl" type="text" id="map_fc_feedurl" value="<?php echo $map_fc_feedurl; ?>" size="15" /></td>
				<td><em>your feed url (can be found in your feedburner dashbord, under "Edit Feed Details")</em></td>
	      </tr>
				<tr>
					<td><label for="map_fc_link">Link url</label>:</td>
					<td><input name="map_fc_link" type="text" id="map_fc_link" value="<?php echo $map_fc_link; ?>" size="20" /></td>
				<td><em>What url shold be linked to the feed count? (probably your feed url, can also be empty)</em></td>
	      </tr>
			 	<tr>
					<td><label for="map_fc_updateinterval">Update interval: </label>:</td>
					<td><input name="map_fc_updateinterval" type="text" id="map_fc_updateinterval" value="<?php echo $map_fc_updateinterval; ?>" size="2" /></td>
				<td><em>update interval (minutes)</em></td>
	      </tr>
				
				<tr>
					<td><label for="map_fc_error_updateinterval">Update interval (recovery): </label>:</td>
					<td><input name="map_fc_error_updateinterval" type="text" id="map_fc_error_updateinterval" value="<?php echo $map_fc_error_updateinterval; ?>" size="2" /></td>
				<td><em>update interval (minutes) if last update wasn't successful</em></td>
	      </tr>
				
				<tr>
					<td><label for="map_fc_before">Before</label>:</td>
					<td><input type="text" name="map_fc_before" id="map_fc_before" value="<?php echo $map_fc_before;?>" size="15"></td>
				<td><em>what to put before the subscriber count</em></td>
				<tr>
					<td><label for="map_fc_after">After</label>:</td>
					<td><input type="text" name="map_fc_after" id="map_fc_after" value="<?php echo $map_fc_after;?>" size="15"></td>
				<td><em>what to put after the subscriber count</em></td>
	      </tr>



	      </table>

			</fieldset>
			
 
			<p><div class="submit"><input type="submit" name="fc_update" value="<?php _e('Update Options', 'fc_update') ?>"  style="font-weight:bold;" /></div></p>
	    <p><div class="submit"><input type="submit" name="fc_reset" value="<?php _e('Reset Defaults', 'fc_reset') ?>"  style="font-weight:bold;" /></div></p>

			</form>    
			
			<h2>Quick Help</h2>
				<p>	More detailed informations on this plugins can be foun at <a href="http://www.mapelli.info/feedcount/feed-count-12">Feed Count <?php echo mapelli_fc_get_version(); ?> homepage</a></p>
			<ul> 
				<li>Fill the form above</li>
				<li>Be sure to have Awareness API for your feedburner account enabled (to enable it log in to your feedburner account, go to the Publicize tab, click on the Awareness API service and enable it).</li>
				<li>Put <code>&lt;?php if (function_exists('fc_feedcount')) fc_feedcount(); ?&gt;</code> where you want your feed count to appear.</li>
			</ul>
		
<p></p>   
			<div style="text-align:center;">
		<p>	If you find this plugin useful, please consider posting a blog entry to tell the world how cool is it, maybe adding a link to <a href="http://www.mapelli.info">www.mapelli.info</a> and <a href="http://www.mapelli.info/feedcount">Feed Count homepage</a>  </p>
		<p>	If you find a bug or you wish to request a feature please leave a comment on <a href="http://www.mapelli.info/feedcount/feed-count-12">Feed Count <?php echo mapelli_fc_get_version(); ?> homepage</a> </p>
	    <p><small><a href="http://www.mapelli.info/feedcount">Version list</a></small>
	    </div>
	</div>    
	<?php 

 }
	
 function	mapelli_fc_debug($string) {
	//	print ("<!--$string-->\n");
	}
	//hour hook to add the menu item
	add_action('admin_menu', 'mapelli_fc_admin_menu');

?>
