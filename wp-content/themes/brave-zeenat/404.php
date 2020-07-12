<?php get_header(); ?>

<div id="fullwidth-container">

	<img src="<?php bloginfo('stylesheet_directory'); ?>/images/404.jpg" alt="Page Not Found" />


	<p>Sorry, we couldn't find the page you were looking for. However, we have selected a random page from our site; see if you might be interested :)</p>
	<p><a href="<?php bloginfo('url'); ?>">Alternatively, click here to go back to HomePage. <?php bloginfo('name'); ?></a> </p>

	<br clear="all" />

	<?php $posts = get_posts('orderby=rand&numberposts=1'); foreach($posts as $post) { ?>

		<?php 
		$thumbnail = get_post_meta($post->ID, 'Thumbnail', true); ?>
		<?php if($thumbnail !== '') { ?>
		<a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>">
		<img src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php echo $thumbnail; ?>&amp;h=100&amp;w=900&amp;zc=1" alt="<?php the_title(); ?>"/></a>
		<?php } ?>

		<div class="meta-data">
		<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a> | 
		Published on <?php the_time('l, F jS, Y') ?> | 
		Categorized in <?php the_category(', ') ?>
		</div>
		
	<?php } ?>


</div>

<?php get_footer(); ?>