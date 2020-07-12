<?php

function theme_options_init() {

	global $tname;
	
	$new_options = array(
	
		// Style
		
		'preset_style' => 'style1',
		'primary_style' => 'style1',
		'background_type' => 'full',
		'link_color' => '#8BB036',
		
		// Dimensions
		
		'site_width' => '982',
		'left_sidebar_w' => '280',
		'right_sidebar_w' => '334',
		
		// Layout
		
		'layout_front' => 'x-c-s',
		'layout_subpage' => 's-c-x',
		
		'right_front_sidebar' => 'true',
		'left_front_sidebar' => 'false',
		
		'right_sub_sidebar' => 'false',
		'left_sub_sidebar' => 'true',
		
		'left_front_side_file' => 'side-front-left.php',
		'right_front_side_file' => 'side-front-right.php',
		
		'left_sub_side_file' => 'side-sub-left.php',
		'right_sub_side_file' => 'side-sub-right.php',
		
		// Right Sidebar
		
		'sidebar_right_front_categories' => 'true',
		'sidebar_right_front_categories_order' => 'name',
		'sidebar_right_front_categories_empty' => '1',
		'sidebar_right_front_categories_exclude' => '',
		
		'sidebar_right_front_archives' => 'true',
		'sidebar_right_front_archives_type' => 'monthly',
		'sidebar_right_front_archives_limit' => '12',
		
		'sidebar_right_front_tags' => 'true',
		'sidebar_right_front_tags_order' => 'name',
		
		// Left Sidebar
		
		'sidebar_left_front_authors' => 'true',
		'sidebar_left_front_authors_fullname' => '1',
		'sidebar_left_front_authors_exadmin' => '0',
		
		'sidebar_left_front_blogroll' => 'true',
		'sidebar_left_front_blogroll_order' => 'name',
		'sidebar_left_front_blogroll_limit' => '-1',
		'sidebar_left_front_blogroll_categorize' => '0',
		'sidebar_left_front_blogroll_category' => '',
		
		'sidebar_left_front_meta' => 'true',
		
		// Left Subpage Sidebar
		
		'sidebar_left_sub_categories' => 'true',
		'sidebar_left_sub_categories_order' => 'name',
		'sidebar_left_sub_categories_empty' => '1',
		'sidebar_left_sub_categories_exclude' => '',
		
		'sidebar_left_sub_archives' => 'true',
		'sidebar_left_sub_archives_type' => 'monthly',
		'sidebar_left_sub_archives_limit' => '12',
		
		'sidebar_left_sub_tags' => 'true',
		'sidebar_left_sub_tags_order' => 'name',
		
		// Right Subpage Sidebar
		
		'sidebar_right_sub_authors' => 'true',
		'sidebar_right_sub_authors_fullname' => '1',
		'sidebar_right_sub_authors_exadmin' => '0',
		
		'sidebar_right_sub_blogroll' => 'true',
		'sidebar_right_sub_blogroll_order' => 'name',
		'sidebar_right_sub_blogroll_limit' => '-1',
		'sidebar_right_sub_blogroll_categorize' => '0',
		'sidebar_right_sub_blogroll_category' => '',
		
		'sidebar_right_sub_meta' => 'true',
		
		// Top
		
		'search_box' => 'true',
		'site_logo' => 'true',
		'text_sizer' => 'true',
		
		// Showcase
		
		'showcase_blogroll' => 'true',
		'showcase_blogroll_order' => 'name',
		'showcase_blogroll_limit' => '7',
		'showcase_blogroll_category' => '',
		
		// Blog
		
		'blog_order' => 'date',
		'blog_content' => 'content',
		'blog_cat' => '',
		
		'blog_title' => 'true',
		'blog_title_link' => 'false',
		
		'blog_meta' => 'true',
		'blog_author' => 'true',
		'blog_date' => 'true',
		
		// Single
		
		'single_title' => 'true',
		
		'single_meta' => 'true',
		'single_meta_author' => 'true',
		'single_meta_date' => 'true',
		'single_footer' => 'true',
		
		'single_tweetmeme' => 'true',
		
		// Page
		
		'page_title' => 'true',
		
		'page_meta' => 'false',
		'page_meta_author' => 'true',
		'page_meta_date' => 'true',
		
		'page_tweetmeme' => 'false',
		
		// Archive
		
		'category_postcount' => '5',
		'category_contentdis' => 'content',
		'category_postmeta' => 'true',
		'category_postmeta_author' => 'true',
		'category_postmeta_date' => 'true',
		'category_title' => 'true',
		'category_titlelink' => 'false',
		
		'archive_postcount' => '5',
		'archive_contentdis' => 'content',
		'archive_postmeta' => 'true',
		'archive_postmeta_author' => 'true',
		'archive_postmeta_date' => 'true',
		'archive_title' => 'true',
		'archive_titlelink' => 'false',
		
		'tag_postcount' => '5',
		'tag_contentdis' => 'content',
		'tag_postmeta' => 'true',
		'tag_postmeta_author' => 'true',
		'tag_postmeta_date' => 'true',
		'tag_title' => 'true',
		'tag_titlelink' => 'false',
		
		// Search
		
		'search_postcount' => '5',
		'search_contentdis' => 'content',
		'search_postmeta' => 'true',
		'search_postmeta_author' => 'true',
		'search_postmeta_date' => 'true',
		'search_title' => 'true',
		'search_titlelink' => 'false',
		
		// Footer
		
		'footer_enabled' => 'true',
		'footer_post_count' => '3',
		
		'footer_cat' => '3',
		'footer_order' => 'date',
		'footer_content' => 'content',
		
		'footer_popular_enabled' => 'true',
		'footer_recent_enabled' => 'true',
		'footer_modified_enabled' => 'true',
		
		'footer_logo' => 'true',
		'footer_copyright' => 'true',
		'footer_copyright_text' => 'Designed by RocketTheme',
		'footer_backtop' => 'true',
		
		// Widgets
		
		'widget_feature1' => 'hilite2',
		'widget_feature2' => '',
		'widget_user1' => '',
		
		'widget_over_right_front' => '',
		'widget_right_front' => 'hilite2',
		'widget_under_right_front' => 'ad',
		
		'widget_over_left_front' => 'hilite2',
		'widget_left_front' => 'hilite1 hilite3',
		'widget_under_left_front' => '',
		
		'widget_over_right_sub' => 'hilite2',
		'widget_right_sub' => 'hilite1 hilite3',
		'widget_under_right_sub' => '',
		
		'widget_over_left_sub' => '',
		'widget_left_sub' => 'hilite2',
		'widget_under_left_sub' => 'hilite1 hilite3',

		
		// Other
		
		'breadcrumbs' => 'true',
		
		'font_face' => 'iridium',
		
		'ie_warning' => 'true',
		
		// RokBox
		
		'rokbox_enabled' => 'true',
		'rokbox_style' => 'light'
		
	);

	add_option($tname.'-options', $new_options);
}

add_action('init', 'theme_options_init');

function register_theme_settings() {

	global $tname;
	
	register_setting('theme-options-array', $tname.'-options');
	
}

if (is_admin()) {

add_action('admin_init', 'register_theme_settings');

}

?>