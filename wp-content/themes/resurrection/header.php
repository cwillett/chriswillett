<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<!-- leave this for stats -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<!--[if lt IE 7]><script defer type="text/javascript" src="http://www.vikiworks.com/pngfix.js"></script><![endif]-->
<!-- Feed and Ping URLS-->
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!-- End Feed and Ping URLS-->
<?php wp_head(); ?>
</head>
<body>

<div id="container">
<div id="header">
  <ul id="menu">
    <li id="rss"><a href="<?php bloginfo('rss2_url'); ?>">rss</a></li>
  </ul>
  <h1><a href="<?php echo get_option('home'); ?>/">
    <?php bloginfo('name'); ?>
    </a></h1>
</div>

<div id="wrapper">
