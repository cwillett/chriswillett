<?php
/*
Template Name: Full Width Page
*/
?>

<?php get_header(); ?>

	<div id="fullwidth-container">

	<?php if (have_posts()) :?>
		<?php $postCount=0; ?>
		<?php while (have_posts()) : the_post();?>
		<?php $postCount++;?>
	<div class="entry entry-<?php echo $postCount ;?>">
		<div class="entrytitle">
		
		<?php $thumbnail = get_post_meta($post->ID, 'Thumbnail', true); ?>
		<?php if($thumbnail !== '') { ?>
		<img src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php echo $thumbnail; ?>&amp;h=200&amp;w=900&amp;zc=1" alt="<?php the_title(); ?>" />
		<?php } ?>

		<h3><?php the_title(); ?></h3> 
		<br></br>

		</div>
		<?php the_content(''); ?>
		
	</div>
	
	<?php endwhile; ?>
	
	<?php else : ?>

	<h2>Not Found</h2>
	<div class="entrybody">Sorry, but you are looking for something that isn't here.</div>

	<?php endif; ?>
</div>
<?php get_footer(); ?>