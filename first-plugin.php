<?php
/** 
* Plugin Name: First Plugin
* Description: This is my first Plugin.
* Version: 1.0.0
* Author: Badar Shahbaz
* Text Domain: first-plugin
* License: GPLv2 or later
* License URI: https://www.gnu.org/licenses/gpl-2.0.html
*
* @package first-plugin
*/


// Checking ABSPATH constant.If it is not defined, don't run
// the Plugin. 
if ( !defined( 'ABSPATH' ) ) {
    die;
}

// Require one the Composer Autoload file
if ( file_exists( dirname( __File__ ) . '/vendor/autoload.php' ) ) {
    require_once ( dirname( __File__ ) . '/vendor/autoload.php' );
}

// Defining CONSTANTS to be used throughout the Plugin
define( 'PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'PLUGIN', plugin_basename( __FILE__ ) );

// Code that will run autoatically when the Plugin is activated or deactivated 
function activate_first_plgin() {
    Inc\Base\Activate::activate();
}
register_activation_hook( __FILE__, 'activate_first_plgin' );

function deactivate_first_plgin() {
    Inc\Base\Deactivate::deactivate();
}
register_deactivation_hook( __FILE__, 'deactivate_first_plgin' );

// Runs the Initialization function
if ( class_exists( 'Inc\\Init' ) ) {
    Inc\Init::register_services();
}
