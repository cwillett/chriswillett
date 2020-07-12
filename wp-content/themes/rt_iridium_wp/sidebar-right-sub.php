									<?php $option = get_option('iridium-options'); ?>						    		
						    		
						    		<div class="col3">
										<div id="rightcol">
											<div class="sidecol-tm">
												<div class="sidecol-tl"></div>
												<div class="sidecol-tr"></div>
											</div>
											<div class="sidecol-m">
												<div class="sidecol-l">
													<div class="sidecol-r">
													
														<?php add_filter('widget_title','empty_title_swap'); ?>
											
														<!-- Begin Over Right Subpage Sidebar -->
											
														<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Over Right Subpage Sidebar') ) : ?>
														<?php endif; ?>
											
														<!-- End Over Right Subpage Sidebar -->
					                              	                  
					                              	 	<!-- Begin Right Subpage Sidebar -->
					                                                	
					                                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Right Subpage Sidebar') ) : ?>
					                                  	             
			                							<?php include(TEMPLATEPATH . '/includes/' . $option['right_sub_side_file']); ?>
																		
														<?php endif; ?>
																		
														<!-- End Right Subpage Sidebar -->
																		
														<!-- Begin Under Right Subpage Sidebar -->
											
														<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Under Right Subpage Sidebar') ) : ?>
														<?php endif; ?>
											
														<!-- End Under Right Subpage Sidebar -->
														
														<?php remove_filter('widget_title','empty_title_swap'); ?>
									
													</div>
												</div>
											</div>
											<div class="sidecol-bm">
												<div class="sidecol-bl"></div>
												<div class="sidecol-br"></div>
											</div>
										</div>
									</div>