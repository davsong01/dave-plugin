<?php
/**
*Trigger this file on plugin uninstall
* @package dave-plugin
*/

namespace inc\Base;

use \inc\Base\BaseController;

class Enqueue extends BaseController{

	public function register() {
		add_action('admin_enqueue_scripts', array( $this, 'enqueue'));

	}

	function enqueue() {
		//enqueue JS and css
		wp_enqueue_style( 'mystyle.css', $this->plugin_url. 'assets/mystyle.css' );
		wp_enqueue_script( 'myscripts.js', $this->plugin_url. 'assets/myscripts.js');
	}
}