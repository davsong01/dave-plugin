<?php
/**
*Trigger this file on plugin uninstall
* @package dave-plugin
*/

namespace Inc\Base;

class Activate {
	
	public static function activate() {
		flush_rewrite_rules();

		//set defaults
		if( get_option( 'dave_plugin ')){
			return;
		}

		$default = array();
		update_option( 'dave_plugin', $default );
		
	}
}