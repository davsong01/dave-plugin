<?php

use Inc\Base\RemoveFields;

/**
*Plugin Name: Hide Checkout Fields by Dave
*lugin URI: https://techdaves.com
*Description: This is plugin to hide woocommerce checkout fields at will.
*Version: 1.0.0
*Author: Dave Oghi
*Author URI: http://techdaves.com
*License: GPLv2 or later
*Text Domain: dave plugin
*Support URI: https://techdaves.com
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2005-2015 Automattic, Inc.
*/

//check if operation is from inside wordpress
// if (! defined( 'ABSPATH' )  ) {
// 	die;
// }


defined( 'ABSPATH' ) or die( 'hey, go back!' );

if ( file_exists(__FILE__) . '/vendor/autoload.php')  {
	require_once dirname(__FILE__) . '/vendor/autoload.php';
}

//codes that run during activation
function activate_dave_plugin(){
	inc\Base\Activate::activate();
	//store default settings
}

function deactivate_dave_plugin(){
	inc\Base\Deactivate::deactivate();
}

register_activation_hook(__FILE__, 'activate_dave_plugin');

register_deactivation_hook(__FILE__, 'deactivate_dave_plugin');

//Check if Init class exists
if ( class_exists( 'inc\\Init')) {
	inc\Init::register_services();
	require_once dirname(__FILE__) . '/inc/Base/RemoveFields.php';
	//inc\Base\RemoveFields::custom_override_checkout_fields;


}
