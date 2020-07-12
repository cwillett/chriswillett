									<?php $option = get_option('iridium-options'); ?>						    		
						    		
						    		<div class="col2">
										<div id="leftcol">
											<div class="sidecol-tm">
												<div class="sidecol-tl"></div>
												<div class="sidecol-tr"></div>
											</div>
											<div class="sidecol-m">
												<div class="sidecol-l">
													<div class="sidecol-r">
													
														<?php add_filter('widget_title','empty_title_swap'); ?>
											
														<!-- Begin Over Left Front Sidebar -->
											
														<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Over Left Front Sidebar') ) : ?>
														<?php endif; ?>
											
														<!-- End Over Left Front Sidebar -->
					                              	                  
					                              	 	<!-- Begin Left Front Sidebar -->
					                                                	
					                                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Left Front Sidebar') ) : ?>
					                                  	             
			                							<?php include(TEMPLATEPATH . '/includes/' . $option['left_front_side_file']); ?>
																		
														<?php endif; ?>
																		
														<!-- End Left Front Sidebar -->
																		
														<!-- Begin Under Left Front Sidebar -->
											
														<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Under Left Front Sidebar') ) : ?>
														<?php endif; ?>
											
														<!-- End Under Left Front Sidebar -->
														
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