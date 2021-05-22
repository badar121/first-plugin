<?php 
/**
 * @package  first-plugin
 */
namespace Inc\Base;

/**
* 
*/
class Enqueue
{
	public function register() {
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue' ) );
	}
	
	function enqueue() {
		// enqueue all our scripts
		wp_enqueue_style( 'style', PLUGIN_URL . 'assets/style.css' );
		wp_enqueue_script( 'cript', PLUGIN_URL . 'assets/script.js' );
	}
}