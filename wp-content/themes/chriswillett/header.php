<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> 

<link rel="stylesheet/less" type="text/css" href="/wp-content/themes/chriswillett/styles.css" />
<script type="text/javascript" src="/wp-content/themes/chriswillett/less.js"></script>
</head>
<body>
<div id="logo"><div id="chriswillett" class="left_col"><a href="<?= get_option('home');?>">Chris Willett</a></div>
		<div id="drums" class="right_col"><a href="<?= get_option('home');?>">Drums</a></div></div>
<div class="header"> 
	<div id="header_container"></div>
</div>
<? wp_head();
