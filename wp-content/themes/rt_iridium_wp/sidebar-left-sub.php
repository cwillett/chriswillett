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
											
														<!-- Begin Over Left Subpage Sidebar -->
											
														<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Over Left Subpage Sidebar') ) : ?>
														<?php endif; ?>
											
														<!-- End Over Left Subpage Sidebar -->
					                              	                  
					                              	 	<!-- Begin Left Subpage Sidebar -->
					                                                	
					                                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Left Subpage Sidebar') ) : ?>
					                                  	             
			                							<?php include(TEMPLATEPATH . '/includes/' . $option['left_sub_side_file']); ?>
																		
														<?php endif; ?>
																		
														<!-- End Left Subpage Sidebar -->
																		
														<!-- Begin Under Left Subpage Sidebar -->
											
														<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Under Left Subpage Sidebar') ) : ?>
														<?php endif; ?>
											
														<!-- End Under Left Subpage Sidebar -->
														
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