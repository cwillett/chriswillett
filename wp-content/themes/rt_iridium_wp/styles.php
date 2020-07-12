<?php
/**
 * @package   Iridium Template - RocketTheme
 * @version   1.5.1 March 18, 2010
 * @author    RocketTheme, LLC http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2010 RocketTheme, LLC
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 *
 * Rockettheme Iridium Template uses the Joomla Framework (http://www.joomla.org), a GNU/GPLv2 content management system
 *
 */

global $stylesList;

class Style {
	var $pstyle = '';
	var $bgstyle = '';
	var $fontfamily = '';
	var $linkcolor = '';
	var $fontstyle = '';
	
	function __construct($pstyle, $bg, $font, $link, $fontstyle="f-default") {
		$this->pstyle= $pstyle;
		$this->bgstyle = $bg;
		$this->fontfamily = $font;
		$this->linkcolor = $link;
		$this->fontstyle = $fontstyle;
	}
	
	function Style($pstyle, $bg, $font, $link, $fontstyle="f-default") {
		$this->__construct($pstyle, $bg, $font, $link, $fontstyle);
	}
	
	function equals($styleObject){
		if (
			$this->pstyle != $styleObject->pstyle
			||
			$this->bgstyle != $styleObject->bgstyle
			||
			$this->fontfamily != $styleObject->fontfamily	
			||
			$this->linkcolor != $styleObject->linkcolor
			|| 
			$this->fontstyle !=  $styleObject->fontstyle
		)
		{
			return false;
		}
		return true;
	}
}

$stylesList = array(
	'style1'  => new Style('style1', 'full', 'iridium', '#8BB036'),
	'style2'  => new Style('style2', 'full', 'georgia', '#07A7A7'),
	'style3'  => new Style('style3', 'full', 'helvetica', '#E4B300'),
	'style4'  => new Style('style4', 'full', 'georgia', '#5FB12A'),
	'style5'  => new Style('style5', 'full', 'helvetica', '#cc0000'),
	'style6'  => new Style('style6', 'full', 'helvetica', '#05B3D8')
);


?>