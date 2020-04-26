<?php
	//add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' 
	add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

	// Our hooked in function - $fields is passed via the filter!
	function custom_override_checkout_fields( $fields ) {
	
		$value = array_values(get_option(('dave_plugin')));
		//billing firstname
		if(isset($value[0]) && $value[0] == true){
			unset($fields['billing']['billing_first_name']);
		}

		//billing_last_name
		if(isset($value[1]) && $value[1] == true){
			unset($fields['billing']['billing_last_name']);
		}
		//billing_company
		if(isset($value[2]) && $value[2] == true){
			unset($fields['billing']['billing_company']);
		}
		//billing_address_1
		if(isset($value[3]) && $value[3] == true){
			unset($fields['billing']['billing_address_1']);
		}
		//billing_address_2
		if(isset($value[4]) && $value[4] == true){
			unset($fields['billing']['billing_address_2']);
		}
		//billing_ciy'
		if(isset($value[5]) && $value[5] == true){
			unset($fields['billing']['billing_city']); 
		}
		//billing post_code'
		if(isset($value[6]) && $value[6] == true){
			unset($fields['billing']['billing_postcode']);
		}
		//billing_country
		if(isset($value[7]) && $value[7] == true){
			unset($fields['billing']['billing_country']); 
		}
		//billing_state
		if(isset($value[8]) && $value[8] == true){
			unset($fields['billing']['billing_state']);  
		}
		//billing_email
		if(isset($value[9]) && $value[9] == true){
			unset($fields['billing']['billing_email']);   
		}
		//billing_phone'
		if(isset($value[10]) && $value[10] == true){
			unset($fields['billing']['billing_phone']); 
		}

		//shipping firstname
		if(isset($value[11]) && $value[11] == true){
			unset($fields['shipping']['shipping_first_name']);
		}
		//shipping_last_name
		if(isset($value[12]) && $value[12] == true){
			unset($fields['shipping']['shipping_last_name']);
		}
		//shipping_company
		if(isset($value[13]) && $value[13] == true){
			unset($fields['shipping']['shipping_company']);
		}
		//shipping_address_1
		if(isset($value[14]) && $value[14] == true){
			unset($fields['shipping']['shipping_address_1']);
		}
		//shipping_address_2
		if(isset($value[15]) && $value[15] == true){
			unset($fields['shipping']['shipping_address_2']);
		}
		//shipping_city'
		if(isset($value[16]) && $value[16] == true){
			unset($fields['shipping']['shipping_city']); 
		}
	//shipping_postcode'
		if(isset($value[17]) && $value[17] == true){
			unset($fields['shipping']['shipping_postcode']);
		}

		//shipping_country
		if(isset($value[18]) && $value[18] == true){
			unset($fields['shipping']['shipping_country']);
		}
		//shipping_state
		if(isset($value[19]) && $value[19] == true){
			unset($fields['shipping']['shipping_state']); 
		}
		//order_comment
		if(isset($value[20]) && $value[20] == true){
			add_filter( 'woocommerce_enable_order_notes_field', '__return_false' );
		} 
		
		return $fields;
	}