<?php
if ( function_exists( 'register_nav_menus' ) ) register_nav_menus(array('topnav' => __( 'Top Nav' )));
  
add_theme_support('menus');

if ( function_exists('register_sidebars') ) {
	register_sidebars(3,
		array(
	        'before_widget' => '',
	        'after_widget' => '',
	        'before_title' => '<div class="title">',
	        'after_title' => '</div>',
	    )
	);
}


function show_the_loop($x) {
	global $post;
	while (have_posts()) : the_post(); ?>
	  <div class="post" id="post-<?php the_ID(); ?>">
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('Permanent Link to')?> <?php the_title(); ?>">
		  <?php the_title(); ?></a></h2>					
		<div class="entry">
		  <?php the_content(__('Continue reading &raquo;')); ?>
		</div>
	  </div>
	<? if($x==2) {?>
	  <div class="ga_banner_468x60">
		<script type="text/javascript"><!--
		google_ad_client = "ca-pub-3375353024183405";
		/* 468 x 60 Banner */
		google_ad_slot = "0085133969";
		google_ad_width = 468;
		google_ad_height = 60;
		//-->
		</script>
		<script type="text/javascript"
		src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
		</script>
	  </div>
	<? }
		comments_template(); 
		$x++;
	endwhile;
}
