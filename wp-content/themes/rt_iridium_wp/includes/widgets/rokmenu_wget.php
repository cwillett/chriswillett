<?php
/**
 * @package     wp_nexus
 * @subpackage  include.widgets
 * @version     1.0 March 29, 2010
 * @author      RocketTheme http://www.rockettheme.com
 * @copyright   Copyright (C) 2007 - 2010 RocketTheme, LLC
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 */
class RokMenuWidget extends WP_Widget {

    var $_defaults = array(
        'theme' => 'fusion',
        'show_home' => 1,
        'home_text' => 'Home',
        'limit_levels' => 0,
        'startLevel' => 0,
        'endLevel' => 0,
        'showAllChildren' => 1,
        'maxdepth' => 10,
        'exclude' => array()
    );
    

    function RokMenuWidget() {
    	$widget_ops = array('classname' => 'widget_rokmenu', 'description' => _r('RocketTheme RokMenu Widget'));
    	$control_ops = array('width' => 300, 'height' => 400);
        $this->WP_Widget('rokmenu', 'RokMenu', $widget_ops, $control_ops);
    }

    function widget($args, $instance){
 		extract($args);

         $defaults = $this->_defaults;

        $themes = RokMenu::getThemes();

        foreach($themes as $theme) {
            $theme_options = RokMenu::getThemeDefaults($theme);
            $defaults =  array_merge($defaults, $theme_options);
        }

        foreach ($instance as $variable => $value) {
            $$variable =  empty($variable) ? $this->_defaults[$variable] : $value;
            $instance[$variable] = $$variable;
        }
        $args = implode_with_key("&", $instance, "=");
        ?>
        <?php
         echo $before_widget;
         RokMenu::render($args);
         echo $after_widget;?>
        <?php
	}

    function update($new_instance, $old_instance) {
    	$instance = $new_instance;
        foreach ($new_instance as $new_var => $new_value) {
            if (is_array($new_value) && $new_var == "exclude") {                
                $new_excludes = $new_value;
                $new_value = array();
                foreach ($new_excludes as $exclude => $on){
                    $new_value[] = $exclude;
                }
                $new_value = implode(",",$new_value);
            }
            $instance[$new_var] = RokMenuWidget::_cleanInputVariable($new_var, $new_value);
        }
 		return $instance;
	}

