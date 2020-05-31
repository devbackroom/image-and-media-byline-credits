<?php

/**
* Fired during plugin activation
*
* @link       https://www.devbackroom.com/
* @since      1.0.0
*
* @package    Image_Byline
* @subpackage Image_Byline/includes
*/

/**
* Fired during plugin activation.
*
* This class defines all code necessary to run during the plugin's activation.
*
* @since      1.0.0
* @package    Image_Byline
* @subpackage Image_Byline/includes
* @author     Michelle Earl <michelle@devbackroom.com>
*/
class Image_Byline_Activator {

	/**
	* Add the photographer role.
	*
	* Add the photographer role for assigning image bylines.
	*
	* @since    1.0.0
	*/
	public static function activate() {
		add_role('photographer', __('Photographer'), array('read' => true,));
	}

}
