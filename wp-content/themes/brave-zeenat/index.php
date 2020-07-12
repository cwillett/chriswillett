<?php get_header(); ?>

<!-- This is the scroll content area; the one with the bigger images -->
<div id="main">

	<!-- And this is where you configure your scroll content -->
	<div id="pages">

		<!-- page #1 -->
		<div class="page">

		<!-- sub navigator #1 -->

		<div class="navi"></div>

		<!-- inner scrollable #1 -->
		<div class="scrollable">

		<!-- root element for scrollable items -->
		<div class="items">

		<?php $recent = new WP_Query("category_name='websites'&showposts=3"); while($recent->have_posts()) : $recent->the_post();?>

		<!-- items  -->
		<div class="item">

		<?php $thumbnail = get_post_meta($post->ID, 'Thumbnail', true); ?>
		<?php if($thumbnail !== '') { ?>
		<img src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php echo $thumbnail; ?>&amp;h=300&amp;w=898&amp;zc=1" alt="<?php the_title(); ?>" />
		<?php } ?>

		<h3><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>"><?php the_title2('', '..', true, '75'); ?></a></h3>
		<div class="meta-data">Posted by <?php the_author() ?> | Published on <?php the_time('l, F jS, Y') ?> | <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></div>
		<?php if (function_exists('the_content_limit')) { the_content_limit(550, ""); } else { echo 'You have not uploaded and acivated the limit posts plugin. This is required.'; } ?>
		<div class="meta-data">Taged in: <?php the_tags(' ', ', ', ', '); ?></div>

		</div>

		<?php endwhile; ?>

		</div>
		</div>
		</div>


		<!-- page #2 -->
		<div class="page">

		<!-- sub navigator #2 -->

		<div class="navi"></div>

		<!-- inner scrollable #2 -->
		<div class="scrollable">

		<!-- root element for scrollable items -->
		<div class="items">

		<?php $recent = new WP_Query("category_name='print-media'&showposts=3"); while($recent->have_posts()) : $recent->the_post();?>

		<!-- items  -->
		<div class="item">

		<?php $thumbnail = get_post_meta($post->ID, 'Thumbnail', true); ?>
		<?php if($thumbnail !== '') { ?>
		<img src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php echo $thumbnail; ?>&amp;h=300&amp;w=898&amp;zc=1" alt="<?php the_title(); ?>" />
		<?php } ?>

		<h3><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>"><?php the_title2('', '..', true, '75'); ?></a></h3>
		<div class="meta-data">Published on <?php the_time('l, F jS, Y') ?> | <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></div>
		<?php if (function_exists('the_content_limit')) { the_content_limit(550, ""); } else { echo 'You have not uploaded and acivated the limit posts plugin. This is required.'; } ?>
		<div class="meta-data">Taged in: <?php the_tags(' ', ', ', ', '); ?></div>

		</div>

		<?php endwhile; ?>

		</div>
		</div>
		</div>


		<!-- page #3 -->
		<div class="page">

		<!-- sub navigator #3 -->

		<div class="navi"></div>

		<!-- inner scrollable #3 -->
		<div class="scrollable">

		<!-- root element for scrollable items -->
		<div class="items">

		<?php $recent = new WP_Query("category_name='corporate-branding'&showposts=3"); while($recent->have_posts()) : $recent->the_post();?>

		<!-- items  -->
		<div class="item">

		<?php $thumbnail = get_post_meta($post->ID, 'Thumbnail', true); ?>
		<?php if($thumbnail !== '') { ?>
		<img src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php echo $thumbnail; ?>&amp;h=300&amp;w=898&amp;zc=1" alt="<?php the_title(); ?>" />
		<?php } ?>

		<h3><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>"><?php the_title2('', '..', true, '75'); ?></a></h3>
		<div class="meta-data">Published on <?php the_time('l, F jS, Y') ?> | <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></div>
		<?php if (function_exists('the_content_limit')) { the_content_limit(550, ""); } else { echo 'You have not uploaded and acivated the limit posts plugin. This is required.'; } ?>
		<div class="meta-data">Taged in: <?php the_tags(' ', ', ', ', '); ?></div>

		</div>

		<?php endwhile; ?>

		</div>
		</div>
		</div>


		<!-- page #4 -->
		<div class="page">

		<!-- sub navigator #4 -->

		<div class="navi"></div>

		<!-- inner scrollable #4 -->
		<div class="scrollable">

		<!-- root element for scrollable items -->
		<div class="items">

		<?php $recent = new WP_Query("category_name='logos-icons'&showposts=3"); while($recent->have_posts()) : $recent->the_post();?>

		<!-- items  -->
		<div class="item">

		<?php $thumbnail = get_post_meta($post->ID, 'Thumbnail', true); ?>
		<?php if($thumbnail !== '') { ?>
		<img src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php echo $thumbnail; ?>&amp;h=300&amp;w=898&amp;zc=1" alt="<?php the_title(); ?>" />
		<?php } ?>

		<h3><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>"><?php the_title2('', '..', true, '75'); ?></a></h3>
		<div class="meta-data">Published on <?php the_time('l, F jS, Y') ?> | <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></div>
		<?php if (function_exists('the_content_limit')) { the_content_limit(550, ""); } else { echo 'You have not uploaded and acivated the limit posts plugin. This is required.'; } ?>
		<div class="meta-data">Taged in: <?php the_tags(' ', ', ', ', '); ?></div>

		</div>

		<?php endwhile; ?>

		</div>
		</div>
		</div>


		<!-- page #5 -->
		<div class="page">

		<!-- sub navigator #5 -->

		<div class="navi"></div>

		<!-- inner scrollable #5 -->
		<div class="scrollable">

		<!-- root element for scrollable items -->
		<div class="items">

		<?php $recent = new WP_Query("category_name='themes-templates'&showposts=3"); while($recent->have_posts()) : $recent->the_post();?>

		<!-- items  -->
		<div class="item">

		<?php $thumbnail = get_post_meta($post->ID, 'Thumbnail', true); ?>
		<?php if($thumbnail !== '') { ?>
		<img src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php echo $thumbnail; ?>&amp;h=300&amp;w=898&amp;zc=1" alt="<?php the_title(); ?>" />
		<?php } ?>

		<h3><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>"><?php the_title2('', '..', true, '75'); ?></a></h3>
		<div class="meta-data">Published on <?php the_time('l, F jS, Y') ?> | <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></div>
		<?php if (function_exists('the_content_limit')) { the_content_limit(550, ""); } else { echo 'You have not uploaded and acivated the limit posts plugin. This is required.'; } ?>
		<div class="meta-data">Taged in: <?php the_tags(' ', ', ', ', '); ?></div>

		</div>

		<?php endwhile; ?>

		</div>
		</div>
		</div>

	</div>
