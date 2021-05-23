<?php 
/**
 * @package  first-plugin
 */
namespace Inc\Base;
use \Inc\Base\BaseController;


class Enqueue extends BaseController
{
	public function register() {
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue' ) );
	}
	
	function enqueue() {
		// enqueue all our scripts
		wp_enqueue_style( 'style', $this->plugin_url . 'assets/style.css' );
		wp_enqueue_script( 'cript', $this->plugin_url . 'assets/script.js' );
	}
}