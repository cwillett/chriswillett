<?php

	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'rt_styleloader.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

//Set Preset Values
$finalStyle = $presetStyle;
$passedTStyle = null;
$tstyle =  $presetStyle->pstyle;
$pstyle =  $presetStyle->pstyle;
$fontstyle = $presetStyle->fontstyle;
$fontfamily = $presetStyle->fontfamily;
$font_family = $presetStyle->fontfamily;
$bgstyle = $presetStyle->bgstyle;
$bg_style = $presetStyle->bgstyle;
$link_color = $presetStyle->linkcolor;
$linkcolor = $presetStyle->linkcolor;

//array of properties to look for and store
foreach ($template_properties as $tprop) {
	$tempvar = "_".$tprop;
    if (isset($_REQUEST['reset-settings'])) {
        setcookie ($cookie_prefix. $tprop, "", $cookie_time, '/', false);  
    } elseif (isset($_COOKIE[$cookie_prefix. $tprop])) {
    	$$tprop = htmlentities($_COOKIE[$cookie_prefix. $tprop]);
    	$$tempvar = $$tprop;
    }
}

// See if the tstyle is passed and set as value if it is
if ($tstyle != $presetStyle->pstyle) {
	$finalStyle = $stylesList[$tstyle];
}

//See if custom pstyle/bgstyle and fontfamily are passed and use them if they are
$passed_fields = get_object_vars($finalStyle);
foreach ( $passed_fields as $passed_field => $value) {
	$temp_passed = "_".$passed_field;
	if (isset($$temp_passed)){
		$finalStyle->$passed_field = $$passed_field;
	}
}

// Set final Values
$tstyle = $finalStyle->pstyle;
$pstyle =  $finalStyle->pstyle;

$bgstyle = $finalStyle->bgstyle;
$bg_style = $finalStyle->bgstyle;

$fontfamily = $finalStyle->fontfamily;	
$font_family = $finalStyle->fontfamily;

$fontstyle = $finalStyle->fontstyle;

$linkcolor = $finalStyle->linkcolor;
$link_color = $finalStyle->linkcolor;

?>