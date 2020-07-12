<?php get_header(); ?>
<div id="content">

	<div id="search-tags-title">
	<p>Search results for: <em>&#8216;<?php echo $s ?>&#8217;</em></p>
	</div>

	<?php if (have_posts()) :?>
		<?php $postCount=0; ?>
		<?php while (have_posts()) : the_post();?>
		<?php $postCount++;?>
		<div class="entry entry-<?php echo $postCount ;?>">
		<div class="entrytitle">

		<?php $thumbnail = get_post_meta($post->ID, 'Thumbnail', true); ?>
		<?php if($thumbnail !== '') { ?>
		<a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>">
		<img src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php echo $thumbnail; ?>&amp;h=100&amp;w=150&amp;zc=1" alt="<?php the_title(); ?>" class="thumbnail"/></a>
		<?php } ?>

		<h4><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h4> 			
		</div>

		<div class="entrymeta">
		<div class="postinfo">
			<span class="postedby">Published on <?php the_time('l, F jS, Y') ?></span>
			<span class="filedto">Filed in <?php the_category(', ') ?></span>
		</div>
		</div>

		<div class="entrybody">
		<?php if (function_exists('the_content_limit')) { the_content_limit(250, ""); } else { echo 'You have not uploaded and acivated the limit posts plugin. This is required.'; } ?>
		</div>
		
	</div>

	<div class="seperator"></div>

	<?php endwhile; ?>

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

		<h2>Searched Content Not Found</h2>
		<p>Sorry, we couldn't find the content or page you were looking for. However, we have selected a random page from our site; see if you might be interested :)</p>

		<br clear="all" />

		<?php $posts = get_posts('orderby=rand&numberposts=1'); foreach($posts as $post) { ?>

		<?php 
		$thumb = get_post_meta($post->ID, 'Thumbnail', $single = true);
		$thumb_alt = get_post_meta($post->ID, 'Thumbnail Alt', $single = true);
		?>
		<?php 
		if($thumb !== '') { ?>
		<a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php echo $thumb; ?>&amp;h=200&amp;w=537&amp;zc=1" alt="<?php if($thumb_alt !== '') { echo $thumb_alt; } else { echo the_title(); } ?>"  class="thumbnail" /></a>
		<?php } 
		else { echo ''; } ?>

		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2> 
		<div class="meta-data">Published on <?php the_time('l, F jS, Y') ?> | <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>		
		</div>

		<?php } ?>


	<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>