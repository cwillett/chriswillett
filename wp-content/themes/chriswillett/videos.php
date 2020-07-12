<?php
/**
 * Template Name: Videos
**/
get_header(); ?>
<div class="main">
	<? include("nav.php");?> 
	<div class="content">
		<div class="left_col">
			<div id="videos">
				<div class="section_head"><a href="/videos/" class="section_title">videos</a></div>
				  <?
				 query_posts('category_name=videos');
				  while (have_posts()) : the_post(); ?>
				  <div class="post" id="post-<?php the_ID(); ?>">
					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('Permanent Link to')?> <?php the_title(); ?>">
					  <?php the_title(); ?></a></h2>					
					<div class="entry">
					  <?php the_content(__('Continue reading &raquo;')); ?>
					</div>
				</div>
				<?
					comments_template();  
				endwhile;
				wp_reset_query();
				?>
			</div>
		</div>
		<div class="right_col">
		<? get_sidebar(); ?>
		</div>
		<div class="cb"></div>
	</div>
</div>

<?php get_footer(); ?>
