<?php get_header(); ?>


	<div id="portfolio-container">
	<div id="portfolio-title">
	<?php single_cat_title(); ?>
	</div>

	<?php if (have_posts()) :?>
		<?php $postCount=0; ?>
		<?php while (have_posts()) : the_post();?>
			<?php $postCount++;?>
	
	<div class="entry entry-<?php echo $postCount ;?>">
	

		<?php $thumbnail = get_post_meta($post->ID, 'Thumbnail', true); ?>
		<div class="portfolio-thumbnail">
		<?php if($thumbnail !== '') { ?>
		<a class="zoom" rel="group" href="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php echo $thumbnail; ?>&amp;h=300&amp;w=900&amp;zc=1" title="<?php the_title(); ?>">
		<img src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php echo $thumbnail; ?>&amp;h=75&amp;w=156&amp;zc=1" alt="<?php the_title(); ?>" /></a>
		<?php } ?>

		<h5><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>"><?php the_title2('', '..', true, '20'); ?></a></h5>
		</div>
	
	</div>
	<?php endwhile; ?>

	<br clear="all" />

	<?php if(function_exists('wp_pagenavi')) { // if PageNavi is activated ?> 	
	<div id="page-navigator">
	<?php wp_pagenavi(); // Use PageNavi ?>
	</div> 	
	<?php } else { // Otherwise, use traditional Navigation ?> 	
	<div class="navigation"> 	
	<div class="floatleft">
	<?php next_posts_link('&laquo; Older Entries') ?>
	</div> 	
	<div class="floatright">
	<?php previous_posts_link('Newer Entries &raquo;') ?>
	</div> 	
	</div> 	
	<?php } ?>
		
	<?php else : ?>

		<h2>Not Found</h2>
		<div class="entrybody">Sorry, but you are looking for something that isn't here.</div>

	<?php endif; ?>


</div>

<br clear="all" />

<?php get_footer(); ?>