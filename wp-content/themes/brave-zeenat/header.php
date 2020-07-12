<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> 

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/js/fancybox/jquery.fancybox-1.2.6.css" />

<!--[if IE 7]>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/ie7.css" />
<![endif]-->

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />

<?php wp_head(); ?>

<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-1.4.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.tools.tabs.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.tools.scroll.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/fancybox/jquery.fancybox-1.2.6.pack.js"></script>

<script type="text/javascript">
// perform JavaScript after the document is scriptable. 
$(function() { 
    // setup ul.tabs to work as tabs for each div directly under div.panes 
    $("ul.tabs").tabs("div.panes > div"); 
});
$(function() {
$("#nav ul").tabs("#panes > div", {effect: 'fade', fadeOutSpeed: 400});
});
</script>

	<script type="text/javascript">
		$(document).ready(function() {
			$("a.zoom").fancybox();

			$("a.zoom1").fancybox({
				'overlayOpacity'	:	0.7,
				'overlayColor'		:	'#000'
			});

			$("a.zoom2").fancybox({
				'zoomSpeedIn'		:	500,
				'zoomSpeedOut'		:	500
			});
		});
	</script>

</head>
<body>

<div id="wrap">
<div id="header">
	<div class="logo">
	<a href="<?php echo get_option('home'); ?>/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo5.png" alt="" /></a>
	</div>

<div id="top-nav-wrapper">
	<div class="column-one">
	<h4>Portfolio</h4>
	<ul>
	<li><a href="http://www.dizenoco.com/demo/category/websites/">Websites</a></li>
	<li><a href="http://www.dizenoco.com/demo/category/print-media/">Print Media</a></li>
	<li><a href="http://www.dizenoco.com/demo/category/corporate-branding/">Corporate Branding</a></li>
	<li><a href="http://www.dizenoco.com/demo/category/logos-icons/">Logos &amp; Icons</a></li>
	<li><a href="http://www.dizenoco.com/demo/category/themes-templates/">Themes &amp; Templates</a></li>
	</ul>
	</div>

	<div class="column-two">
	<h4>Services</h4>
	<ul>
	<li><a href="http://www.dizenoco.com/demo/graphic-designs/">Graphic Designs</a></li>
	<li><a href="http://www.dizenoco.com/demo/web-development/">Web Development</a></li>
	<li><a href="http://www.dizenoco.com/demo/content-management/">Content Management</a></li>
	<li><a href="http://www.dizenoco.com/demo/online-marketing/">Online Marketing</a></li>
	<li><a href="http://www.dizenoco.com/demo/ad-campaigns/">Ad Campaigns</a></li>
	</ul>
	</div>

	<div class="column-three">
	<h4>About Myself</h4>
	<ul>
	<li><a href="http://www.dizenoco.com/demo/about-me/">Brief Biography</a></li>
	<li><a href="http://www.dizenoco.com/demo/category/blog/">My Blog</a></li>
	<li><a href="http://www.dizenoco.com/demo/hire-my-services/">Hire My Services</a></li>
	<li><a href="http://www.dizenoco.com/demo/contact-me/">Contact Me</a></li>
	<li><a href="http://shop.dizenoco.com/product.php?productid=17516&cat=0&page=&featured=Y">Buy Pro Version</a></li>
	</ul>
	</div> 

</div>
</div>
