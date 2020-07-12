				<?php $option = get_option('iridium-options'); ?>
				
				</div>
				
				<!-- End Wrapper -->
				
				<?php if($option['footer_enabled'] == 'true') { ?>
				
				<!-- Begin Footer -->
				
				<div class="wrapper">
					<div id="main-trans2">
						<div id="footer">
							<div id="footer-bg">
								<div id="footer-bg2">
									<div id="mainmodules4" class="spacer w99">
										<div class="block full">
											<div class="">
												<div class="moduletable">
													<div class="module-padding">
													
														<?php if(is_active_sidebar('footer_1') || (get_posts('cat='.$option['footer_cat']) && $option['footer_cat'] != '-1')) { ?>
						
														<!-- Begin Footer 1 Widget -->
														
														<div class="demo-footer-block">
															<div class="demo-footer-text">
																
																<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 1') ) : ?>
																									
																	<?php query_posts('showposts=1&orderby='.$option['footer_order'].'&cat='.$option['footer_cat']) ?>
																	<?php while (have_posts()) : the_post(); ?>
																			
																	<div <?php post_class(); ?>>
																		
																		<span class="highlight-bold"><?php the_title(); ?></span>
																		
																		<?php if($option['footer_content'] == 'content') { ?>
																		
																		<?php the_content(_r('(more...)')); ?>
																		
																		<?php } else { ?>
																		
																		<?php the_excerpt(); ?>
																		
																		<?php } ?>
																		
																	</div>
																				
																	<?php endwhile; ?>
																			
																<?php endif; ?>
																
															</div>
														</div>
														
														<!-- End Footer 1 Widget -->
														
														<?php } ?>
													
														<?php if(is_active_sidebar('footer_2') || ($option['footer_recent_enabled'] == 'true' && $option['footer_post_count'] != 0)) { ?>
											
														<!-- Begin Footer 2 Widget -->
																
														<div class="demo-footer-block">
															<div class="demo-footer-text">
																
																<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 2') ) : ?>
																	
																	<span class="highlight-bold"><?php _re('Recent Posts'); ?></span>
																	<ul class="bullet-1">
																		<?php wp_get_archives('title_li=&type=postbypost&limit='.$option['footer_post_count']); ?>
																	</ul>	
															
																<?php endif; ?>
																
															</div>
														</div>
																
														<!-- End Footer 2 Widget -->
														
														<?php } ?>
														
														<?php if(is_active_sidebar('footer_3') || ($option['footer_modified_enabled'] == 'true' && $option['footer_post_count'] != 0)) { ?>
											
														<!-- Begin Footer 3 Widget -->
																
														<div class="demo-footer-block">
															<div class="demo-footer-text">
																
																<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 3') ) : ?>
																
																	<span class="highlight-bold"><?php _re('Last Modified'); ?></span>
																		
																	<ul class="bullet-8">
																			
																	<?php query_posts('showposts='.$option['footer_post_count'].'&orderby=modified&order=DESC') ?>
																	<?php while (have_posts()) : the_post(); ?>									
											
																		<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
											
																	<?php endwhile; ?>
																		
																	</ul>
																	
																<?php endif; ?>
														
															</div>	
														</div>
																
														<!-- End Footer 3 Widget -->
														
														<?php } ?>
														
														<?php if(is_active_sidebar('footer_4') || ($option['footer_popular_enabled'] == 'true' && $option['footer_post_count'] != 0)) { ?>
											
														<!-- Begin Footer 4 Widget -->
																
														<div class="demo-footer-block">
															<div class="demo-footer-text">
																
																<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 4') ) : ?>
																	
																	<?php $wp_ver = get_bloginfo('version'); ?>
							
																	<span class="highlight-bold"><?php _re('Popular Posts'); ?></span>
																		
																	<?php if($wp_ver >= 2.9) { ?>
																		
																		<ul class="bullet-7">
																		
																			<?php query_posts('showposts='.$option['footer_post_count'].'&orderby=comment_count&order=DESC') ?>
																			<?php while (have_posts()) : the_post(); ?>									
											
																			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
											
																			<?php endwhile; ?>
																			
																		</ul>
																		
																	<?php } else { ?>
																		
																		<ul class="bullet-7">
																			<?php $result = $wpdb->get_results("SELECT comment_count,ID,post_title FROM $wpdb->posts ORDER BY comment_count DESC LIMIT 0 , ".$option['footer_post_count']);
																			foreach ($result as $post) {
																			setup_postdata($post);
																			$postid = $post->ID;
																			$title = $post->post_title;
																			$commentcount = $post->comment_count;
																			if ($commentcount != 0) { ?>
																			<li><a href="<?php echo get_permalink($postid); ?>" title="<?php echo $title ?>"><?php echo $title ?></a></li>
																			<?php } } ?>
																		</ul>
																		
																	<?php } ?>
																
																<?php endif; ?>
														
															</div>		
														</div>
																
														<!-- End Footer 4 Widget -->
														
														<?php } ?>
							
														<div class="clr"></div>
													
													</div>
												</div>
											</div>
										</div>
									</div>
									
									<?php if($option['footer_logo'] == 'true' || $option['footer_copyright'] == 'true' || $option['footer_backtop'] == 'true') { ?>
					
									<!-- Begin Copyright Section -->
									
									<div class="copyright-block">
										<div class="footer-div"></div>
										
										<?php if($option['footer_logo'] == 'true') { ?>
									
										<!-- Begin Footer Logo -->
										
										<a href="http://www.rockettheme.com/" title="RocketTheme WordPress Templates Club" id="rocket" name="rocket"></a>
										
										<!-- End Footer Logo -->
										
										<?php } ?>
										
										<?php if($option['footer_copyright'] == 'true') { ?>
											
										<!-- Begin Copyright -->
										
										<div id="copyright">
											<?php echo $option['footer_copyright_text']; ?>
										</div>
										
										<!-- End Copyright -->
										
										<?php } ?>
										
										<?php if($option['footer_backtop'] == 'true') { ?>
					
										<!-- Begin Back To Top -->
										
										<div id="top-button">
											<a href="#" id="top-scroll" class="top-button-desc"><?php _re('Back to Top'); ?></a>
										</div>
										
										<!-- End Back To Top -->
										
										<?php } ?>
				
									</div>
									
									<!-- End Copyright Section -->
									
									<?php } ?>
									
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- End Footer -->
				
				<?php } ?>
				
			</div>
		</div>
		
		<?php wp_footer(); ?>
		
	</body>
</html>