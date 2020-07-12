<?php

	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'rtpanel.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

?>

	<?php if(isset($_GET['updated']) == 'true') { ?><div id="message" class="updated fade"><p>Theme settings saved.</p></div><?php } ?>
	
	<?php $option = get_option('iridium-options'); ?>
	
	<script type="text/javascript">
		var stylesList = new Hash({});
		var styleSelected = null;
		window.addEvent('domready', function() {
			styleSelected = $('preset_style').getValue();
			$('preset_style').empty();
			stylesList.set('style1', ['style1', 'full', 'iridium', '#8BB036']);
			stylesList.set('style2', ['style2', 'full', 'georgia', '#07A7A7']);
			stylesList.set('style3', ['style3', 'full', 'helvetica', '#E4B300']);
			stylesList.set('style4', ['style4', 'full', 'georgia', '#5FB12A']);
			stylesList.set('style5', ['style5', 'full', 'helvetica', '#cc0000']);
			stylesList.set('style6', ['style6', 'full', 'helvetica', '#05B3D8']);
		});
		
		var rainbowLoad = function(name, hex) {
			
			if (hex) {
				$(name+'_input').getPrevious().value = hex;
				$(name+'_input').getFirst().setStyle('background-color', hex);
			}
				
		};
		
		/* START_DEBUG ONLY */
			
		var debug_only = function() {
				var td = new Element('td', {'id': 'toolbar-colorstyle', 'class': 'button'}).inject('toolbar-preview', 'before');
				var a = new Element('a', {'class': 'toolbar', 'href': '#'}).inject(td).setText('Custom style');
				
				var tr = new Element('tr').inject($('link_color').getParent().getParent(), 'after');
				var td1 = new Element('td', {'class': 'paramlist_key', 'styles': 'width: 40%;'}).inject(tr);
				
				var td2 = new Element('td', {'class': 'paramlist_value'}).inject(tr);
				
				var scroll = new Fx.Scroll(window, {offset: {x: false, y: -5}});
				a.addEvent('click', function(e) {
					new Event(e).stop();
					var arr = [];
					
					var output = [
						$('primary_style').getValue(),
						$('bg_style').getValue(),
						$('font_face').getValue(),
						$('link_color').getValue()
					];
					
					output = output.join('\', \'');
					
					tarea.setHTML('\'style_name\' => array(\''+output+'\')');
					
					tarea.focus();
					tarea.select();
					
					scroll.toElement(tarea);
				});
			};
			
			/* END_DEBUG ONLY */
			
			window.addEvent('domready', function() {
				
				debug_only();
				
				// Styles Combo
				var stylesCombo = $('preset_style');
				var body = $('bg_style');
				var header = $('primary_style');
				var font = $('font_face');
				
				stylesList.each(function(key, value) {
					var option = new Element('option', {'value': value.toLowerCase()}).setHTML(value.capitalize());
					if (value == styleSelected) option.setProperty('selected', 'selected');
					option.inject(stylesCombo);
				});
				var option = new Element('option', {'value': 'custom'}).setHTML('Custom').inject(stylesCombo);
				if (styleSelected == 'custom') option.setProperty('selected', 'selected');
				
				stylesCombo.addEvent('change', function(e) {
					new Event(e).stop();
					if (this.value == 'custom') return;
					header.getChildren().each(function(el) {
						if (el.value == stylesList.get(this.value)[0]) el.selected = true;
					}, this);
					body.getChildren().each(function(el) {
						if (el.value == stylesList.get(this.value)[1]) el.selected = true;
					}, this);
					font.getChildren().each(function(el) {
						if (el.value == stylesList.get(this.value)[2]) el.selected = true;
					}, this);
					
					rainbowLoad('myRainbow_link_color', stylesList.get(this.value)[3]);					
				});				
			});
			
			<?php
			include(TEMPLATEPATH.'/elements/colorchooser.php');
			echo RokColorChooser::newRainbow('link_color');
			?>
			
	</script>
	
	<!-- Important -->
	
	<table class="toolbar" style="display: none;">
		<tr>
			<td class="button" id="toolbar-preview">
			</td>
		</tr>
	</table>
	
	<!-- End Important -->

	<div id="rtpanel">
		
		<script type="text/javascript">
			RokTabsOptions.duration.push(600);
			RokTabsOptions.transition.push(Fx.Transitions.Quad.easeInOut);
			RokTabsOptions.auto.push(0);
			RokTabsOptions.delay.push(2000);
			RokTabsOptions.type.push('scrolling');
			RokTabsOptions.linksMargins.push(0);
		</script>
	
		<div class="tabs-top">
			<div class="roktabs-wrapper" style="width: 770px;">
				<div class="roktabs base">
				
					<form method="post" action="options.php">
    				<?php settings_fields('theme-options-array'); ?>
				
					<div id="top">
						<div id="rt-top-l" class="png"></div>
						<div id="rt-top-m" class="png">
							<div class='roktabs-links'>
								<ul class='roktabs-top'>
									<li class="first active"><a href="#" title="GENERAL" class="roktips topgeneral"><span class="rthide">General</span></a></li>
									<li><a href="#" title="STYLE" class="roktips topstyle"><span class="rthide">Style</span></a></li>
									<li class="last"><a href="#" title="LAYOUT" class="roktips toplayout"><span class="rthide">Layout</span></a></li>
								</ul>
							</div>
							<ul class="additional-button">
								<li><a href="http://www.rockettheme.com/forum/index.php?f=345&amp;rb_v=viewforum" target="_blank" title="FORUMS" class="roktips topforums"><span class="rthide">Forums</span></a></li>
							</ul>
							<div class="submit-wrapper png"><input type="submit" class="submit-button" value="<?php _e('Save Changes'); ?>" /></div>
						</div>
						<div id="rt-top-r" class="png"></div>
					</div>
					<div class="clr"></div>
		
					<div id="maincontent">
						
						<div class="roktabs-container-inner">
							<div class="roktabs-container-wrapper">
		
								<div class='roktabs-tab1 tabcont'>
									<div class='wrapper'>
										
										<?php include('general.php'); ?>
					
									</div>
								</div>
						
								<div class='roktabs-tab2 tabcont'>
									<div class='wrapper'>
					
										<?php include('style.php'); ?>
					
									</div>
								</div>
							
								<div class='roktabs-tab3 tabcont'>
									<div class='wrapper'>
		
										<?php include('layout.php'); ?>
					
									</div>
								</div>
					
							</div>
						</div>				
					</div>
					<div class="clr"></div>
		
					<div id="bottom">
						<div id="rt-bot-l" class="png"></div>
						<div id="rt-bot-m" class="png">
							<div id="rocket" class="png"></div>
							<div class="submit-wrapper png"><input type="submit" class="submit-button" value="<?php _e('Save Changes'); ?>" /></div>
						</div>
						<div id="rt-bot-r" class="png"></div>
					</div>
					<div class="clr"></div>
					
					</form>
								
				</div>
			</div>
		</div>
	</div>