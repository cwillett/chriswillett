<div id="sidebar">

<div id="about">
<ul>
        <li><a href="<?php echo get_option('home'); ?>/">
          <?php _e('home')?>
          </a></li>
        <?php wp_list_pages('sort_column=menu_order&title_li='.$page_sort)?>
</ul>
</div>
  
 
<div id="twitter">
<?php aktt_sidebar_tweets(); ?>
  </div>


<div id="utwtag"> 
<?php UTW_ShowWeightedTagSetAlphabetical("sizedcoloredtagcloud","",0) ?>
  </div>


<div class="clear"></div>

<div class="recent-posts">
<h2>Recent Posts</h2>
<ul>
	<?php
		// I love Wordpress so
		query_posts('showposts=16');
	?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<li><a href="<?php the_permalink() ?>"> <?php the_title() ?> </a></li>
	<?php endwhile; endif; ?>
</ul>
</div>  
  
  
  
<div class="cat">
<h2>Categories</h2>
<ul><?php wp_list_cats('sort_column=name&hierarchical=0'); ?></ul>
</div>




<div class="monthly">
<h2>Monthly archives</h2>
<ul><?php wp_get_archives('type=monthly&limit=6'); ?></ul>
</div>



<div class="sponsor">
<h2>Sponsors</h2>
<ul><li><a href="http://www.krop.com/jobs/step1_configure/?krop_affiliate=q4gj">Post a job at krop.com</a></li>
<li><a href="http://www.text-link-ads.com/?ref=40294">Monetize Your Site</a></li></ul>
<center><script type="text/javascript"><!--
google_ad_client = "pub-0203810413356879";
google_ad_width = 180;
google_ad_height = 60;
google_ad_format = "180x60_as_rimg";
google_cpa_choice = "CAAQ24Oy0QEaCH9Si1cjMAnSKMu293MwAA";
google_ad_channel = "8828238681";
//-->
</script>
<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<script type="text/javascript"><!--
google_ad_client = "pub-0203810413356879";
google_ad_width = 160;
google_ad_height = 600;
google_ad_format = "160x600_as";
google_ad_type = "text_image";
google_ad_channel = "";
google_color_border = "0b3262";
google_color_bg = "0b3262";
google_color_link = "679ef1";
google_color_text = "eeeeee";
google_color_url = "679ef1";
//-->
</script>
<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
</center>
</div>


<div class="delicious">
<h2>delicious</h2>
<script type="text/javascript" src="http://del.icio.us/feeds/js/yichi?extended;count=15;"></script>
<noscript><a href="http://del.icio.us/yichi">my del.icio.us</a></noscript>
</div>


<div id="sbm">

<p>&copy; <?php echo date("Y")." ";  ?> <?php bloginfo('name'); ?> <br /> 
	<!-- 
	PLEASE KEEPING THIS LINKBACK FOR ME, THANKS!
	  -->
WP theme & icons by <a href="http://www.vikiworks.com/" title="Vikiworks">yichi</a>. Thanks to <a title="Free Wordpress Themes" href="http://www.themesplice.com" target="_blank">Free Wordpress Themes</a>. </p>
</div>

  
</div>

