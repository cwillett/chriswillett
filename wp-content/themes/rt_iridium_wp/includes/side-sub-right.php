												<?php $option = get_option('iridium-options'); ?>	
												
												<!-- Begin Authors -->
												
												<?php if ($option['sidebar_right_sub_authors'] == 'true') { ?>
											
												<div class="hilite3">
													<div class="moduletable">
														<div class="side-style-h3">
															
															<h3 class="module-title"><?php _re('Authors'); ?></h3>
																
														</div>
														<div class="module-inner">
															
															<!-- Begin Widget Content -->
																
															<ul class="menu">
																		
															<?php wp_list_authors('show_fullname='.$option['sidebar_right_sub_authors_fullname'].'&exclude_admin='.$option['sidebar_right_sub_authors_exadmin']); ?>
									
															</ul>
															
															<!-- End Widget Content -->
																		
														</div>
													</div>
												</div>
												
												<?php } ?>
												
												<!-- End Authors -->
												
												<!-- Begin Blogroll -->
												
												<?php if ($option['sidebar_right_sub_blogroll'] == 'true') { ?>
											
												<div class="hilite1 hilite3">
													<div class="moduletable">
														<div class="side-style-h3">
															
															<h3 class="module-title"><?php _re('Blogroll'); ?></h3>
														
														</div>
														<div class="module-inner">
															
															<!-- Begin Widget Content -->
																
															<ul class="menu">
																		
															<?php wp_list_bookmarks('title_li=&orderby='.$option['sidebar_right_sub_blogroll_order'].'&limit='.$option['sidebar_right_sub_blogroll_limit'].'&title_before=<h4>&title_after=</h4>&categorize='.$option['sidebar_right_sub_blogroll_categorize'].'&category='.$option['sidebar_right_sub_blogroll_category']); ?>
									
															</ul>
															
															<!-- End Widget Content -->
																		
														</div>
													</div>
												</div>
												
												<?php } ?>
												
												<!-- End Blogroll -->
												
												<!-- Begin Meta -->
												
												<?php if ($option['sidebar_right_sub_meta'] == 'true') { ?>
											
												<div class="">
													<div class="moduletable">
														<div class="side-style-h3">
															
															<h3 class="module-title"><?php _re('Meta'); ?></h3>
															
														</div>
														<div class="module-inner">
															
															<!-- Begin Widget Content -->
																
															<ul class="menu">
																		
																<li><?php wp_loginout(); ?></li>
																<li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional"><?php _re('Valid'); ?> <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
																<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
																<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
																<?php wp_meta(); ?>
									
															</ul>
															
															<!-- End Widget Content -->
			
														</div>
													</div>
												</div>
												
												<?php } ?>
												
												<!-- End Meta -->