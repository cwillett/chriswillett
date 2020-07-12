<?php get_header(); ?>

	<?php $option = get_option('iridium-options'); ?>
	
					<?php if(is_front_page() && (is_active_sidebar('showcase_1') || is_active_sidebar('showcase_2') || $option['showcase_blogroll'] == 'true')) { ?>

					<div id="main-trans-top">
					
						<!-- Begin Showcase -->
						
						<div id="showmodules2" class="spacer w49">
							<div class="feature-module">
							
								<?php if(is_active_sidebar('showcase_1')) { ?>
							
								<!-- Begin Showcase 1 Widget -->
							
								<div class="block first">
									<div class="flush">
										<div class="moduletable">
											<div class="module-padding">

												<?php dynamic_sidebar('Showcase 1'); ?>
												
											</div>
										</div>
									</div>
								</div>
								
								<!-- End Showcase 1 Widget -->
								
								<?php } ?>
								
								<?php if (is_active_sidebar('showcase_2') || $option['showcase_blogroll'] == 'true') { ?>
								
								<!-- Begin Showcase 2 Widget -->
								
								<div class="block last">
									<div class="flush">
										<div class="moduletable">
											<div class="module-padding">
											
												<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Showcase 2') ) : ?>
												
												<ul class="abstract-menu">
													
													<?php $showcase_blogroll = wp_list_bookmarks('echo=0&title_li=&orderby='.$option['showcase_blogroll_order'].'&limit='.$option['showcase_blogroll_limit'].'&link_before=<span>&link_after=</span>&categorize=0&category='.$option['showcase_blogroll_category']);
													
													$showcase_blogroll = str_replace("<a", '<a class="am2"', $showcase_blogroll);
													
													echo $showcase_blogroll;
													
													?>
													
												</ul>
												
												<?php endif; ?>
												
											</div>
										</div>
									</div>
								</div>
								
								<!-- End Showcase 2 Widget -->
								
								<?php } ?>
								
							</div>
						</div>
						
						<!-- End Showcase -->
						
					</div>
					
					<?php } ?>
					
					<div id="main-trans">
					
						<!-- Begin Main Body -->
						
						<div id="main-body">
							<div id="main-content" class="<?php echo $option['layout_subpage']; ?>">
								<div class="colmask leftmenu">
									<div class="colmid">
										<div class="colright">
										
											<!-- Begin Main Column (col1wrap) -->
											
											<div class="col1wrap">
												<div class="col1pad">
													<div class="col1">
														<div id="maincol">
															<div id="main-content-surround">
															
																<?php if(is_front_page() && (is_active_sidebar('features_1') || is_active_sidebar('features_2'))) { ?>
															
																<!-- Begin Feature Widget -->
															
																<div id="main-feature">
																
																	<?php add_filter('widget_title','empty_title_swap'); ?>
																
																	<?php dynamic_sidebar('Features 1'); ?>
																	
																	<?php dynamic_sidebar('Features 2'); ?>
																	
																	<?php remove_filter('widget_title','empty_title_swap'); ?>

																</div>
																
																<!-- End Feature Widget -->
																
																<?php } ?>
																
																<div class="bodycontent">
																
																	<?php if(is_front_page() && is_active_sidebar('inset')) { ?>
																
																	<!-- Begin Inset -->
																
																	<div id="inset-block-left">
																		
																		<?php add_filter('widget_title','empty_title_swap'); ?>
																		
																		<?php dynamic_sidebar('Inset'); ?>
																		
																		<?php remove_filter('widget_title','empty_title_swap'); ?>

																	</div>
																	
																	<!-- End Inset -->
																	
																	<?php } ?>
																	
																	<!-- Begin Posts Wrapper -->
																	
																	<div id="maincontent-block">	
																		<div class="archives-page">
																			<div class="module-tm">
																				<div class="module-tl"></div>
																				<div class="module-tr"></div>
																			</div>
																			<div class="module-inner">
																			
																				<?php 
																											
																				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
																																
																				if (is_category()) {
																					$archive_postcount = $option['category_postcount'];
																					$post_meta_enabled = $option['category_postmeta'];
																					$title_links = $option['category_titlelink'];
																					$title = $option['category_title'];
																					$post_meta_author = $option['category_postmeta_author'];
																					$post_meta_date = $option['category_postmeta_date'];
																					$post_meta_comments = $option['category_postmeta_comments'];
																					$content_display = $option['category_contentdis'];
																				}
																				
																				if (is_day() || is_month() || is_year() || is_author()) {
																					$archive_postcount = $option['archive_postcount'];
																					$post_meta_enabled = $option['archive_postmeta'];
																					$title_links = $option['archive_titlelink'];
																					$title = $option['archive_title'];
																					$post_meta_author = $option['archive_postmeta_author'];
																					$post_meta_date = $option['archive_postmeta_date'];
																					$post_meta_comments = $option['archive_postmeta_comments'];
																					$content_display = $option['archive_contentdis'];
																				}
																				
																				if (is_tag()) {
																					$archive_postcount = $option['tag_postcount'];
																					$post_meta_enabled = $option['tag_postmeta'];
																					$title_links = $option['tag_titlelink'];
																					$title = $option['tag_title'];
																					$post_meta_author = $option['tag_postmeta_author'];
																					$post_meta_date = $option['tag_postmeta_date'];
																					$post_meta_comments = $option['tag_postmeta_comments'];
																					$content_display = $option['tag_contentdis'];
																				}
																											
																				?>
																																
																				<?php query_posts($query_string.'&posts_per_page='.$archive_postcount.'&paged='.$paged); ?>
																				<?php if (have_posts()) : ?>
																				
																				<div class="article-rel-wrapper">
	    																										
						    													<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
					                    										<?php /* If this is a category archive */ if (is_category()) { ?>
					                    											<h2 class="componentheading"><?php _re('Category:'); ?> <?php single_cat_title(); ?></h2>
					                    										<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
					                    											<h2 class="componentheading"><?php _re('Posts Tagged'); ?> &#8216;<?php single_tag_title(); ?>&#8217;</h2>
					                    										<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
					                    											<h2 class="componentheading"><?php _re('Archive for'); ?> <?php the_time('F jS, Y'); ?></h2>
					                  	  										<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
					                    											<h2 class="componentheading"><?php _re('Archive for'); ?> <?php the_time('F, Y'); ?></h2>
					                    										<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
					                    											<h2 class="componentheading"><?php _re('Archive for'); ?> <?php the_time('Y'); ?></h2>
					                    										<?php /* If this is an author archive */ } elseif (is_author()) { ?>
					                    											<h2 class="componentheading"><?php _re('Author Archive'); ?></h2>
					                    										<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
					                   												<h2 class="componentheading"><?php _re('Blog Archives'); ?></h2>
					                   											<?php } ?>
					                   																							
						    													</div>
						    																									
						    													<?php while (have_posts()) : the_post(); ?>
																			
																				<!-- Begin Post -->
																			
																				<div class="leading">
																					<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
																						
																						<?php if ($title == 'true') { ?>
																	
																						<!-- Begin Title -->
																					
						   																<div class="article-rel-wrapper">
						   																
						   																	<?php if ($title_links == 'true') { ?>
						   																
																							<h2 class="contentheading">
																								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
																							</h2>
																								
																							<?php } else { ?>
																								
																							<h2 class="contentheading">
																								<?php the_title(); ?>
																							</h2>
																								
																							<?php } ?>
																								
																						</div>
																							
																						<!-- End Title -->
																							
																						<?php } ?>
																						
																						<?php if ($post_meta_enabled == 'true') { ?>
																						
																						<!-- Begin Meta -->
																						
																						<div class="article-info-surround">
																						
																							<?php if ($post_meta_author == 'true') { ?>
																						
																							<!-- Begin Author -->
																						
																							<div class="article-info-right">
																								<span class="createdby"><?php the_author(); ?></span>
																							</div>
																							
																							<!-- End Author -->
																							
																							<?php } ?>
																							
																							<?php if ($post_meta_date == 'true') { ?>
																							
																							<!-- Begin Date & Time -->
																							
																							<div class="iteminfo">
																								<div class="article-info-left">
																									<span class="createdate">
																										<span class="date1"><?php the_time('M j'); ?></span>
																										<span class="date2">
																											<span class="date-div">|</span><?php the_time('H:i'); ?>
																										</span>
																									</span>
																									<div class="clr"></div>
																								</div>
																							</div>
																							
																							<!-- End Date & Time -->
																							
																							<?php } ?>
																							
																						</div>
																						
																						<!-- End Meta -->
																						
																						<?php } ?>
																						
																						<div class="main-content">
																						
																							<div class="post-content">
																							
																								<?php if ($content_display == 'content') { ?>
																								
																								<?php the_content(_r('Read More: '.get_the_title())); ?>
																													
																								<?php } else { ?>
																													
																								<?php the_excerpt(); ?>
																								<a href="<?php the_permalink(); ?>"><?php _re('Read More: '.get_the_title()); ?></a>
																														
																								<?php } ?>
																								
																								<div class="clr"></div>
																							
																							</div>
																						</div>
																						<div class="clr"></div>
																					</div>
																				</div>
																				<span class="leading_separator">&nbsp;</span>
																				
																				<!-- End Post -->
																				
																				<?php endwhile;?>
																											
																				<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
																						
																				<div class="pagination nav">
																					<div class="alignleft">
																						<?php next_posts_link('&laquo; '._r('Older Entries')); ?>
																					</div>
																					<div class="alignright">
																						<?php previous_posts_link(_r('Newer Entries').' &raquo;') ?>
																					</div>
																					<div class="clr"></div>
																				</div>
																							
																				<?php } ?>
																					
																				<?php else : ?>
																																
																				<div class="attention"><div class="icon"><?php _re("Sorry, but there aren't any posts matching your query."); ?></div></div>
																																
																				<?php endif; ?>
																																
																				<?php wp_reset_query(); ?>
																				
																			</div>
																			<div class="module-bm">
																				<div class="module-bl"></div>
																				<div class="module-br"></div>
																			</div>
																		</div>
																		
																		<!-- End Posts Wrapper -->
																		
																		<?php if(is_front_page() && is_active_sidebar('user_1')) { ?>
																		
																		<!-- Begin User 1 Widget Position -->
																		
																		<div id="mainmodules6" class="spacer w99">
																			<div class="block full">
																			
																				<?php add_filter('widget_title','empty_title_swap'); ?>
																							
																				<?php dynamic_sidebar('User 1'); ?>
																				
																				<?php remove_filter('widget_title','empty_title_swap'); ?>
																							
																			</div>
																		</div>
																		
																		<!-- End User 1 Widget Position -->
																		
																		<?php } ?>
																																				
																	</div>
																</div>
																<div class="clr"></div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<!-- End Main Column (col1wrap) -->
												
											<!-- Begin Left Column (col2) -->
				        		
							        		<?php if($option['left_sub_sidebar'] == 'true') { ?>
									    		
											<?php get_sidebar('left-sub'); ?>
												
											<?php } ?>
							         
								   			<!-- End Left Column (col2) -->
								    		
								    		<!-- Begin Right Column (col3) -->
			
											<?php if($option['right_sub_sidebar'] == 'true') { ?>
									    		
											<?php get_sidebar('right-sub'); ?>
												
											<?php } ?>
								     
								    		<!-- End Right Column (col3) -->
								    		
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<!-- End Main Body -->
						
					</div>
					
<?php get_footer(); ?>