<?php
/**
*Trigger this file on plugin uninstall
* @package dave-plugin
*/

namespace inc\Pages;


use \inc\Api\SettingsApi;
use \inc\Base\BaseController;
use inc\Api\Callbacks\AdminCallbacks;
use inc\Api\Callbacks\ManagerCallbacks;


class Dashboard extends BaseController{
	
	public $settings;
	public $workings;

	public $callbacks;
	public $callbacks_mgr;
	
	public $pages = array();

	public $subpages = array();

	public function register() {
		$this->settings = new SettingsApi();

		$this->callbacks = new AdminCallbacks();

		$this->callbacks_mngr = new ManagerCallbacks();

		$this->setPages();

		$this->setSubPages();

		$this->setSettings();

		$this->setSections();

		$this->setFields();

		$this->settings->addPages( $this->pages )->withSubPage( 'Dashboard' )->addSubPages( $this->subpages )->register();
	}
	

	public function setPages(){
		$this->pages = array(
			array(
				'page_title' => 'Dave Plugin', 
				'menu_title' => 'Hide Checkout Fields',
				'capability' => 'manage_options',
				'menu_slug' => 'dave_plugin', 
				'callback' => array( $this->callbacks, 'adminDashboard' ), 
				'icon_url' => 'dashicons-cart',
				'position' => 100,
			),
		);
	}

	public function setSubPages(){

		// $this->subpages = array(
		// 	array(
		// 	'parent_slug' => 'dave_plugin',
		// 	'page_title' => 'Custom Post Types', 
		// 	'menu_title' => 'CPT', 
		// 	'capability' => 'manage_options',
		// 	'menu_slug' => 'dave_cpt', 
		// 	'callback' => array( $this->callbacks, 'adminCpt' ), 
		// 	),

		// 	array(
		// 	'parent_slug' => 'dave_plugin',
		// 	'page_title' => 'Custom Taxonomies', 
		// 	'menu_title' => 'Taxonomies', 
		// 	'capability' => 'manage_options',
		// 	'menu_slug' => 'dave_taxonomy', 
		// 	'callback' => array( $this->callbacks, 'adminTaxonomy' ), 
		// 	),

		// 	array(
		// 	'parent_slug' => 'dave_plugin',
		// 	'page_title' => 'widgets', 
		// 	'menu_title' => 'Widget', 
		// 	'capability' => 'manage_options',
		// 	'menu_slug' => 'dave_widgets', 
		// 	'callback' => array( $this->callbacks, 'adminWidget' ), 
		// 	),

		// );
	}

	public function setSettings(){

		$args = array(
			array(
				'option_group' => 'dave_plugin_settings',
				'option_name' => 'dave_plugin',
				'callback' => array( $this->callbacks_mngr, 'checkboxSanitize')
			),
		);

		$this->settings->setSettings( $args );
	
	}

	public function setSections(){
		$args = array(
			array(
				'id' => 'dave_admin_index',
				'title' => 'Hide Woocommerce Fields by Dave',
				'callback' => array( $this->callbacks_mngr, 'adminSectionManager'),
				'page' => 'dave_plugin',
			)
		);

			$this->settings->setSections( $args );
	}

	public function setFields(){

		
		$args = array();

		foreach( $this->managers as $key => $value ){
			$args[] = array(
				'id' => $key,
				'title' => $value,
				'callback' => array( $this->callbacks_mngr, 'checkboxFields'),
				'page' => 'dave_plugin',
				'section' => 'dave_admin_index',
				'args' => array(
					'option_name' => 'dave_plugin',
					'label_for' => $key,
					'class' => 'ui-toggle',
				)
			);
		
		}

		$this->settings->setFields( $args );
	}

}