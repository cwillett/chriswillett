<div id="nav">
	<ul>
	<? 
	$pages = array("home","news","videos","photos","mp3s","friends","stuff","contact");
	foreach($pages as $pagename) {
		
		if (is_page($pagename)||(is_home() && $pagename=="home")) {
			$highlight = ' class="highlight"';
		} else {
			$highlight='';
		}
		if(is_home() && $pagename=="home") {
			echo '<li><a href="/"'.$highlight.'>home</a></li>
		'; 
		} else {
			$pagename = strtolower($pagename);
			if($pagename=="home") {
				echo '<li><a href="/"'.$highlight.'>'.$pagename.'</a></li>
				';
			} else {
				echo '<li><a href="/'.$pagename.'"'.$highlight.'>'.$pagename.'</a></li>
				'; 
			}
		}
	}
	?>
	</ul>
	<span></span> 
</div>