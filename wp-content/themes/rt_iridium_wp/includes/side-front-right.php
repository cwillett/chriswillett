												<?php $option = get_option('iridium-options'); ?>	
												
												<!-- Begin Categories -->
												
												<?php if ($option['sidebar_right_front_categories'] == 'true') { ?>
											
												<div class="">
													<div class="moduletable">
														<div class="side-style-h3">
															
															<h3 class="module-title"><?php _re('Blog Categories'); ?></h3>
																
														</div>
														<div class="module-inner">
															
															<!-- Begin Widget Content -->
																
															<ul class="menu">
																		
																<?php echo preg_replace('@\<li class="([^>]*)>\<a([^>]*)>(.*?)\<\/a>@i', '<li class="$1><a$2><span>$3</span></a>', wp_list_categories('echo=0&title_li=&use_desc_for_title=0&orderby='.$option['sidebar_right_front_categories_order'].'&hide_empty='.$option['sidebar_right_front_categories_empty'].'&exclude='.$option['sidebar_right_front_categories_exclude'])); ?>
									
															</ul>
															
															<!-- End Widget Content -->
																				
														</div>
													</div>
												</div>
												
												<?php } ?>
												
												<!-- End Categories -->
												
												<!-- Begin Archives -->
												
												<?php if ($option['sidebar_right_front_archives'] == 'true') { ?>
											
												<div class="hilite1 hilite3">
													<div class="moduletable">
														<div class="side-style-h3">
															
															<h3 class="module-title"><?php _re('Blog Archives'); ?></h3>
																
														</div>
														<div class="module-inner">
															
															<!-- Begin Widget Content -->
																
															<ul class="menu">
																		
																<?php wp_get_archives('type='.$option['sidebar_right_front_archives_type'].'&limit='.$option['sidebar_right_front_archives_limit']); ?>
									
															</ul>
															
															<!-- End Widget Content -->
																				
														</div>
													</div>
												</div>
												
												<?php } ?>
												
												<!-- End Archives -->
												
												<!-- Begin Tags -->
												
												<?php if ($option['sidebar_right_front_tags'] == 'true') { ?>
											
												<div class="hilite2">
													<div class="moduletable">
														<div class="side-style-h3">
															
															<h3 class="module-title"><?php _re('Post Tags'); ?></h3>
															
														</div>
														<div class="module-inner">
															
															<!-- Begin Widget Content -->
																
															<?php wp_tag_cloud('orderby='.$option['sidebar_right_front_tags_order']); ?>
															
															<!-- End Widget Content -->
																	
														</div>
													</div>
												</div>
												
												<?php } ?>
												
												<!-- End Tags -->