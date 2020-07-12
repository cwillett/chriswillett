<?php

	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'style.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

?>

	<?php $option = get_option('iridium-options'); ?>	
	
	<div class="general-wrapper">

		<div class="tabbar">
		
			<div class="tab1 singletab">
				<div class="tabl"></div>
				<div class="tabr"><a href="#presets"><?php _re('Presets'); ?></a></div>
			</div>
			
			<div class="tab2 singletab">
				<div class="tabl"></div>
				<div class="tabr"><a href="#widgets"><?php _re('Widgets'); ?></a></div>
			</div>
			
			<div class="tab3 singletab">
				<div class="tabl"></div>
				<div class="tabr"><a href="#page"><?php _re('Page'); ?></a></div>
			</div>
			
			<div class="tab4 singletab">
				<div class="tabl"></div>
				<div class="tabr"><a href="#single"><?php _re('Single Post'); ?></a></div>
			</div>
			
			<div class="tab5 singletab">
				<div class="tabl"></div>
				<div class="tabr"><a href="#category"><?php _re('Category'); ?></a></div>
			</div>
			
			<div class="tab6 singletab">
				<div class="tabl"></div>
				<div class="tabr"><a href="#archive"><?php _re('Archive'); ?></a></div>
			</div>
			
			<div class="tab7 singletab">
				<div class="tabl"></div>
				<div class="tabr"><a href="#tags"><?php _re('Tags'); ?></a></div>
			</div>
			
			<div class="tab8 singletab">
				<div class="tabl"></div>
				<div class="tabr"><a href="#search"><?php _re('Search'); ?></a></div>
			</div>
	
		</div>
		<div class="clr"></div>
					
		<div class="main-general">
		
			<div class="inner-tabber">
			<a name="presets"></a>
			
			<span class="section-title"><?php _re('Presets'); ?></span><br /><br />
		
			<table class="options_table">
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Preset Style:'); ?>
							</div>
							<div class="paramcheck">
								<label class="preset_style">
									<select id="preset_style" name="iridium-options[preset_style]">
      			   						<option value="style1" <?php if ($option['preset_style'] == "style1") : ?>selected="selected"<?php endif; ?>>Style 1</option>
      			     					<option value="style2" <?php if ($option['preset_style'] == "style2") : ?>selected="selected"<?php endif; ?>>Style 2</option>
      			    					<option value="style3" <?php if ($option['preset_style'] == "style3") : ?>selected="selected"<?php endif; ?>>Style 3</option>
      							   		<option value="style4" <?php if ($option['preset_style'] == "style4") : ?>selected="selected"<?php endif; ?>>Style 4</option>
      			     					<option value="style5" <?php if ($option['preset_style'] == "style5") : ?>selected="selected"<?php endif; ?>>Style 5</option>
      			      					<option value="style6" <?php if ($option['preset_style'] == "style6") : ?>selected="selected"<?php endif; ?>>Style 6</option>
      			     					<option value="custom" <?php if ($option['preset_style'] == "custom") : ?>selected="selected"<?php endif; ?>>Custom</option>
                   					</select>
                   				</label>
                   				<a href="#" rel="rokbox[350 50][module=op-style_preset]"><span class="help">Help</span></a>
							</div>
							<div id="op-style_preset" class="rthide"><?php _re('Here you can switch the theme to one of prepared style.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Primary Style:'); ?>
							</div>
							<div class="paramcheck">
								<label class="primary_style">
									<select id="primary_style" name="iridium-options[primary_style]">
      			   						<option value="style1" <?php if ($option['primary_style'] == "style1") : ?>selected="selected"<?php endif; ?>>Style 1</option>
      			     					<option value="style2" <?php if ($option['primary_style'] == "style2") : ?>selected="selected"<?php endif; ?>>Style 2</option>
      			    					<option value="style3" <?php if ($option['primary_style'] == "style3") : ?>selected="selected"<?php endif; ?>>Style 3</option>
      							   		<option value="style4" <?php if ($option['primary_style'] == "style4") : ?>selected="selected"<?php endif; ?>>Style 4</option>
      			     					<option value="style5" <?php if ($option['primary_style'] == "style5") : ?>selected="selected"<?php endif; ?>>Style 5</option>
      			      					<option value="style6" <?php if ($option['primary_style'] == "style6") : ?>selected="selected"<?php endif; ?>>Style 6</option>
                   					</select>
                   				</label>
                   				<a href="#" rel="rokbox[350 50][module=op-header_style]"><span class="help">Help</span></a>
							</div>
							<div id="op-header_style" class="rthide"><?php _re('Here you can choose the body style.'); ?></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Background Style:'); ?>
							</div>
							<div class="paramcheck stubborn">
								<label class="bg_style">
									<select id="bg_style" name="iridium-options[background_type]">
      			   						<option value="simple" <?php if ($option['background_type'] == "simple") : ?>selected="selected"<?php endif; ?>><?php _re('Simple'); ?></option>
      			     					<option value="medium" <?php if ($option['background_type'] == "medium") : ?>selected="selected"<?php endif; ?>><?php _re('Medium'); ?></option>
      			     					<option value="full" <?php if ($option['background_type'] == "full") : ?>selected="selected"<?php endif; ?>><?php _re('Full'); ?></option>
      			     				</select>
                   				</label>
                   				<a href="#" rel="rokbox[350 50][module=op-bg_style]"><span class="help">Help</span></a>
							</div>
							<div id="op-bg_style" class="rthide"><?php _re('Here you can choose the background style.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Font Family:'); ?>
							</div>
							<div class="paramcheck stubborn">
								<label class="font_face">
									<select id="font_face" name="iridium-options[font_face]">
      			   						<option value="iridium" <?php if ($option['font_face'] == "iridium") : ?>selected="selected"<?php endif; ?>>Iridium</option>
      			   						<option value="bebas" <?php if ($option['font_face'] == "bebas") : ?>selected="selected"<?php endif; ?>>Bebas</option>
      			   						<option value="continuum" <?php if ($option['font_face'] == "continuum") : ?>selected="selected"<?php endif; ?>>Continuum</option>
      			     					<option value="geneva" <?php if ($option['font_face'] == "geneva") : ?>selected="selected"<?php endif; ?>>Geneva</option>
      			    					<option value="optima" <?php if ($option['font_face'] == "optima") : ?>selected="selected"<?php endif; ?>>Optima</option>
      							   		<option value="helvetica" <?php if ($option['font_face'] == "helvetica") : ?>selected="selected"<?php endif; ?>>Helvetica</option>
      			     					<option value="trebuchet" <?php if ($option['font_face'] == "trebuchet") : ?>selected="selected"<?php endif; ?>>Trebuchet</option>
      			      					<option value="lucida" <?php if ($option['font_face'] == "lucida") : ?>selected="selected"<?php endif; ?>>Lucida</option>
      			      					<option value="georgia" <?php if ($option['font_face'] == "georgia") : ?>selected="selected"<?php endif; ?>>Georgia</option>
      			     					<option value="palatino" <?php if ($option['font_face'] == "palatino") : ?>selected="selected"<?php endif; ?>>Palatino</option>
      			     				</select>
                   				</label>
                   				<a href="#" rel="rokbox[350 50][module=op-bg_style]"><span class="help">Help</span></a>
							</div>
							<div id="op-bg_style" class="rthide"><?php _re('Here you can choose the font family.'); ?></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Primary Link Color:'); ?>
							</div>
							<div class="paramcheck coloronly">
								<input class="picker-input pickerbox" id="link_color" type="text" size="8" maxlength="255" name="iridium-options[link_color]" value="<?php echo $option['link_color']; ?>" /><div class="picker" id="myRainbow_link_color_input"><div class="overlay"></div></div>
                   				<a href="#" rel="rokbox[350 50][module=op-link_color]"><span class="help">Help</span></a>
							</div>
							<div id="op-link_color" class="rthide"><?php _re('Change the color of the primary links.'); ?></div>
						</div>
					</td>
					<td class="secondcol">				
					</td>
				</tr>
			</table>
			</div>
			
			<div class="inner-tabber">
			<a name="widgets"></a>
			
			<span class="section-title"><?php _re('Widgets'); ?></span><br /><br />
		
			<table class="options_table">
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Over Right Front:'); ?>
							</div>
							<div class="paramcheck">
								<label class="widget_over_right_front">
									<select id="widget_over_right_front" name="iridium-options[widget_over_right_front]">
      			   						<option value="" <?php if ($option['widget_over_right_front'] == "") : ?>selected="selected"<?php endif; ?>><?php _re('None'); ?></option>
      			   						<option value="ad" <?php if ($option['widget_over_right_front'] == "ad") : ?>selected="selected"<?php endif; ?>><?php _re('Ad'); ?></option>
      			     					<option value="hilite1" <?php if ($option['widget_over_right_front'] == "hilite1") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 1'); ?></option>
      			    					<option value="hilite2" <?php if ($option['widget_over_right_front'] == "hilite2") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 2'); ?></option>
      			    					<option value="hilite3" <?php if ($option['widget_over_right_front'] == "hilite3") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 3'); ?></option>
      			    					<option value="hilite1 hilite3" <?php if ($option['widget_over_right_front'] == "hilite1 hilite3") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 1 & Hilite 3'); ?></option>
                   					</select>
                   				</label>
                   				<a href="#" rel="rokbox[350 50][module=op-widget_over_right_front]"><span class="help">Help</span></a>
							</div>
							<div id="op-widget_over_right_front" class="rthide"><?php _re('Here you can switch the Over Right Front Sidebar widget position hilite.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Right Front:'); ?>
							</div>
							<div class="paramcheck">
								<label class="widget_right_front">
									<select id="widget_right_front" name="iridium-options[widget_right_front]">
      			   						<option value="" <?php if ($option['widget_right_front'] == "") : ?>selected="selected"<?php endif; ?>><?php _re('None'); ?></option>
      			   						<option value="ad" <?php if ($option['widget_right_front'] == "ad") : ?>selected="selected"<?php endif; ?>><?php _re('Ad'); ?></option>
      			     					<option value="hilite1" <?php if ($option['widget_right_front'] == "hilite1") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 1'); ?></option>
      			    					<option value="hilite2" <?php if ($option['widget_right_front'] == "hilite2") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 2'); ?></option>
      			    					<option value="hilite3" <?php if ($option['widget_right_front'] == "hilite3") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 3'); ?></option>
      			    					<option value="hilite1 hilite3" <?php if ($option['widget_right_front'] == "hilite1 hilite3") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 1 & Hilite 3'); ?></option>
                   					</select>
                   				</label>
                   				<a href="#" rel="rokbox[350 50][module=op-widget_right_front]"><span class="help">Help</span></a>
							</div>
							<div id="op-widget_right_front" class="rthide"><?php _re('Here you can switch the Right Front Sidebar widget position hilite.'); ?></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Under Right Front:'); ?>
							</div>
							<div class="paramcheck">
								<label class="widget_under_right_front">
									<select id="widget_under_right_front" name="iridium-options[widget_under_right_front]">
      			   						<option value="" <?php if ($option['widget_under_right_front'] == "") : ?>selected="selected"<?php endif; ?>><?php _re('None'); ?></option>
      			   						<option value="ad" <?php if ($option['widget_under_right_front'] == "ad") : ?>selected="selected"<?php endif; ?>><?php _re('Ad'); ?></option>
      			     					<option value="hilite1" <?php if ($option['widget_under_right_front'] == "hilite1") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 1'); ?></option>
      			    					<option value="hilite2" <?php if ($option['widget_under_right_front'] == "hilite2") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 2'); ?></option>
      			    					<option value="hilite3" <?php if ($option['widget_under_right_front'] == "hilite3") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 3'); ?></option>
      			    					<option value="hilite1 hilite3" <?php if ($option['widget_under_right_front'] == "hilite1 hilite3") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 1 & Hilite 3'); ?></option>
                   					</select>
                   				</label>
                   				<a href="#" rel="rokbox[350 50][module=op-widget_under_right_front]"><span class="help">Help</span></a>
							</div>
							<div id="op-widget_under_right_front" class="rthide"><?php _re('Here you can switch the Under Right Front Sidebar widget position hilite.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Over Left Front:'); ?>
							</div>
							<div class="paramcheck">
								<label class="widget_over_left_front">
									<select id="widget_over_left_front" name="iridium-options[widget_over_left_front]">
      			   						<option value="" <?php if ($option['widget_over_left_front'] == "") : ?>selected="selected"<?php endif; ?>><?php _re('None'); ?></option>
      			   						<option value="ad" <?php if ($option['widget_over_left_front'] == "ad") : ?>selected="selected"<?php endif; ?>><?php _re('Ad'); ?></option>
      			     					<option value="hilite1" <?php if ($option['widget_over_left_front'] == "hilite1") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 1'); ?></option>
      			    					<option value="hilite2" <?php if ($option['widget_over_left_front'] == "hilite2") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 2'); ?></option>
      			    					<option value="hilite3" <?php if ($option['widget_over_left_front'] == "hilite3") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 3'); ?></option>
      			    					<option value="hilite1 hilite3" <?php if ($option['widget_over_left_front'] == "hilite1 hilite3") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 1 & Hilite 3'); ?></option>
                   					</select>
                   				</label>
                   				<a href="#" rel="rokbox[350 50][module=op-widget_over_left_front]"><span class="help">Help</span></a>
							</div>
							<div id="op-widget_over_left_front" class="rthide"><?php _re('Here you can switch the Over Left Front Sidebar widget position hilite.'); ?></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Left Front:'); ?>
							</div>
							<div class="paramcheck">
								<label class="widget_left_front">
									<select id="widget_left_front" name="iridium-options[widget_left_front]">
      			   						<option value="" <?php if ($option['widget_left_front'] == "") : ?>selected="selected"<?php endif; ?>><?php _re('None'); ?></option>
      			   						<option value="ad" <?php if ($option['widget_left_front'] == "ad") : ?>selected="selected"<?php endif; ?>><?php _re('Ad'); ?></option>
      			     					<option value="hilite1" <?php if ($option['widget_left_front'] == "hilite1") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 1'); ?></option>
      			    					<option value="hilite2" <?php if ($option['widget_left_front'] == "hilite2") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 2'); ?></option>
      			    					<option value="hilite3" <?php if ($option['widget_left_front'] == "hilite3") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 3'); ?></option>
      			    					<option value="hilite1 hilite3" <?php if ($option['widget_left_front'] == "hilite1 hilite3") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 1 & Hilite 3'); ?></option>
                   					</select>
                   				</label>
                   				<a href="#" rel="rokbox[350 50][module=op-widget_left_front]"><span class="help">Help</span></a>
							</div>
							<div id="op-widget_left_front" class="rthide"><?php _re('Here you can switch the Left Front Sidebar widget position hilite.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Under Left Front:'); ?>
							</div>
							<div class="paramcheck">
								<label class="widget_under_left_front">
									<select id="widget_under_left_front" name="iridium-options[widget_under_left_front]">
      			   						<option value="" <?php if ($option['widget_under_left_front'] == "") : ?>selected="selected"<?php endif; ?>><?php _re('None'); ?></option>
      			   						<option value="ad" <?php if ($option['widget_under_left_front'] == "ad") : ?>selected="selected"<?php endif; ?>><?php _re('Ad'); ?></option>
      			     					<option value="hilite1" <?php if ($option['widget_under_left_front'] == "hilite1") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 1'); ?></option>
      			    					<option value="hilite2" <?php if ($option['widget_under_left_front'] == "hilite2") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 2'); ?></option>
      			    					<option value="hilite3" <?php if ($option['widget_under_left_front'] == "hilite3") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 3'); ?></option>
      			    					<option value="hilite1 hilite3" <?php if ($option['widget_under_left_front'] == "hilite1 hilite3") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 1 & Hilite 3'); ?></option>
                   					</select>
                   				</label>
                   				<a href="#" rel="rokbox[350 50][module=op-widget_under_left_front]"><span class="help">Help</span></a>
							</div>
							<div id="op-widget_under_left_front" class="rthide"><?php _re('Here you can switch the Under Left Front Sidebar widget position hilite.'); ?></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Over Right Sub:'); ?>
							</div>
							<div class="paramcheck">
								<label class="widget_over_right_sub">
									<select id="widget_over_right_sub" name="iridium-options[widget_over_right_sub]">
      			   						<option value="" <?php if ($option['widget_over_right_sub'] == "") : ?>selected="selected"<?php endif; ?>><?php _re('None'); ?></option>
      			   						<option value="ad" <?php if ($option['widget_over_right_sub'] == "ad") : ?>selected="selected"<?php endif; ?>><?php _re('Ad'); ?></option>
      			     					<option value="hilite1" <?php if ($option['widget_over_right_sub'] == "hilite1") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 1'); ?></option>
      			    					<option value="hilite2" <?php if ($option['widget_over_right_sub'] == "hilite2") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 2'); ?></option>
      			    					<option value="hilite3" <?php if ($option['widget_over_right_sub'] == "hilite3") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 3'); ?></option>
      			    					<option value="hilite1 hilite3" <?php if ($option['widget_over_right_sub'] == "hilite1 hilite3") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 1 & Hilite 3'); ?></option>
                   					</select>
                   				</label>
                   				<a href="#" rel="rokbox[350 50][module=op-widget_over_right_sub]"><span class="help">Help</span></a>
							</div>
							<div id="op-widget_over_right_sub" class="rthide"><?php _re('Here you can switch the Over Right Subpage Sidebar widget position hilite.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Right Sub:'); ?>
							</div>
							<div class="paramcheck">
								<label class="widget_right_sub">
									<select id="widget_right_sub" name="iridium-options[widget_right_sub]">
      			   						<option value="" <?php if ($option['widget_right_sub'] == "") : ?>selected="selected"<?php endif; ?>><?php _re('None'); ?></option>
      			   						<option value="ad" <?php if ($option['widget_right_sub'] == "ad") : ?>selected="selected"<?php endif; ?>><?php _re('Ad'); ?></option>
      			     					<option value="hilite1" <?php if ($option['widget_right_sub'] == "hilite1") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 1'); ?></option>
      			    					<option value="hilite2" <?php if ($option['widget_right_sub'] == "hilite2") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 2'); ?></option>
      			    					<option value="hilite3" <?php if ($option['widget_right_sub'] == "hilite3") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 3'); ?></option>
      			    					<option value="hilite1 hilite3" <?php if ($option['widget_right_sub'] == "hilite1 hilite3") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 1 & Hilite 3'); ?></option>
                   					</select>
                   				</label>
                   				<a href="#" rel="rokbox[350 50][module=op-widget_right_sub]"><span class="help">Help</span></a>
							</div>
							<div id="op-widget_right_sub" class="rthide"><?php _re('Here you can switch the Right Subpage Sidebar widget position hilite.'); ?></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Under Right Sub:'); ?>
							</div>
							<div class="paramcheck">
								<label class="widget_under_right_sub">
									<select id="widget_under_right_sub" name="iridium-options[widget_under_right_sub]">
      			   						<option value="" <?php if ($option['widget_under_right_sub'] == "") : ?>selected="selected"<?php endif; ?>><?php _re('None'); ?></option>
      			   						<option value="ad" <?php if ($option['widget_under_right_sub'] == "ad") : ?>selected="selected"<?php endif; ?>><?php _re('Ad'); ?></option>
      			     					<option value="hilite1" <?php if ($option['widget_under_right_sub'] == "hilite1") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 1'); ?></option>
      			    					<option value="hilite2" <?php if ($option['widget_under_right_sub'] == "hilite2") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 2'); ?></option>
      			    					<option value="hilite3" <?php if ($option['widget_under_right_sub'] == "hilite3") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 3'); ?></option>
      			    					<option value="hilite1 hilite3" <?php if ($option['widget_under_right_sub'] == "hilite1 hilite3") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 1 & Hilite 3'); ?></option>
                   					</select>
                   				</label>
                   				<a href="#" rel="rokbox[350 50][module=op-widget_under_right_sub]"><span class="help">Help</span></a>
							</div>
							<div id="op-widget_under_right_sub" class="rthide"><?php _re('Here you can switch the Under Right Subpage Sidebar widget position hilite.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Over Left Sub:'); ?>
							</div>
							<div class="paramcheck">
								<label class="widget_over_left_sub">
									<select id="widget_over_left_sub" name="iridium-options[widget_over_left_sub]">
      			   						<option value="" <?php if ($option['widget_over_left_sub'] == "") : ?>selected="selected"<?php endif; ?>><?php _re('None'); ?></option>
      			   						<option value="ad" <?php if ($option['widget_over_left_sub'] == "ad") : ?>selected="selected"<?php endif; ?>><?php _re('Ad'); ?></option>
      			     					<option value="hilite1" <?php if ($option['widget_over_left_sub'] == "hilite1") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 1'); ?></option>
      			    					<option value="hilite2" <?php if ($option['widget_over_left_sub'] == "hilite2") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 2'); ?></option>
      			    					<option value="hilite3" <?php if ($option['widget_over_left_sub'] == "hilite3") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 3'); ?></option>
      			    					<option value="hilite1 hilite3" <?php if ($option['widget_over_left_sub'] == "hilite1 hilite3") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 1 & Hilite 3'); ?></option>
                   					</select>
                   				</label>
                   				<a href="#" rel="rokbox[350 50][module=op-widget_over_left_sub]"><span class="help">Help</span></a>
							</div>
							<div id="op-widget_over_left_sub" class="rthide"><?php _re('Here you can switch the Over Left Subpage Sidebar widget position hilite.'); ?></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Left Sub:'); ?>
							</div>
							<div class="paramcheck">
								<label class="widget_left_sub">
									<select id="widget_left_sub" name="iridium-options[widget_left_sub]">
      			   						<option value="" <?php if ($option['widget_left_sub'] == "") : ?>selected="selected"<?php endif; ?>><?php _re('None'); ?></option>
      			   						<option value="ad" <?php if ($option['widget_left_sub'] == "ad") : ?>selected="selected"<?php endif; ?>><?php _re('Ad'); ?></option>
      			     					<option value="hilite1" <?php if ($option['widget_left_sub'] == "hilite1") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 1'); ?></option>
      			    					<option value="hilite2" <?php if ($option['widget_left_sub'] == "hilite2") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 2'); ?></option>
      			    					<option value="hilite3" <?php if ($option['widget_left_sub'] == "hilite3") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 3'); ?></option>
      			    					<option value="hilite1 hilite3" <?php if ($option['widget_left_sub'] == "hilite1 hilite3") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 1 & Hilite 3'); ?></option>
                   					</select>
                   				</label>
                   				<a href="#" rel="rokbox[350 50][module=op-widget_left_sub]"><span class="help">Help</span></a>
							</div>
							<div id="op-widget_left_sub" class="rthide"><?php _re('Here you can switch the Left Subpage Sidebar widget position hilite.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Under Left Sub:'); ?>
							</div>
							<div class="paramcheck">
								<label class="widget_under_left_sub">
									<select id="widget_under_left_sub" name="iridium-options[widget_under_left_sub]">
      			   						<option value="" <?php if ($option['widget_under_left_sub'] == "") : ?>selected="selected"<?php endif; ?>><?php _re('None'); ?></option>
      			   						<option value="ad" <?php if ($option['widget_under_left_sub'] == "ad") : ?>selected="selected"<?php endif; ?>><?php _re('Ad'); ?></option>
      			     					<option value="hilite1" <?php if ($option['widget_under_left_sub'] == "hilite1") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 1'); ?></option>
      			    					<option value="hilite2" <?php if ($option['widget_under_left_sub'] == "hilite2") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 2'); ?></option>
      			    					<option value="hilite3" <?php if ($option['widget_under_left_sub'] == "hilite3") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 3'); ?></option>
      			    					<option value="hilite1 hilite3" <?php if ($option['widget_under_left_sub'] == "hilite1 hilite3") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 1 & Hilite 3'); ?></option>
                   					</select>
                   				</label>
                   				<a href="#" rel="rokbox[350 50][module=op-widget_under_left_sub]"><span class="help">Help</span></a>
							</div>
							<div id="op-widget_under_left_sub" class="rthide"><?php _re('Here you can switch the Under Left Subpage Sidebar widget position hilite.'); ?></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Feature 1:'); ?>
							</div>
							<div class="paramcheck">
								<label class="widget_feature1">
									<select id="widget_feature1" name="iridium-options[widget_feature1]">
      			   						<option value="" <?php if ($option['widget_feature1'] == "") : ?>selected="selected"<?php endif; ?>><?php _re('None'); ?></option>
      			   						<option value="ad" <?php if ($option['widget_feature1'] == "ad") : ?>selected="selected"<?php endif; ?>><?php _re('Ad'); ?></option>
      			     					<option value="hilite1" <?php if ($option['widget_feature1'] == "hilite1") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 1'); ?></option>
      			    					<option value="hilite2" <?php if ($option['widget_feature1'] == "hilite2") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 2'); ?></option>
      			    					<option value="hilite3" <?php if ($option['widget_feature1'] == "hilite3") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 3'); ?></option>
      			    					<option value="hilite1 hilite3" <?php if ($option['widget_feature1'] == "hilite1 hilite3") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 1 & Hilite 3'); ?></option>
                   					</select>
                   				</label>
                   				<a href="#" rel="rokbox[350 50][module=op-widget_feature1]"><span class="help">Help</span></a>
							</div>
							<div id="op-widget_feature1" class="rthide"><?php _re('Here you can switch the Feature 1 widget position hilite.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Feature 2:'); ?>
							</div>
							<div class="paramcheck">
								<label class="widget_feature2">
									<select id="widget_feature2" name="iridium-options[widget_feature2]">
      			   						<option value="" <?php if ($option['widget_feature2'] == "") : ?>selected="selected"<?php endif; ?>><?php _re('None'); ?></option>
      			   						<option value="ad" <?php if ($option['widget_feature2'] == "ad") : ?>selected="selected"<?php endif; ?>><?php _re('Ad'); ?></option>
      			     					<option value="hilite1" <?php if ($option['widget_feature2'] == "hilite1") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 1'); ?></option>
      			    					<option value="hilite2" <?php if ($option['widget_feature2'] == "hilite2") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 2'); ?></option>
      			    					<option value="hilite3" <?php if ($option['widget_feature2'] == "hilite3") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 3'); ?></option>
      			    					<option value="hilite1 hilite3" <?php if ($option['widget_feature2'] == "hilite1 hilite3") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 1 & Hilite 3'); ?></option>
                   					</select>
                   				</label>
                   				<a href="#" rel="rokbox[350 50][module=op-widget_feature2]"><span class="help">Help</span></a>
							</div>
							<div id="op-widget_feature2" class="rthide"><?php _re('Here you can switch the Feature 2 widget position hilite.'); ?></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('User 1:'); ?>
							</div>
							<div class="paramcheck">
								<label class="widget_user1">
									<select id="widget_user1" name="iridium-options[widget_user1]">
      			   						<option value="" <?php if ($option['widget_user1'] == "") : ?>selected="selected"<?php endif; ?>><?php _re('None'); ?></option>
      			   						<option value="ad" <?php if ($option['widget_user1'] == "ad") : ?>selected="selected"<?php endif; ?>><?php _re('Ad'); ?></option>
      			     					<option value="hilite1" <?php if ($option['widget_user1'] == "hilite1") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 1'); ?></option>
      			    					<option value="hilite2" <?php if ($option['widget_user1'] == "hilite2") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 2'); ?></option>
      			    					<option value="hilite3" <?php if ($option['widget_user1'] == "hilite3") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 3'); ?></option>
      			    					<option value="hilite1 hilite3" <?php if ($option['widget_user1'] == "hilite1 hilite3") : ?>selected="selected"<?php endif; ?>><?php _re('Hilite 1 & Hilite 3'); ?></option>
                   					</select>
                   				</label>
                   				<a href="#" rel="rokbox[350 50][module=op-widget_user1]"><span class="help">Help</span></a>
							</div>
							<div id="op-widget_user1" class="rthide"><?php _re('Here you can switch the User 1 widget position hilite.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
					</td>
				</tr>
			</table>
			</div>
			
			<div class="inner-tabber">
			<a name="page"></a>
			
			<span class="section-title"><?php _re('Page'); ?></span><br /><br />
		
			<table class="options_table">
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Page Meta:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="page_meta"><?php } ?><input type="checkbox" value="true" class="checkbox" name="iridium-options[page_meta]" id="page_meta" <?php if($option['page_meta'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="page_meta" for="page_meta"></label><?php } ?>
								<a href="#" rel="rokbox[350 50][module=op-page_meta]"><span class="help">Help</span></a>
							</div>
							<div id="op-page_meta" class="rthide"><?php _re('Enable or disable meta (author, date, categories etc.) on the page display.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Page Title:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="page_title"><?php } ?><input type="checkbox" value="true" class="checkbox" name="iridium-options[page_title]" id="page_title" <?php if($option['page_title'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="page_title" for="page_title"></label><?php } ?>
								<a href="#" rel="rokbox[350 50][module=op-page_title]"><span class="help">Help</span></a>
							</div>
							<div id="op-page_title" class="rthide"><?php _re('Displays title on the custom page view.'); ?></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Page Author:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="page_meta_author"><?php } ?><input type="checkbox" value="true" class="checkbox" name="iridium-options[page_meta_author]" id="page_meta_author" <?php if($option['page_meta_author'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="page_meta_author" for="page_meta_author"></label><?php } ?>
								<a href="#" rel="rokbox[350 50][module=op-page_meta_author]"><span class="help">Help</span></a>
							</div>
							<div id="op-page_meta_author" class="rthide"><?php _re('Displays page author in meta in the custom page view.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Page Date:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="page_meta_date"><?php } ?><input type="checkbox" value="true" class="checkbox" name="iridium-options[page_meta_date]" id="page_meta_date" <?php if($option['page_meta_date'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="page_meta_date" for="page_meta_date"></label><?php } ?>
								<a href="#" rel="rokbox[350 50][module=op-page_meta_date]"><span class="help">Help</span></a>
							</div>
							<div id="op-page_meta_date" class="rthide"><?php _re('Displays page date in meta in the custom page view.'); ?></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Page TweetMe:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="page_tweetmeme"><?php } ?><input type="checkbox" value="true" class="checkbox" name="iridium-options[page_tweetmeme]" id="page_tweetmeme" <?php if($option['page_tweetmeme'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="page_tweetmeme" for="page_tweetmeme"></label><?php } ?>
								<a href="#" rel="rokbox[350 50][module=op-page_tweetmeme]"><span class="help">Help</span></a>
							</div>
							<div id="op-page_tweetmeme" class="rthide"><?php _re('Displays "Retweet" button at the beggining of the page.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
					</td>
				</tr>
			</table>
			</div>
			
			<div class="inner-tabber">
			<a name="single"></a>
			
			<span class="section-title"><?php _re('Single Post'); ?></span><br /><br />
		
			<table class="options_table">
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Single Post Meta:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="single_meta"><?php } ?><input type="checkbox" value="true" class="checkbox" name="iridium-options[single_meta]" id="single_meta" <?php if($option['single_meta'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="single_meta" for="single_meta"></label><?php } ?>
								<a href="#" rel="rokbox[350 50][module=op-single_meta]"><span class="help">Help</span></a>
							</div>
							<div id="op-single_meta" class="rthide"><?php _re('Enable or disable meta (author, date, categories etc.) on the single post display.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Single Post Title:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="single_title"><?php } ?><input type="checkbox" value="true" class="checkbox" name="iridium-options[single_title]" id="single_title" <?php if($option['single_title'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="single_title" for="single_title"></label><?php } ?>
								<a href="#" rel="rokbox[350 50][module=op-single_title]"><span class="help">Help</span></a>
							</div>
							<div id="op-single_title" class="rthide"><?php _re('Displays title on the single post view.'); ?></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Single Post TweetMe:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="single_tweetmeme"><?php } ?><input type="checkbox" value="true" class="checkbox" name="iridium-options[single_tweetmeme]" id="single_tweetmeme" <?php if($option['single_tweetmeme'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="single_tweetmeme" for="single_tweetmeme"></label><?php } ?>
								<a href="#" rel="rokbox[350 50][module=op-single_tweetmeme]"><span class="help">Help</span></a>
							</div>
							<div id="op-single_tweetmeme" class="rthide"><?php _re('Displays "Retweet" button at the beggining of the single post.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Single Post Date:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="single_meta_date"><?php } ?><input type="checkbox" value="true" class="checkbox" name="iridium-options[single_meta_date]" id="single_meta_date" <?php if($option['single_meta_date'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="single_meta_date" for="single_meta_date"></label><?php } ?>
								<a href="#" rel="rokbox[350 50][module=op-single_meta_date]"><span class="help">Help</span></a>
							</div>
							<div id="op-single_meta_date" class="rthide"><?php _re('Displays post date in meta in the single post view.'); ?></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Single Post Author:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="single_meta_author"><?php } ?><input type="checkbox" value="true" class="checkbox" name="iridium-options[single_meta_author]" id="single_meta_author" <?php if($option['single_meta_author'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="single_meta_author" for="single_meta_author"></label><?php } ?>
								<a href="#" rel="rokbox[350 50][module=op-single_meta_author]"><span class="help">Help</span></a>
							</div>
							<div id="op-single_meta_author" class="rthide"><?php _re('Displays post author in meta in the single post view.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Single Post Footer:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="single_footer"><?php } ?><input type="checkbox" value="true" class="checkbox" name="iridium-options[single_footer]" id="single_footer" <?php if($option['single_footer'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="single_footer" for="single_footer"></label><?php } ?>
								<a href="#" rel="rokbox[350 50][module=op-single_footer]"><span class="help">Help</span></a>
							</div>
							<div id="op-single_footer" class="rthide"><?php _re('Displays footer of the post in the single post view.'); ?></div>
						</div>
					</td>
				</tr>
			</table>
			</div>
			
			<div class="inner-tabber">
			<a name="category"></a>
			
			<span class="section-title"><?php _re('Category'); ?></span><br /><br />
		
			<table class="options_table">
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Category Post Count:'); ?>
							</div>
							<div class="paramcheck">
								<label class="category_postcount">
									<input class="textbox" id="category_postcount" type="text" size="3" maxlength="255" name="iridium-options[category_postcount]" value="<?php echo $option['category_postcount']; ?>" />
                   				</label>
                   				<a href="#" rel="rokbox[350 50][module=op-category_postcount]"><span class="help">Help</span></a>
							</div>
							<div id="op-category_postcount" class="rthide"><?php _re('Sets number of posts to display on category view.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Display Posts'); ?>
							</div>
							<div class="paramcheck">
								<label class="category_contentdis">
									<select id="category_contentdis" name="iridium-options[category_contentdis]">
      			   						<option value="content" <?php if ($option['category_contentdis'] == "content") : ?>selected="selected"<?php endif; ?>><?php _re('Content'); ?></option>    	
      			   						<option value="excerpt" <?php if ($option['category_contentdis'] == "excerpt") : ?>selected="selected"<?php endif; ?>><?php _re('Excerpt'); ?></option> 	    				
      			     				</select>
      			     			</label>
      			     			<a href="#" rel="rokbox[350 50][module=op-category_contentdis]"><span class="help">Help</span></a>
							</div>
							<div id="op-category_contentdis" class="rthide"><?php _re('Here you can change whether category page should display posts content or excerpt.'); ?></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Category Post Meta:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="category_postmeta"><?php } ?><input type="checkbox" value="true" class="checkbox" name="iridium-options[category_postmeta]" id="category_postmeta" <?php if($option['category_postmeta'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="category_postmeta" for="category_postmeta"></label><?php } ?>
								<a href="#" rel="rokbox[350 50][module=op-category_postmeta]"><span class="help">Help</span></a>
							</div>
							<div id="op-category_postmeta" class="rthide"><?php _re('Displays post meta in the category view.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Post Date:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="category_postmeta_date"><?php } ?><input type="checkbox" value="true" class="checkbox" name="iridium-options[category_postmeta_date]" id="category_postmeta_date" <?php if($option['category_postmeta_date'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="category_postmeta_date" for="category_postmeta_date"></label><?php } ?>
								<a href="#" rel="rokbox[350 50][module=op-category_postmeta_date]"><span class="help">Help</span></a>
							</div>
							<div id="op-category_postmeta_date" class="rthide"><?php _re('Displays post date in meta in the category view.'); ?></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Post Author:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="category_postmeta_author"><?php } ?><input type="checkbox" value="true" class="checkbox" name="iridium-options[category_postmeta_author]" id="category_postmeta_author" <?php if($option['category_postmeta_date'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="category_postmeta_author" for="category_postmeta_author"></label><?php } ?>
								<a href="#" rel="rokbox[350 50][module=op-category_postmeta_author]"><span class="help">Help</span></a>
							</div>
							<div id="op-category_postmeta_author" class="rthide"><?php _re('Displays post author in meta in the category view.'); ?></div>
						</div>						
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Category Post Title:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="category_title"><?php } ?><input type="checkbox" value="true" class="checkbox" name="iridium-options[category_title]" id="category_title" <?php if($option['category_title'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="category_title" for="category_title"></label><?php } ?>
								<a href="#" rel="rokbox[350 50][module=op-category_title]"><span class="help">Help</span></a>
							</div>
							<div id="op-category_title" class="rthide"><?php _re('Displays post title on the category view.'); ?></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Link Titles:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="category_titlelink"><?php } ?><input type="checkbox" value="true" class="checkbox" name="iridium-options[category_titlelink]" id="category_titlelink" <?php if($option['category_titlelink'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="category_titlelink" for="category_titlelink"></label><?php } ?>
								<a href="#" rel="rokbox[350 50][module=op-category_titlelink]"><span class="help">Help</span></a>
							</div>
							<div id="op-category_titlelink" class="rthide"><?php _re('Link titles in the category view.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
					</td>
				</tr>
			</table>
			</div>
			
			<div class="inner-tabber">
			<a name="archive"></a>
			
			<span class="section-title"><?php _re('Archive'); ?></span><br /><br />
		
			<table class="options_table">
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Archive Post Count:'); ?>
							</div>
							<div class="paramcheck">
								<label class="archive_postcount">
									<input class="textbox" id="archive_postcount" type="text" size="3" maxlength="255" name="iridium-options[archive_postcount]" value="<?php echo $option['archive_postcount']; ?>" />
                   				</label>
                   				<a href="#" rel="rokbox[350 50][module=op-archive_postcount]"><span class="help">Help</span></a>
							</div>
							<div id="op-archive_postcount" class="rthide"><?php _re('Sets number of posts to display on archive view.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Display Posts'); ?>
							</div>
							<div class="paramcheck">
								<label class="archive_contentdis">
									<select id="archive_contentdis" name="iridium-options[archive_contentdis]">
      			   						<option value="content" <?php if ($option['archive_contentdis'] == "content") : ?>selected="selected"<?php endif; ?>><?php _re('Content'); ?></option>    	
      			   						<option value="excerpt" <?php if ($option['archive_contentdis'] == "excerpt") : ?>selected="selected"<?php endif; ?>><?php _re('Excerpt'); ?></option> 	    				
      			     				</select>
      			     			</label>
      			     			<a href="#" rel="rokbox[350 50][module=op-archive_contentdis]"><span class="help">Help</span></a>
							</div>
							<div id="op-archive_contentdis" class="rthide"><?php _re('Here you can change whether archive page should display posts content or excerpt.'); ?></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Archive Post Meta:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="archive_postmeta"><?php } ?><input type="checkbox" value="true" class="checkbox" name="iridium-options[archive_postmeta]" id="archive_postmeta" <?php if($option['archive_postmeta'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="archive_postmeta" for="archive_postmeta"></label><?php } ?>
								<a href="#" rel="rokbox[350 50][module=op-archive_postmeta]"><span class="help">Help</span></a>
							</div>
							<div id="op-archive_postmeta" class="rthide"><?php _re('Displays post meta in the archive view.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Post Date:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="archive_postmeta_date"><?php } ?><input type="checkbox" value="true" class="checkbox" name="iridium-options[archive_postmeta_date]" id="archive_postmeta_date" <?php if($option['archive_postmeta_date'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="archive_postmeta_date" for="archive_postmeta_date"></label><?php } ?>
								<a href="#" rel="rokbox[350 50][module=op-archive_postmeta_date]"><span class="help">Help</span></a>
							</div>
							<div id="op-archive_postmeta_date" class="rthide"><?php _re('Displays post date in meta in the archive view.'); ?></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Post Author:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="archive_postmeta_author"><?php } ?><input type="checkbox" value="true" class="checkbox" name="iridium-options[archive_postmeta_author]" id="archive_postmeta_author" <?php if($option['archive_postmeta_author'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="archive_postmeta_author" for="archive_postmeta_author"></label><?php } ?>
								<a href="#" rel="rokbox[350 50][module=op-archive_postmeta_author]"><span class="help">Help</span></a>
							</div>
							<div id="op-archive_postmeta_author" class="rthide"><?php _re('Displays post author in meta in the archive view.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Archive Post Title:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="archive_title"><?php } ?><input type="checkbox" value="true" class="checkbox" name="iridium-options[archive_title]" id="archive_title" <?php if($option['archive_title'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="archive_title" for="archive_title"></label><?php } ?>
								<a href="#" rel="rokbox[350 50][module=op-archive_title]"><span class="help">Help</span></a>
							</div>
							<div id="op-archive_title" class="rthide"><?php _re('Displays post title on the archive view.'); ?></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Link Titles:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="archive_titlelink"><?php } ?><input type="checkbox" value="true" class="checkbox" name="iridium-options[archive_titlelink]" id="archive_titlelink" <?php if($option['archive_titlelink'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="archive_titlelink" for="archive_titlelink"></label><?php } ?>
								<a href="#" rel="rokbox[350 50][module=op-archive_titlelink]"><span class="help">Help</span></a>
							</div>
							<div id="op-archive_titlelink" class="rthide"><?php _re('Link titles in the archive view.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
					</td>
				</tr>
			</table>
			</div>
			
			<div class="inner-tabber">
			<a name="tags"></a>
			
			<span class="section-title"><?php _re('Tags'); ?></span><br /><br />
		
			<table class="options_table">
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Tags Post Count:'); ?>
							</div>
							<div class="paramcheck">
								<label class="tag_postcount">
									<input class="textbox" id="tag_postcount" type="text" size="3" maxlength="255" name="iridium-options[tag_postcount]" value="<?php echo $option['tag_postcount']; ?>" />
                   				</label>
                   				<a href="#" rel="rokbox[350 50][module=op-tag_postcount]"><span class="help">Help</span></a>
							</div>
							<div id="op-tag_postcount" class="rthide"><?php _re('Sets number of posts to display on tag view.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Display Posts'); ?>
							</div>
							<div class="paramcheck">
								<label class="tag_contentdis">
									<select id="tag_contentdis" name="iridium-options[tag_contentdis]">
      			   						<option value="content" <?php if ($option['tag_contentdis'] == "content") : ?>selected="selected"<?php endif; ?>><?php _re('Content'); ?></option>    	
      			   						<option value="excerpt" <?php if ($option['tag_contentdis'] == "excerpt") : ?>selected="selected"<?php endif; ?>><?php _re('Excerpt'); ?></option> 	    				
      			     				</select>
      			     			</label>
      			     			<a href="#" rel="rokbox[350 50][module=op-tag_contentdis]"><span class="help">Help</span></a>
							</div>
							<div id="op-tag_contentdis" class="rthide"><?php _re('Here you can change whether tag page should display posts content or excerpt.'); ?></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Tags Post Meta:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="tag_postmeta"><?php } ?><input type="checkbox" value="true" class="checkbox" name="iridium-options[tag_postmeta]" id="tag_postmeta" <?php if($option['tag_postmeta'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="tag_postmeta" for="tag_postmeta"></label><?php } ?>
								<a href="#" rel="rokbox[350 50][module=op-tag_postmeta]"><span class="help">Help</span></a>
							</div>
							<div id="op-tag_postmeta" class="rthide"><?php _re('Displays post meta in the tag view.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Post Date:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="tag_postmeta_date"><?php } ?><input type="checkbox" value="true" class="checkbox" name="iridium-options[tag_postmeta_date]" id="tag_postmeta_date" <?php if($option['tag_postmeta_date'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="tag_postmeta_date" for="tag_postmeta_date"></label><?php } ?>
								<a href="#" rel="rokbox[350 50][module=op-tag_postmeta_date]"><span class="help">Help</span></a>
							</div>
							<div id="op-tag_postmeta_date" class="rthide"><?php _re('Displays post date in meta in the tag view.'); ?></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Post Author:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="tag_postmeta_author"><?php } ?><input type="checkbox" value="true" class="checkbox" name="iridium-options[tag_postmeta_author]" id="tag_postmeta_author" <?php if($option['tag_postmeta_author'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="tag_postmeta_author" for="tag_postmeta_author"></label><?php } ?>
								<a href="#" rel="rokbox[350 50][module=op-tag_postmeta_author]"><span class="help">Help</span></a>
							</div>
							<div id="op-tag_postmeta_author" class="rthide"><?php _re('Displays post author in meta in the tag view.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Tags Post Title:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="tag_title"><?php } ?><input type="checkbox" value="true" class="checkbox" name="iridium-options[tag_title]" id="tag_title" <?php if($option['tag_title'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="tag_title" for="tag_title"></label><?php } ?>
								<a href="#" rel="rokbox[350 50][module=op-tag_title]"><span class="help">Help</span></a>
							</div>
							<div id="op-tag_title" class="rthide"><?php _re('Displays post title on the tag view.'); ?></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Link Titles:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="tag_titlelink"><?php } ?><input type="checkbox" value="true" class="checkbox" name="iridium-options[tag_titlelink]" id="tag_titlelink" <?php if($option['tag_titlelink'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="tag_titlelink" for="tag_titlelink"></label><?php } ?>
								<a href="#" rel="rokbox[350 50][module=op-tag_titlelink]"><span class="help">Help</span></a>
							</div>
							<div id="op-tag_titlelink" class="rthide"><?php _re('Link titles in the tag view.'); ?></div>
						</div>
					</td>
					<td class="secondcol">					
					</td>
				</tr>
			</table>
			</div>
			
			<div class="inner-tabber">
			<a name="search"></a>
			
			<span class="section-title"><?php _re('Search'); ?></span><br /><br />
		
			<table class="options_table">
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Search Post Count:'); ?>
							</div>
							<div class="paramcheck">
								<label class="search_postcount">
									<input class="textbox" id="search_postcount" type="text" size="3" maxlength="255" name="iridium-options[search_postcount]" value="<?php echo $option['search_postcount']; ?>" />
                   				</label>
                   				<a href="#" rel="rokbox[350 50][module=op-search_postcount]"><span class="help">Help</span></a>
							</div>
							<div id="op-search_postcount" class="rthide"><?php _re('Sets number of posts to display on search view.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Display Posts'); ?>
							</div>
							<div class="paramcheck">
								<label class="search_contentdis">
									<select id="search_contentdis" name="iridium-options[search_contentdis]">
      			   						<option value="content" <?php if ($option['search_contentdis'] == "content") : ?>selected="selected"<?php endif; ?>><?php _re('Content'); ?></option>    	
      			   						<option value="excerpt" <?php if ($option['search_contentdis'] == "excerpt") : ?>selected="selected"<?php endif; ?>><?php _re('Excerpt'); ?></option> 	    				
      			     				</select>
      			     			</label>
      			     			<a href="#" rel="rokbox[350 50][module=op-search_contentdis]"><span class="help">Help</span></a>
							</div>
							<div id="op-search_contentdis" class="rthide"><?php _re('Here you can change whether search page should display posts content or excerpt.'); ?></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Search Post Meta:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="search_postmeta"><?php } ?><input type="checkbox" value="true" class="checkbox" name="iridium-options[search_postmeta]" id="search_postmeta" <?php if($option['search_postmeta'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="search_postmeta" for="search_postmeta"></label><?php } ?>
								<a href="#" rel="rokbox[350 50][module=op-search_postmeta]"><span class="help">Help</span></a>
							</div>
							<div id="op-search_postmeta" class="rthide"><?php _re('Displays post meta in the search view.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Post Date:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="search_postmeta_date"><?php } ?><input type="checkbox" value="true" class="checkbox" name="iridium-options[search_postmeta_date]" id="search_postmeta_date" <?php if($option['search_postmeta_date'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="search_postmeta_date" for="search_postmeta_date"></label><?php } ?>
								<a href="#" rel="rokbox[350 50][module=op-search_postmeta_date]"><span class="help">Help</span></a>
							</div>
							<div id="op-search_postmeta_date" class="rthide"><?php _re('Displays post date in meta in the search view.'); ?></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Post Author:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="search_postmeta_author"><?php } ?><input type="checkbox" value="true" class="checkbox" name="iridium-options[search_postmeta_author]" id="search_postmeta_author" <?php if($option['search_postmeta_author'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="search_postmeta_author" for="search_postmeta_author"></label><?php } ?>
								<a href="#" rel="rokbox[350 50][module=op-search_postmeta_author]"><span class="help">Help</span></a>
							</div>
							<div id="op-search_postmeta_author" class="rthide"><?php _re('Displays post author in meta in the search view.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Search Post Title:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="search_title"><?php } ?><input type="checkbox" value="true" class="checkbox" name="iridium-options[search_title]" id="search_title" <?php if($option['search_title'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="search_title" for="search_title"></label><?php } ?>
								<a href="#" rel="rokbox[350 50][module=op-search_title]"><span class="help">Help</span></a>
							</div>
							<div id="op-search_title" class="rthide"><?php _re('Displays post title on the search view.'); ?></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="firstcol">
						<div class="paramfield">
							<div class="paramtext">
								<?php _re('Link Titles:'); ?>
							</div>
							<div class="paramcheck onlycheck">
								<?php if(rok_isIE()) { ?><label class="search_titlelink"><?php } ?><input type="checkbox" value="true" class="checkbox" name="iridium-options[search_titlelink]" id="search_titlelink" <?php if($option['search_titlelink'] == 'true') { ?>checked="checked"<?php } ?> /><?php if(rok_isIE()) { ?></label><?php } ?>
								<?php if(!rok_isIE()) { ?><label class="search_titlelink" for="search_titlelink"></label><?php } ?>
								<a href="#" rel="rokbox[350 50][module=op-search_titlelink]"><span class="help">Help</span></a>
							</div>
							<div id="op-search_titlelink" class="rthide"><?php _re('Link titles in the search view.'); ?></div>
						</div>
					</td>
					<td class="secondcol">
					</td>
				</tr>
			</table>
			</div>
										
		</div>
		<div class="clr"></div>
		
	</div>