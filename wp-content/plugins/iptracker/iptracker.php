<?php
/*
Plugin Name: IP Tracker
Description: Tracks a users ip address, query string, date/time referring page
Version: 1. 0
Author: Chris Willett
Author URI: http://chriswillett.com
*/

function ip_tracker() {
    
    global $wpdb;
    $table = $wpdb->prefix . 'ip_tracker';
    
    // find the ip address:
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    
    // find out the referrer
    $referrer = $_SERVER['HTTP_REFERER'];
    
    // find out the protocol:
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || 
        $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";     
    // find out the domain:
    $domain = $_SERVER['HTTP_HOST'];
    // find out the path to the current file:
    $path = $_SERVER['REQUEST_URI'];
    // assemble the url:
    $url = $protocol . $domain . $path;
    // get the browser (user agent) info:
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
	// get the date:
	$datetime = date('Y-m-d H:i:s');
	
	$wpdb->insert($table, array(
        'ip_address' => $ip,
        'referrer' => $referrer,
        'query_string' => $url,
        'user_agent' => $user_agent,
        'datetime' => $datetime),
        array('%s','%s','%s','%s')
    );
    
}

// function to create the DB / Options / Defaults					
function ip_tracker_options_install() {
   	global $wpdb;
    $table = $wpdb->prefix . 'ip_tracker';
    
	// create the ECPT metabox database table
	if($wpdb->get_var("show tables like '$table'") != $table) 
	{
		$sql = "CREATE TABLE " . $table . " (
          `id` mediumint(10) NOT NULL AUTO_INCREMENT,
          `ip_address` varchar(16) NOT NULL,
          `referrer` varchar(255) NOT NULL,
          `query_string` varchar(255) NOT NULL,
          `user_agent` varchar(255) NOT NULL,
          `datetime` datetime NOT NULL,
          PRIMARY KEY (id)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
        
		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		dbDelta($sql, true);
	}
 
}
// run the install scripts upon plugin activation
register_activation_hook(__FILE__,'ip_tracker_options_install');
