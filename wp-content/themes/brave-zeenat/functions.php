<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'Sidebar',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));

/*this function that truncates titles to specified number of characters*/
function the_title2($before = '', $after = '', $echo = true, $length = false) {
    $title = get_the_title();
    if ( $length && is_numeric($length) ) {
		$title = mb_substr( $title, 0, $length, 'UTF-8' );
	}
    if ( strlen($title)> 0 ) {
		if ( strlen($title) == $length ) $title = apply_filters('the_title2', $before . $title . $after, $before, $after);
        if ( $echo ) echo $title;
        else return $title;
	}
}


/************ Custom Rewrite Rules using The Wordpress API ************/

add_filter('rewrite_rules_array', 'your_rewrite_rules_array');
add_filter('query_vars', 'your_query_vars');
add_action('init', 'your_init');

function your_init() {
	global $wp_rewrite;
	$wp_rewrite->flush_rules();
}

function your_rewrite_rules_array($rewrite_rules) {
	global $wp_rewrite;
	
	/*
	$category_ids = get_all_category_ids();
	foreach($category_ids as $cat_id) {
	  $cat_name = get_cat_name($cat_id);
	  //echo $cat_id . ': ' . $cat_name;
	  $custom[$cat_name.'/(.+)/?$'] = '$matches[1]/$matches[2]';
	}
*/

	$custom['(categories)/(.+)/?$'] = '/index.php?category_name=$matches[2]';
	/*$custom['(fastigheter-usa)/(.+)/?$'] = 'index.php?property=$matches[2]&language=sv';
	$custom['(properties-spain)/(.+)/?$'] = 'index.php?property=$matches[2]&language=en';
	$custom['(properties-usa)/(.+)/?$'] = 'index.php?property=$matches[2]&language=en';
*/

	return $custom + $rewrite_rules;
}

function your_query_vars($query) {
	array_push($query, 'cat_name');
// 	array_push($query, 'post_name');
// 	array_push($query, 'attachment');
	return $query;
}
/************ End of Custom Rewrite Rules using The Wordpress API ************/
?>