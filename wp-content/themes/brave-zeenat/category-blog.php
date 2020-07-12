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
		<a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>">
		<img src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php echo $thumbnail; ?>&amp;h=200&amp;w=537&amp;zc=1" alt="<?php the_title(); ?>" /></a>
		<?php } ?>

		<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h1> 

		<div class="meta-data">Posted by <?php the_author() ?><br></br>
		Published on <?php the_time('l, F jS, Y') ?> | <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>
		</div>
		</div>
		<div class="entrybody">
		<?php the_content(''); ?>
		</div>
	
	</div>

<div class="seperator"></div>
	
	<?php endwhile; ?>

		<?php if(function_exists('wp_pagenavi')) { ?> 	
		<div id="page-navigator">
		<?php wp_pagenavi(); ?>
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

<br clear="all" />
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>