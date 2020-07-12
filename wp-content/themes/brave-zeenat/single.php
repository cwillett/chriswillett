<?php get_header(); ?>

<div id="content">

	<?php if (have_posts()) :?>
		<?php $postCount=0; ?>
		<?php while (have_posts()) : the_post();?>
		<?php $postCount++;?>
		<div class="entry entry-<?php echo $postCount ;?>">
		<div class="entrytitle">
		
		<?php $thumbnail = get_post_meta($post->ID, 'Thumbnail', true); ?>
		<?php if($thumbnail !== '') { ?>
		<a class="zoom" rel="group" href="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php echo $thumbnail; ?>&amp;h=300&amp;w=900&amp;zc=1" title="<?php the_title(); ?>">
		<img src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php echo $thumbnail; ?>&amp;h=200&amp;w=537&amp;zc=1" alt="<?php the_title(); ?>" /></a>
		<?php } ?>

		<h1><?php the_title(); ?></h1> 

		<div class="meta-data">Posted by <?php the_author() ?><br></br>
		Published on <?php the_time('l, F jS, Y') ?> | <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>
		</div>
		</div>
		<div class="entrybody">
		<?php the_content(''); ?>
		</div>
		
		
		<div class="seperator"></div>

	</div>
	<div class="commentsblock">
	<?php comments_template(); ?>
	</div>

	<?php endwhile; ?>
	<?php else : ?>

	<h2>Not Found</h2>
	<div class="entrybody">Sorry, but you are looking for something that isn't here.</div>

	<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>