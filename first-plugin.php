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

if ( !defined( 'ABSPATH' ) ) {
    die;
}

if ( file_exists( dirname( __File__ ) . '/vendor/autoload.php' ) ) {
    require_once ( dirname( __File__ ) . '/vendor/autoload.php' );
}

define( 'PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'PLUGIN_URL', plugin_dir_url( __FILE__ ) );

if ( class_exists( 'Inc\\Init' ) ) {
    Inc\Init::register_services();
}