<?php

// Theme Features Init

add_action('after_setup_theme', 'rok_theme_setup');

function rok_theme_setup() {

	$wp_ver = get_bloginfo('version');

	if (function_exists('add_theme_support')) {
		
		if($wp_ver >= 3.0) {
	
			// Add default posts and comments RSS feed links to head
			
			add_theme_support('automatic-feed-links');
			
			// This theme uses wp_nav_menu() in one location.
			/*
			register_nav_menus( array(
				'primary' => _r('Primary Navigation'),
			) );
			
			// Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
			
			function rok_theme_page_menu_args($args) {
				$args['show_home'] = true;
				return $args;
			}
			
			add_filter('wp_page_menu_args', 'rok_theme_page_menu_args');*/
	
		}
		
	}
	
}

// Enable shortcodes in widgets

add_filter('widget_text', 'do_shortcode');

// Sample Data Import Helper

add_action('import_start', 'rt_change_path');
add_action('import_end', 'rt_unlink_file');

function rt_change_path() {
	global $wp_import;
	
	$xml = file_get_contents($wp_import->file);
	$xml = preg_replace("/\@RT_SITE_URL\@/", get_bloginfo('wpurl'), $xml);

	$temp = tempnam(sys_get_temp_dir(), "rt_wp_import");
	$handle = fopen($temp, "w");
	fwrite($handle, $xml);
	$wp_import->file = $temp;
	fclose($handle);
}

function rt_unlink_file() {
	global $wp_import;
	
	unlink($wp_import->file);
}

// Swap empty titles

function empty_title_swap($title) {
	if($title == '') {
		return '&nbsp;';
	} else {
		return $title;
	}
}

// Fusion Menu Auto Activation 

function render_fusion_widget(){
	$sidebars_widgets = wp_get_sidebars_widgets();
	update_option('widget_rokmenu', RokMenu::getDefaults());
	$rtmenu = array('top_menu' => array(0 => 'rokmenu'));
	$sidebars_widgets = array_merge((array) $sidebars_widgets, (array) $rtmenu);
	wp_set_sidebars_widgets($sidebars_widgets);
}

add_action('switch_theme', 'render_fusion_widget');

// Layout Ninja

function layout_ninja() {

	$option = get_option('iridium-options');

	$layout_option = $option['layout_front'];
	$layout_option_subpage = $option['layout_subpage'];

	switch($layout_option) {
		case 's-c-x':
			$option['left_front_sidebar'] = 'true';
			$option['right_front_sidebar'] = 'false';
			update_option('iridium-options', $option);
            break;
       	case 'x-c-s':
			$option['left_front_sidebar'] = 'false';
			$option['right_front_sidebar'] = 'true';
			update_option('iridium-options', $option);
            break;
    	case 's-c-s':
			$option['left_front_sidebar'] = 'true';
			$option['right_front_sidebar'] = 'true';
			update_option('iridium-options', $option);
            break;
        case 'x-c-x':
			$option['left_front_sidebar'] = 'false';
			$option['right_front_sidebar'] = 'false';
			update_option('iridium-options', $option);
            break;
	}
	switch($layout_option_subpage) {
		case 's-c-x':
			$option['left_sub_sidebar'] = 'true';
			$option['right_sub_sidebar'] = 'false';
			update_option('iridium-options', $option);
            break;
       	case 'x-c-s':
			$option['left_sub_sidebar'] = 'false';
			$option['right_sub_sidebar'] = 'true';
			update_option('iridium-options', $option);
            break;
    	case 's-c-s':
			$option['left_sub_sidebar'] = 'true';
			$option['right_sub_sidebar'] = 'true';
			update_option('iridium-options', $option);
            break;
        case 'x-c-x':
			$option['left_sub_sidebar'] = 'false';
			$option['right_sub_sidebar'] = 'false';
			update_option('iridium-options', $option);
            break;
	}
}

add_action('init', 'layout_ninja');

// Get Selected Style - Cookie

function getSelected($style) {
	
	global $tname;
	
	$cookie_prefix = $tname;
	
	$grab_theme = $_COOKIE[$cookie_prefix."-tstyle"];
	if ($style==$grab_theme) return ' selected="selected"';
	else return "";
}

// IE version checker

function rok_isIe($version = false) {   

	$agent=$_SERVER['HTTP_USER_AGENT'];  

	$found = strpos($agent,'MSIE ');  
	if ($found) { 
	        if ($version) {
	            $ieversion = substr(substr($agent,$found+5),0,1);   
	            if ($ieversion == $version) return true;
	            else return false;
	        } else {
	            return true;
	        }

        } else {
                return false;
        }
	if (stristr($agent, 'msie'.$ieversion)) return true;
	return false;        
}

// Language Handler

rockettheme_translation();

function rockettheme_translation() {
	global $tname;
	load_theme_textdomain($tname.'_lang');
}

function _r($str) {
	global $tname;
	return __($str, $tname.'_lang');
}

function _re($str) {
	global $tname;
	_e($str, $tname.'_lang');
}

if (!function_exists ("mysql_real_escape_string")) {
	function mysql_real_escape_string ($str) {
		return mysql_escape_string ($str);
	}
}

// Update default frontpage post count

if ( is_admin() && isset($_GET['activated'] ) && $pagenow == 'themes.php' ) {
	update_option( 'posts_per_page', 3 );
}

// Catch first image from post

function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];

  return $first_img;
}

// WordPress MU Styling

function mu_signup_css() { ?>
	<style type="text/css">
	.widecolumn .entry p {font-size: 1.05em;}
	.widecolumn {line-height: 1.6em;}
	.widecolumn {padding: 10px 0 20px 0;margin: 0 auto;width: 450px; margin-bottom: 30px;}
	.widecolumn .post {margin: 0;}
	</style>
<?php }
 
function mu_add_signup_css () { 
	add_action('wp_head','mu_signup_css', 99);
}

add_action('signup_header','mu_add_signup_css');

?>