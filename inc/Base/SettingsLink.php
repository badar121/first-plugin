<?php 
/**
 * @package first-plugin
 */

 namespace Inc\Base;
 use \Inc\Base\BaseController;


 class SettingsLink extends BaseController{
    public function register() {
        add_filter( "plugin_action_links_" . $this->plugin , array( $this, 'settings_link' ) );
    }

    public function settings_link( $link ) {
        $settings_link = '<a href="admin.php?page=first_plugin">Settings</a>';
        array_push( $link, $settings_link );
        return $link;
    }

 }