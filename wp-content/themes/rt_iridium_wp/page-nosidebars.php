<?php
/*
Template Name: Page - No Sidebars
*/
?>

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
							<div id="main-content" class="x-c-x">
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
																
																<?php if(!is_front_page() && $option['breadcrumbs'] == 'true') { ?>
												
																	<div id="breadcrumbs">
																	
																		<a href="<?php bloginfo('url'); ?>" id="breadcrumbs-home"></a>
																		
						                    							<span class="breadcrumbs pathway">
						                    																
																		<?php
				                    													
																			$breadcrumbs_path = get_bloginfo('template_directory');
																			$parent_id  = $post->post_parent;
				                    										$breadcrumbs = array();
				                    										while ($parent_id) {
				                    											$page = get_page($parent_id);
				                    											$breadcrumbs[] = '<a href="'.get_permalink($page->ID).'" title="" class="pathway">'.get_the_title($page->ID).'</a>';
				                    											$parent_id  = $page->post_parent;
				                    										}
				           													$breadcrumbs = array_reverse($breadcrumbs);
				                    										foreach ($breadcrumbs as $crumb) echo $crumb.'<img alt="" src="'.$breadcrumbs_path.'/images/arrow.png"/>';
				                    													
				                    										?>
																												
																			<span class="no-link"><?php the_title(); ?></span>
																										
																		</span>
				
					    											</div>
					    											
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
																		<div class="custom-page">
																			<div class="module-tm">
																				<div class="module-tl"></div>
																				<div class="module-tr"></div>
																			</div>
																			<div class="module-inner">
																			
																				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
																			
																				<!-- Begin Post -->
																			
																				<div class="leading">
																					<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
																						
																						<?php if ($option['page_title'] == 'true') { ?>
																	
																						<!-- Begin Title -->
																					
						   																<div class="article-rel-wrapper">
																								
																							<h2 class="contentheading">
																								<?php the_title(); ?>
																							</h2>
																								
																						</div>
																							
																						<!-- End Title -->
																							
																						<?php } ?>
																						
																						<?php if ($option['page_meta'] == 'true') { ?>
																						
																						<!-- Begin Meta -->
																						
																						<div class="article-info-surround">
																						
																							<?php if ($option['page_meta_author'] == 'true') { ?>
																						
																							<!-- Begin Author -->
																						
																							<div class="article-info-right">
																								<span class="createdby"><?php the_author(); ?></span>
																							</div>
																							
																							<!-- End Author -->
																							
																							<?php } ?>
																							
																							<?php if ($option['page_meta_date'] == 'true') { ?>
																							
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
																							
																								<?php if($option['page_tweetmeme'] == 'true') { ?>
	    																									
								    																<div class="tweetmeme png"><script type="text/javascript" src="http://tweetmeme.com/i/scripts/button.js"></script></div>
							    																									
							    																<?php } ?>
																													
																								<?php the_content(); ?>
																									
																								<div class="clr"></div>
																									
																								<?php wp_link_pages('before=<div class="pagination"><span class="pagination-name">'._r('Pages:').'</span><span class="pagination-numbers">&after=</span></div><br />'); ?>
																																	
																								<?php edit_post_link(_r('Edit this entry.'), '<div class="edit-me">', '</div>'); ?>
																									
																								<?php if(comments_open()) { ?>
																			
																									<a name="comments"></a>
																																			
																									<?php comments_template(); ?>
																								
																								<?php } ?>
																							
																								<div class="clr"></div>
																							
																							</div>
																						</div>
																						<div class="clr"></div>
																					</div>
																				</div>
																				
																				<!-- End Post -->
																				
																				<?php endwhile; ?>
																
																				<?php else : ?>
																					
																				<div class="attention"><div class="icon"><?php _re('Sorry, no pages matched your criteria.'); ?></div></div>
																					
																				<?php endif; ?>
																				
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
								    		
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<!-- End Main Body -->
						
					</div>
					
<?php get_footer(); ?>