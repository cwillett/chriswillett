<?php
/**
 * Template Name: Contact
**/
get_header(); ?>
<div class="main">
	<? include("nav.php");?> 
	<div class="content">
		<div class="left_col">
			<div id="contact">
				<div class="section_head"><a href="/contact/" class="section_title">contact</a></div>
				<?
				query_posts('category_name=contact');
				while (have_posts()) : the_post(); ?>
					<div class="post" id="post-<?php the_ID(); ?>">
						<h3><?php the_title(); ?></h3>					
						<div class="entry">
						  <?php the_content(__('Continue reading &raquo;')); ?>
						</div>
				  	</div>
				  <?
				endwhile;
				wp_reset_query();
				?>
				
					<!--<div class="entry">
					   You can email me at <a href="mailto:chris_willett77@yahoo.com">chris_willett77@yahoo.com</a>. Thanks!
					  
					</div> -->
				</div>
			</div>
				
		</div>
		<div class="right_col">
		<? get_sidebar(); ?>
		</div>
		<div class="cb"></div>
	</div>
</div>

<?php get_footer(); ?>
