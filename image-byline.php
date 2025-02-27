<?php

/**
* The plugin bootstrap file
*
* This file is read by WordPress to generate the plugin information in the plugin
* admin area. This file also includes all of the dependencies used by the plugin,
* registers the activation and deactivation functions, and defines a function
* that starts the plugin.
*
* @link              https://www.devbackroom.com/
* @since             1.0.0
* @package           Image_Byline
*
* @wordpress-plugin
* Plugin Name:       Image and Media Byline Credits
* Plugin URI:        https://www.devbackroom.com/image-byline
* Description:       A simple way to add a byline credit to your images, media and other content.
* Version:           1.1.0
* Author:            DevBackroom
* Author URI:        https://www.devbackroom.com/
* License:           GPL-2.0+
* License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
* Text Domain:       image-byline
* Domain Path:       /languages
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
* Currently plugin version.
* Start at version 1.0.0 and use SemVer - https://semver.org
* Rename this for your plugin and update it as you release new versions.
*/
define( 'IMAGE_BYLINE_VERSION', '1.0.0' );

/**
* The code that runs during plugin activation.
* This action is documented in includes/class-image-byline-activator.php
*/
function activate_image_byline() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-image-byline-activator.php';
	Image_Byline_Activator::activate();
}

/**
* The code that runs during plugin deactivation.
* This action is documented in includes/class-image-byline-deactivator.php
*/
function deactivate_image_byline() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-image-byline-deactivator.php';
	Image_Byline_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_image_byline' );
register_deactivation_hook( __FILE__, 'deactivate_image_byline' );

/**
* The core plugin class that is used to define internationalization,
* admin-specific hooks, and public-facing site hooks.
*/
require plugin_dir_path( __FILE__ ) . 'includes/class-image-byline.php';

/**
* Begins execution of the plugin.
*
* Since everything within the plugin is registered via hooks,
* then kicking off the plugin from this point in the file does
* not affect the page life cycle.
*
* @since    1.0.0
*/
function run_image_byline() {

	$plugin = new Image_Byline();
	$plugin->run();

}
run_image_byline();