</div>

<div id="bottom">
<!-- This is the left navigation on Home Page -->
<ul id="main_navi">
	<li><img src="<?php bloginfo('stylesheet_directory'); ?>/images/web.jpg" alt="Websites" /></li>
	<li><img src="<?php bloginfo('stylesheet_directory'); ?>/images/print.jpg" alt="Print Media" /></li>
	<li><img src="<?php bloginfo('stylesheet_directory'); ?>/images/branding.jpg" alt="Corporate Branding" /></li>
	<li><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logos.jpg" alt="Logos Icons" /></li>
	<li><img src="<?php bloginfo('stylesheet_directory'); ?>/images/themes.jpg" alt="Themes Templates" /></li>
</ul>

<div id="twitter-feed">
	<ul id="twitter_update_list"><li></li></ul>
</div>

<div id="search-form">
	<?php $search_text = "Search"; ?> 
	<form method="get" id="searchform"  
	action="<?php bloginfo('home'); ?>/"> 
	<input type="text" value="<?php echo $search_text; ?>"  
	name="s" id="s"  
	onblur="if (this.value == '')  
	{this.value = '<?php echo $search_text; ?>';}"  
	onfocus="if (this.value == '<?php echo $search_text; ?>')  
	{this.value = '';}" /> 
	<input type="hidden" id="searchsubmit" /> 
	</form>
</div>

<!-- KEEP THIS FOR TWITTER FEED -->
<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/amirsaleem.json?callback=twitterCallback2&amp;count=1"></script>

</div>
<br clear="all" />

<script type="text/javascript">
$(document).ready(function() {
$("#main").scrollable({
	vertical: true,
	size: 1,
	clickable: false,
	keyboard: 'static',
	onSeek: function(event, i) {
		horizontal.scrollable(i).focus();
	}
}).navigator("#main_navi");
var horizontal = $(".scrollable").scrollable({size: 1}).circular().navigator(".navi");
horizontal.eq(0).scrollable().focus();
});
</script>

<?php get_footer(); ?>