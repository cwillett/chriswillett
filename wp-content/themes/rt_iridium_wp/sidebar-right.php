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
											
														<!-- Begin Over Right Front Sidebar -->
											
														<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Over Right Front Sidebar') ) : ?>
														<?php endif; ?>
											
														<!-- End Over Right Front Sidebar -->
					                              	                  
					                              	 	<!-- Begin Right Front Sidebar -->
					                                                	
					                                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Right Front Sidebar') ) : ?>
					                                  	             
			                							<?php include(TEMPLATEPATH . '/includes/' . $option['right_front_side_file']); ?>
																		
														<?php endif; ?>
																		
														<!-- End Right Front Sidebar -->
																		
														<!-- Begin Under Right Front Sidebar -->
											
														<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Under Right Front Sidebar') ) : ?>
														<?php endif; ?>
											
														<!-- End Under Right Front Sidebar -->
														
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