    function form($instance){
        $themes = RokMenu::getThemes();
        $defaults = $this->_defaults;

        foreach($themes as $theme) {
            $theme_options = RokMenu::getThemeDefaults($theme);
            $defaults =  array_merge($defaults, $theme_options);
        }

  		$instance = wp_parse_args((array) $instance, $defaults);

        foreach ($instance as $variable => $value)
        {
            $$variable = RokMenuWidget::_cleanOutputVariable($variable, $value);
            $instance[$variable] = $$variable;
        }

        
    	?>
    	<label for="<?php echo $this->get_field_id('show_home'); ?>1"><?php _re('Show Home Menu Item:'); ?></label>
        <input id="<?php echo $this->get_field_id('show_home'); ?>1" type="radio" value="1" name="<?php echo $this->get_field_name('show_home'); ?>" <?php if($show_home=='1') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $this->get_field_id('show_home'); ?>1"><?php _re('Yes'); ?></label>&nbsp;&nbsp;
		<input id="<?php echo $this->get_field_id('show_home'); ?>0" type="radio" value="0" name="<?php echo $this->get_field_name('show_home'); ?>" <?php if($show_home=='0') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $this->get_field_id('show_home'); ?>0"><?php _re('No'); ?></label>
		<br /><br />


        <label for="<?php echo $this->get_field_id('home_text'); ?>"><?php _re('Home Menu Text:'); ?>&nbsp;
    	<input style="width: 100px;" id="<?php echo $this->get_field_id('home_text'); ?>" name="<?php echo $this->get_field_name('home_text'); ?>" type="text" value="<?php echo $home_text; ?>" /></label>
		<br /><br />
    	<input id="<?php echo $this->get_field_id('theme'); ?>" name="<?php echo $this->get_field_name('theme'); ?>" type="hidden" value="<?php echo $theme; ?>"/>
    	<label for="<?php echo $this->get_field_id('limit_levels'); ?>1"><?php _re('Limit Levels:'); ?></label>
        <input id="<?php echo $this->get_field_id('limit_levels'); ?>1" type="radio" value="1" name="<?php echo $this->get_field_name('limit_levels'); ?>" <?php if($limit_levels=='1') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $this->get_field_id('limit_levels'); ?>1"><?php _re('Yes'); ?></label>&nbsp;&nbsp;
		<input id="<?php echo $this->get_field_id('limit_levels'); ?>0" type="radio" value="0" name="<?php echo $this->get_field_name('limit_levels'); ?>" <?php if($limit_levels=='0') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $this->get_field_id('limit_levels'); ?>0"><?php _re('No'); ?></label>
		<br /><br />

		<label for="<?php echo $this->get_field_id('startLevel'); ?>"><?php _re('Start Level:'); ?>&nbsp;
    	<input style="width: 50px;" id="<?php echo $this->get_field_id('startLevel'); ?>" name="<?php echo $this->get_field_name('startLevel'); ?>" type="text" value="<?php echo $startLevel; ?>" /></label>
    	<br /><br />

    	<label for="<?php echo $this->get_field_id('endLevel'); ?>"><?php _re('End Level:'); ?>&nbsp;
    	<input style="width: 50px;" id="<?php echo $this->get_field_id('endLevel'); ?>" name="<?php echo $this->get_field_name('endLevel'); ?>" type="text" value="<?php echo $endLevel; ?>" /></label>
    	<br /><br />

    	<label for="<?php echo $this->get_field_id('showAllChildren'); ?>1"><?php _re('Show All Children:'); ?></label>
        <input id="<?php echo $this->get_field_id('showAllChildren'); ?>1" type="radio" value="1" name="<?php echo $this->get_field_name('showAllChildren'); ?>" <?php if($showAllChildren=='1') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $this->get_field_id('showAllChildren'); ?>1"><?php _re('Yes'); ?></label>&nbsp;&nbsp;
		<input id="<?php echo $this->get_field_id('showAllChildren'); ?>0" type="radio" value="0" name="<?php echo $this->get_field_name('showAllChildren'); ?>" <?php if($showAllChildren=='0') echo 'checked="checked"'; ?>/>
		<label for="<?php echo $this->get_field_id('showAllChildren'); ?>0"><?php _re('No'); ?></label>
		<br /><br />

        <label for="<?php echo $this->get_field_id('maxdepth'); ?>"><?php _re('Maximum Depth:'); ?>&nbsp;
    	<input style="width: 50px;" id="<?php echo $this->get_field_id('maxdepth'); ?>" name="<?php echo $this->get_field_name('maxdepth'); ?>" type="text" value="<?php echo $maxdepth; ?>" /></label>

        <br /><br />
        <label for="<?php echo $this->get_field_id('exclude'); ?>"><?php _re('Exclude Pages:'); ?>&nbsp;
        <div class="scroll_checkboxes">
            <?php
            $pages = get_pages(array());
            $assoc_pages = array();
            if (!is_array($exclude)) {
            $exclude = explode(",",$exclude);
            }

            foreach ($pages as $page){
                $assoc_pages[$page->ID] = $page;
            }

            foreach ($pages as $page):
            ?>
            <label>
                <?php
                $parent = $page->post_parent;
                while(0 != (int)$parent){
                    echo "&nbsp;&nbsp;&nbsp;";
                    $parent_page = $assoc_pages[$parent];
                    $parent = $parent_page->post_parent;
                }
                ?>
                <input type="checkbox" name="<?php echo $this->get_field_name('exclude'); ?>[<?php echo $page->ID?>]" <?php if (in_array($page->ID, $exclude)):?>checked="checked"<?php endif;?>>
                <?php echo $page->post_title;?><br/>
            </label>
            <?php endforeach;?>
        </div>
        <?php
        // Load theme forms
        foreach($themes as $theme) {
            $theme_options = RokMenu::getThemeForm($theme, $this, $instance);
        }
	}

    function header($instance){
    }

    function _cleanOutputVariable($variable, $value){
        if (is_string($value)) {
            return htmlspecialchars($value);
        }
        elseif (is_array($value)) {
            foreach ($value as $subvariable => $subvalue) {
                $value[$subvariable] = RokMenuWidget::_cleanOutputVariable($subvariable, $subvalue);
            }
            return $value;
        }
        return $value;
    }
    
    function _cleanInputVariable($variable, $value){
        if (is_string($value)) {
            return stripslashes($value);
        }
        elseif (is_array($value)) {
            foreach ($value as $subvariable => $subvalue) {
                $value[$subvariable] = RokMenuWidget::_cleanInputVariable($subvariable, $subvalue);
            }
            return $value;
        }
        return $value;
    }
}

function RokMenuInit() {
  register_widget('RokMenuWidget');
}

function RokMenuScripts() {
    global $wp_registered_widgets;
    $sidebars_widgets = wp_get_sidebars_widgets();
    unset($sidebars_widgets['wp_inactive_widgets']);
    foreach ( (array) $sidebars_widgets as $sidebar ) {
        foreach ((array)$sidebar as $id) {
            $widget_info =& $wp_registered_widgets[$id];
            if ($widget_info['name'] == "RokMenu"){
                $widget =& $widget_info['callback'][0];
                $instances = $widget->get_settings();
                $instance = $instances[$widget_info['params'][0]['number']];
                $theme = $instance['theme'];
                $header = RokMenu::getHeaderInstance($theme, $instance);
                if ($header !== false) {
                    echo $header->render();
                }
            }
        }
    }
}

function RokMenuAdminHeader(){
    ?>
<style type="text/css"><!--
    .scroll_checkboxes {
        height: 100px;
        padding: 5px;
        overflow: auto;
        border: 1px solid #ccc
    }
    // -->
</style>
    <?php
}

add_action('widgets_init', 'RokMenuInit');
add_action('wp_head', 'RokMenuScripts');
add_action('admin_head','RokMenuAdminHeader');

?>