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

		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2> 

		</div>

		<div class="entrybody">
		<?php the_content(''); ?>
		</div>
		
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