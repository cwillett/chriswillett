<?php $option = get_option('iridium-options'); ?>
<?php require(TEMPLATEPATH.'/styles.php'); ?>
<?php require(TEMPLATEPATH.'/rt_styleswitcher.php'); ?>
<?php
	global $tstyle, $stylesList, $pstyle;
	global $primary_style, $bg_style, $link_color, $menu_name, $font_family, $fontstyle, $fontfamily, $presetStyle, $linkcolor;
?>
<?php
	$preset_style 			= $option['preset_style'];
	if($preset_style == "custom") { 
		$primary_style 			= $option['primary_style'];
		$bg_style 				= $option['background_type'];
		$link_color 			= $option['link_color'];
		$font_family            = $option['font_face'];
		$presetStyle			= new Style($primary_style, $bg_style, $font_family, $link_color);
	}
	else {
		$presetStyle			= $stylesList[$preset_style];
		$primary_style 			= $presetStyle->pstyle;
		$bg_style 				= $presetStyle->bgstyle;
		$link_color 			= $presetStyle->linkcolor;
		$font_family            = $presetStyle->fontfamily;
	}
?>
<?php require(TEMPLATEPATH.'/rt_styleloader.php'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
	<head>
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<meta name="description" content="<?php bloginfo('description'); ?>" />
		
		<title>
			<?php 
		
			// Returns the title based on what is being viewed
			
			// Single posts
			if (is_single()) { 
				single_post_title(); echo ' | '; bloginfo('name');
			
			// The home page or, if using a static front page, the blog posts page.		
			} elseif (is_home() || is_front_page()) {
				bloginfo('name');
				if( get_bloginfo('description'))
					echo ' | ' ; bloginfo('description');
					
			// WordPress Pages
			} elseif (is_page()) {	
				single_post_title(''); echo ' | '; bloginfo('name');
				
			// Search results
			} elseif (is_search()) {
				printf(_r('Search results for %s'), '"'.get_search_query().'"'); echo ' | '; bloginfo('name');
				
			// 404 (Not Found)
			} elseif (is_404()) {
				_re('Not Found'); echo ' | '; bloginfo('name');
				
			// Otherwise:
			} else {
				wp_title(''); echo ' | '; bloginfo('name');
			}
			
			?>
		</title>
		
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		
		<?php
		
		$wp_ver = get_bloginfo('version');
			
		if ($wp_ver < 3.0) {
			
		?>
		
		<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
		<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		
		<?php } ?>
		
		<?php if ($option['rokbox_enabled'] == 'true') { ?>
		
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/js/rokbox/themes/<?php echo $option['rokbox_style']; ?>/rokbox-style.css" type="text/css" />
		
		<!--[if lte IE 6]>
			<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/js/rokbox/themes/<?php echo $option['rokbox_style']; ?>/rokbox-style-ie6.css" type="text/css" />
		<![endif]-->
		<!--[if IE 7]>
			<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/js/rokbox/themes/<?php echo $option['rokbox_style']; ?>/rokbox-style-ie7.css" type="text/css" />
		<![endif]-->
		<!--[if IE 8]>
			<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/js/rokbox/themes/<?php echo $option['rokbox_style']; ?>/rokbox-style-ie8.css" type="text/css" />
		<![endif]-->
		
		<?php } ?>
		
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/template.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/<?php echo $pstyle; ?>.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/typography.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/menu-fusion.css" type="text/css" />
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/js/rokstories/css/rokstories.css" type="text/css" />
		
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/wp.css" type="text/css" />
		
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		
		<style type="text/css">
		/*<![CDATA[*/
		<!--
		
		<?php 
		
			$double = $option['left_sidebar_w']+$option['right_sidebar_w'];
			$ie_col3 = $option['right_sidebar_w'] + 20;
			
		?>

		div.wrapper { margin: 0 auto; width: <?php echo $option['site_width']; ?>px;padding:0;}
		body { min-width:<?php echo $option['site_width']; ?>px;}
		#inset-block-left { width:180px;padding:0;}
		#inset-block-right { width:0px;padding:0;}
		#maincontent-block { margin-right:0px;margin-left:<?php if(is_front_page() && is_active_sidebar('inset')) { echo '180'; } else { echo '10'; } ?>px;}

		.s-c-s .colmid { left:<?php echo $option['left_sidebar_w']; ?>px;}
		.s-c-s .colright { margin-left:-<?php echo $double; ?>px;}
		.s-c-s .col1pad { margin-left:<?php echo $double; ?>px;}
		.s-c-s .col2 { left:<?php echo $option['right_sidebar_w']; ?>px;width:<?php echo $option['left_sidebar_w']; ?>px;}
		.s-c-s .col3 { width:<?php echo $option['right_sidebar_w']; ?>px;}

		.s-c-x .colright { left:<?php echo $option['left_sidebar_w']; ?>px;}
		.s-c-x .col1wrap { right:<?php echo $option['left_sidebar_w']; ?>px;}
		.s-c-x .col1 { margin-left:<?php echo $option['left_sidebar_w']; ?>px;}
		.s-c-x .col2 { right:<?php echo $option['left_sidebar_w']; ?>px;width:<?php echo $option['left_sidebar_w']; ?>px;}

		.x-c-s .colright { margin-left:-<?php echo $option['right_sidebar_w']; ?>px;}
		.x-c-s .col1 { margin-left:<?php echo $option['right_sidebar_w']; ?>px;}
		.x-c-s .col3 { left:<?php echo $option['right_sidebar_w']; ?>px;width:<?php echo $option['right_sidebar_w']; ?>px;}

		a, #top-right ul li a:hover, .abstract-menu li a:hover, #main-content .cart_totals div, #roksearch_results .roksearch_odd-hover h3, #roksearch_results .roksearch_even-hover h3, #horiz-menu.splitmenu li:hover .item span, #horiz-menu.splitmenu li.active .item span, #horiz-menu.splitmenu li.active:hover .item span {color:<?php echo $link_color; ?>;}
		#main-body ul.menu li > a, #main-body ul.menu li > .separator, #main-body ul.menu li > .item, #main-body ul.menu li li > a, #main-body ul.menu li li > .separator, #main-body ul.menu li li > .item, #horiz-menu li > .item, body #horiz-menu li.root:hover > .item span, body #horiz-menu li.root.active > .item span, body #horiz-menu li.root.active:hover > .item span, .feature-block a .readon1-r {color:<?php echo $link_color; ?>;}    
		.pagination .page-active, .pagination .page-inactive:hover, .rokstories-layout4 .feature-block .feature-number-sub.active {background:<?php echo $link_color; ?>;}
		
		<?php 
		
		if(is_front_page()) { echo "form#commentform textarea#comment, form#commentform input#author, form#commentform input#email, form#commentform input#url {width: 97%!important;}";}
		
		if (rok_isIe(6)) echo "div.wrapper { width: ".($option['site_width']+4)."px; }
	    #horiz-menu .level1 li.active .item span, body .fusion-js-subs .item, #horiz-menu.splitmenu li.sfHover .item span {color:".$link_color.";}
		#horiz-menu li.root-sfHover .item {color:".$link_color." !important;}";
		
		if (rok_isIe()) echo ".module-inner {zoom:1;position: relative;overflow:hidden;}";
		
		?>

		-->
		/*]]>*/
		</style>
		
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/mootools.js"></script>
		
		<?php if (rok_isIe()) :?>
		<!--[if IE 8]>
		<style type="text/css">
		#horizmenu-surround {width: auto !important;}
		</style>
		<![endif]-->
		<!--[if IE 7]>
		<link href="<?php bloginfo('template_directory'); ?>/css/template_ie7.css" rel="stylesheet" type="text/css" />	
		<![endif]-->	
		<?php endif; ?>
		<?php if (rok_isIe(6)) :?>
		<!--[if lte IE 6]>
		<link href="<?php bloginfo('template_directory'); ?>/css/template_ie6.css" rel="stylesheet" type="text/css" />
		<link href="<?php bloginfo('template_directory'); ?>/css/<?php echo $pstyle; ?>_ie6.css" rel="stylesheet" type="text/css" />
		<script src="<?php bloginfo('template_directory'); ?>/js/DD_belatedPNG.js"></script>
		<script type="text/javascript">
			var pngClasses = ['.png', '#main-trans', '#main-trans2', '#main-trans-top', '.feature-module', '.readon1-l', '.feature-block .description', '.readon1-m', '.readon1-r', 'span.number-circle', '.drop-top', '.fusion-js-subs ul', '#horiz-menu li li', '.style1 #logo', '.style2 #logo', '.style3 #logo', '.style4 #logo', '.style6 #logo', '.style2 #header', '.style2 #header .wrapper', '.style2 #horiz-menu', '.style3 #header', '.style3 #horiz-menu', '.style4 #header', '.style4 #horiz-menu', '.style5 #header', '.style5 #horiz-menu', '.style5 .abstract-menu li a.am1', '.style5 .abstract-menu li a.am2', '.style5 .abstract-menu li a.am3', '#horiz-menu li.root a', '.style3 #header .wrapper', '.style4 #header .wrapper', '.style5 #logo', '.style5 #header .wrapper', '#main-trans-bottom'];
		
			window.addEvent('domready', function() {
			pngClasses.each(function(fixMePlease) {
				DD_belatedPNG.fix(fixMePlease);
			});
			});
		</script>
		<![endif]-->
		<?php endif; ?>

		<?php if ($option['rokbox_enabled'] == 'true') { ?>
  		
  			<script type="text/javascript">var rokboxPath = "<?php bloginfo('template_directory'); ?>/js/rokbox/";</script>
  			<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/rokbox/rokbox.js"></script>
  			<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/rokbox/themes/<?php echo $option['rokbox_style']; ?>/rokbox-config.js"></script>
  			
  		<?php } ?>
  		
  		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/rokfonts.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/rokutils.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/rokutils.inputs.js"></script>
  		
  		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/roktabs/roktabs.js"></script>
 		
 		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/rokstories/js/rokstories.js"></script>
 		<script type="text/javascript">var RokStoriesImage = {}, RokStoriesLinks = {};</script>
 		
 		<?php if(rok_isIe(6) && $option['ie_warning'] == 'true') : ?>
 		
  			<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/rokie6warn.js"></script>
  			
		<?php endif; ?>
		
		<script type="text/javascript">
		//<![CDATA[
		window.addEvent('domready', function() {
			var modules = ['side-mod', 'showcase-panel', 'moduletable', 'article-rel-wrapper'];
			var header = ['h3','h2','h1'];
			RokBuildSpans(modules, header);
		});
		InputsExclusion.push('.content_vote')
		//]]>
		</script>
		
		<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
		
		<?php wp_head(); ?>
		
	</head>
	
	<body id="ff-<?php echo $font_family; ?>" class="<?php echo $pstyle; ?> <?php echo $fontstyle; ?> <?php echo $bg_style; ?> <?php if(is_front_page()) { echo 'iridium-home'; } ?> iehandle">
		
		<div id="bg-tile">
			<div id="bg-main">
			
				<!-- Begin Header -->
				
				<div id="header">
					<div class="wrapper">
						<div class="padding">
						
							<?php if ($option['site_logo'] == 'true') { ?>
				
							<!-- Begin Logo -->
							
							<div class="logo-module">
								<a href="<?php bloginfo('url'); ?>" id="logo" name="logo"></a>
							</div>
							
							<!-- End Logo -->
							
							<?php } ?>
							
							<?php if ($option['text_sizer'] == 'true' || $option['search_box'] == 'true') { ?>
							
							<!-- Begin Search And Text Sizer Wrapper -->
							
							<div id="top-right-surround">
							
								<?php if ($option['text_sizer'] == 'true') { ?>
							
								<!-- Begin Text Sizer -->
							
								<div id="accessibility">
									<div class="textsizer-desc">
										<?php _re('Text Size'); ?>
									</div>
									<div id="buttons">
										<a href="<?php bloginfo('home'); ?>/?fontstyle=f-larger" title="<?php _re('Increase Font Size'); ?>" class="large"><span class="button">&nbsp;</span></a> <a href="<?php bloginfo('home'); ?>/?fontstyle=f-smaller" title="<?php _re('Decrease Font Size'); ?>" class="small"><span class="button">&nbsp;</span></a>
									</div>
								</div>
								
								<!-- End Text Sizer -->
								
								<?php } ?>
								
								<?php if ($option['search_box'] == 'true') { ?>
								
								<!-- Begin Search -->
								
								<div id="searchmod">
									<div class="moduletable">
										<div id="searchmod-surround">
											
											<form name="rokajaxsearch" id="rokajaxsearch" class="blue" action="<?php bloginfo('home'); ?>/" method="get">
												<div class="rokajaxsearch">
													<input id="roksearch_search_str" name="s" type="text" class="inputbox" value=" <?php _re('Search...'); ?>" onblur="if(this.value=='') this.value=' <?php _re('Search...'); ?>';" onfocus="if(this.value==' <?php _re('Search...'); ?>') this.value='';" />
													<input type="hidden" name="task" value="search" />
												</div>
											</form>
											
										</div>
									</div>
								</div>
								
								<!-- End Search -->
								
								<?php } ?>
								
							</div>
							
							<!-- End Search And Text Sizer Wrapper -->
							
							<?php } ?>
							
						</div>
					</div>
				</div>
				
				<!-- End Header -->
				
				<div class="wrapper">
				
					<?php if(is_active_sidebar('top_menu')) { ?>
				
					<!-- Begin Horizontal Menu -->
					
					<div id="horiz-menu" class="fusion">
						<div class="wrapper">
							<div class="padding">
								<div id="horizmenu-surround">
									
									<?php dynamic_sidebar('Top Menu'); ?>
									
								</div>
								<div class="clr"></div>
							</div>
						</div>
					</div>
					
					<!-- End Horizontal Menu -->
					
					<?php } ?>