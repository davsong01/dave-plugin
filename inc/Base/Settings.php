<?php
/**
*Trigger this file on plugin uninstall
* @package dave-plugin
*/

namespace inc\Base;

use \inc\Base\BaseController;

class Settings extends BaseController{

	public function register() {

			add_filter( 'plugin_action_links_'.$this->plugin_name, array( $this, 'settings_link'));	
	}

	function settings_link( $links ) {
	    // add custom settings list
		$settings = '<a href="admin.php?page=dave_plugin">Settings</a>';

		array_push( $links, $settings);
		
		return $links;
	}
}