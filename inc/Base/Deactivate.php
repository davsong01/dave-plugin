<?php
/**
*Trigger this file on plugin uninstall
* @package dave-plugin
*/
namespace Inc\Base;

class Deactivate {
	
	public static function deactivate() {
		flush_rewrite_rules();
	}
}