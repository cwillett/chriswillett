<?php
/**
 * @package     wp_nexus
 * @subpackage  features.rokmenu.lib
 * @version     1.0 March 29, 2010
 * @author      RocketTheme http://www.rockettheme.com
 * @copyright   Copyright (C) 2007 - 2010 RocketTheme, LLC
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 */

/**
 * @package   wp_nexus
 * @subpackage features.rokmenu.lib
 */
class BaseRokMenuOptions {
    var $_defaults = array();

    function getForm(&$widget, $params){
        extract($params);
    }
    
    function getDefaults(){
        return $this->_defaults;
    }
}