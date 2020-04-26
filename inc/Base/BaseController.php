<?php
/**
*Trigger this file on plugin uninstall
* @package dave-plugin
*/

namespace inc\Base;

class BaseController{

	public $plugin_path;
	public $plugin_url;
	public $plugin_name;

	public $managers = array();
	 
	public function __construct() {
		$this->plugin_path = plugin_dir_path( dirname( __FILE__, 2 ));
		$this->plugin_url = plugin_dir_url( dirname( __FILE__, 2 ));
		$this->plugin_name = plugin_basename( dirname( __FILE__, 3 )). '/dave-plugin.php';

		$this->managers = array(
			'billing_first_name' => 'Hide Billing First Name',
			'billing_last_name' => 'Hide Billing First Last Name',
			'billing_company' => 'Hide Billing Company',
			'billing_address_1' => 'Hide Billing Address 1',
			'billing_address_2' => 'Hide Billing Address 2',
			'billing_city' => 'Hide Billing City',
			'billing_post_code' => 'Hide Billing Post Code',
			'billing_country' => 'Hide Billing Country',
			'billing_state' => 'Hide Billing State',
			'billing_email' => 'Hide Billing Email',
			'billing_phone' => 'Hide Billing Phone',

			'shipping_first_name' => 'Hide shipping First Name',
			'shipping_last_name' => 'Hide shipping First Last Name',
			'shipping_company' => 'Hide shipping Company',
			'shipping_address_1' => 'Hide shipping Address 1',
			'shipping_address_2' => 'Hide shipping Address 2',
			'shipping_city' => 'Hide shipping City',
			'shipping_post_code' => 'Hide shipping Post Code',
			'shipping_country' => 'Hide shipping Country',
			'shipping_state' => 'Hide shipping State',
			'order_comments' => 'Hide Order Comments',
		);

		
	}
	
}