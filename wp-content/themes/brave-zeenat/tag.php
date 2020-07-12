<?php get_header(); ?>
<div id="content">


	<div id="search-tags-title">
	<p>Tag: <?php echo single_tag_title(); ?></p><br />
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

		<h2>Not Found</h2>
		<div class="entrybody">Sorry, but you are looking for something that isn't here.</div>

	<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>