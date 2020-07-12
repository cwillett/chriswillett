<?php get_header(); ?>
<div class="main">
	
	<? include("nav.php");?>   
	<div class="content">
		<div class="left_col">
			<div id="news">
				<!-- <img src="<?php bloginfo('template_url'); ?>/images/news.gif" vspace="0" hspace="0" border="0" class="image"><br /> -->
				<div class="section_head"><a href="/news/" class="section_title">news</a></div>
				  <?
				  global $x;
				  wp_reset_query();	
				  /* Get all sticky posts */
				  $sticky = get_option( 'sticky_posts' );
				
				  /* Sort the stickies with the newest ones at the top */
				  rsort( $sticky );
				
				  /* Get the 5 newest stickies (change 5 for a different number) */
				  $sticky = array_slice( $sticky, 0, 2 );
				  
				  query_posts(array('post__in'=>$sticky,'post__not_in'=>array(28),'category__in'=>array(1,3,6),
				  	'orderby'=>'date','order'=>'DESC','caller_get_posts' => 1 ));
				  $x=1;
				  show_the_loop($x);
				
				wp_reset_query();
				$sticky[]=28;
				query_posts(array('post__not_in'=>$sticky,'category__in'=>array(1,3,6)));
				
				show_the_loop($x);
				
				wp_reset_query();
				?>
			</div>
			<div id="photos">
				<!-- <img src="<?php bloginfo('template_url'); ?>/images/photos.gif" vspace="0" hspace="0" border="0" class="image"><br /> -->
				<div class="section_head"><a href="/photos/" class="section_title">photos</a></div>
				<? //wp_carousel(0);
				query_posts("tag=carousel");
				while (have_posts()) : the_post(); ?>
				  <div class="post" id="post-<?php the_ID(); ?>">
					<div class="entry">
					  <? the_content(__('Continue reading &raquo;')); ?>
					</div>
				</div>
				<?
				endwhile; 
				wp_reset_query();
				?><br /><br />
			</div>
		</div>
		<div class="right_col">
			<div id="videos" style="text-align:right">
				<!-- <img src="<?php bloginfo('template_url'); ?>/images/videos.gif" vspace="0" hspace="0" border="0" class="image"> -->
				<div class="section_head video_head"><a href="/videos/" class="section_title">videos</a></div>
				<object width="395" height="220">
				<param name="movie" value="http://www.youtube.com/v/tRws8o9NW5s?fs=1&amp;hl=en_US"></param>
				<param name="allowFullScreen" value="true"></param>
				<param name="allowscriptaccess" value="always"></param>
				<embed src="http://www.youtube.com/v/tRws8o9NW5s?fs=1&amp;hl=en_US" type="application/x-shockwave-flash" 
				allowscriptaccess="always" allowfullscreen="true" width="395" height="220"></embed></object><br><br>
				
				<a href="/videos">more videos...</a>
				
			</div>
			<div class="ga_banner_300x250">
				<script type="text/javascript"><!--
				google_ad_client = "ca-pub-3375353024183405";
				/* 300 x 250 Sidebar */
				google_ad_slot = "9754491072";
				google_ad_width = 300;
				google_ad_height = 250;
				//-->
				</script>
				<script type="text/javascript"
				src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
				</script>
				<!--adsensestart-->
			</div>
			<div id="mp3s" style="text-align:right">
				<div class="section_head"><a class="section_title">audio</a></div>
				<ul>
					<li>Band: <a href="http://cdbaby.com/cd/flexie">Flexie</a></li>
					<li><a href="/wp-content//mp3s/MyRider.mp3s">My Rider</a></li>
					<li><a href="/wp-content//mp3s/Hyacinth.mp3s">Hyacinth</a></li>
				</ul>
				<ul>
					<li>Band: <a href="http://chemicalburnmusic.com/">Chemical Burn</a></li>
					<li><a href="/wp-content/mp3s/WithinMe.m4a">Within Me</a></li>
					<li><a href="/wp-content/mp3s/Leech.m4a">Leech</a></li>
					<li><a href="/wp-content/mp3s/BetterOffDead.m4a">Better Off Dead</a></li>
				</ul>
				<ul>
					<li>Band: <a href="http://www.erikasimonian.com/twentynine.html">Erika Simonian</a></li>
					<li><a href="/wp-content/mp3s/NYC.m4a">NYC</a></li>
					<li><a href="/wp-content/mp3s/BetweentheLines.m4a">Between the Lines</a></li>
				</ul>
				<a href="/wp-content/mp3s/">more mp3s...</a>
			</div>
			<div id="social" style="text-align:right">
                <div class="section_head"><a href="#" class="section_title">social media</a></div>
                <div style="text-align:right;float: right"><?php if (function_exists("DISPLAY_ACURAX_ICONS")) { DISPLAY_ACURAX_ICONS(); } ?></div>
    		</div>
		</div>
		

		<div class="cb"></div>
	</div>
</div>
<?php get_footer(); ?>
