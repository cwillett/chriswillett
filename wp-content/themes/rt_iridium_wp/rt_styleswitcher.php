<?php

	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'rt_styleswitcher.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

$cookie_prefix = "iridium-";
$cookie_time = time()+31536000;
$template_properties = array('fontstyle','fontfamily','tstyle','mtype','bgstyle','pstyle','linkcolor');

foreach ($template_properties as $tprop) {
	if (isset($_REQUEST[$tprop])) {
	    $$tprop = htmlentities($_GET[$tprop]);

		// support the font size toggler
		if ($$tprop=="f-smaller" || $$tprop =="f-larger") {
			$fsize = "f-default";
	
			if (isset($_COOKIE[$cookie_prefix. $tprop])) {
				 $fsize = htmlentities($_COOKIE[$cookie_prefix. $tprop]);
			}
			if ($$tprop=="f-smaller" && $fsize=="f-default") $$tprop = "f-small";
			elseif ($$tprop=="f-smaller" && $fsize=="f-small") $$tprop = "f-small";
			elseif ($$tprop=="f-smaller" && $fsize=="f-large") $$tprop = "f-default";
			elseif ($$tprop=="f-larger" && $fsize=="f-large") $$tprop = "f-large";
			elseif ($$tprop=="f-larger" && $fsize=="f-default") $$tprop = "f-large";
			elseif ($$tprop=="f-larger" && $fsize=="f-small") $$tprop = "f-default";
		}
	
    	setcookie ($cookie_prefix. $tprop, $$tprop, $cookie_time, '/', false);  
    	header("Location: ". $_SERVER['PHP_SELF']);
    	global $$tprop; 
    }
}

?>
