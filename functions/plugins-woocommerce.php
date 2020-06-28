<?php

/*

	Even WPBC detects Woocomerce and define a constant:

	 "WPBC_WOOCOMMERCE_ACTIVE" 

	 Note: on templates can use the function WPBC_is_woocommerce_active() true/false

	Customizations must be enabled like so:

*/
add_filter('wpbc/filter/woocommerce/enable_customise','__return_true',10,1);



/*

	Modify the WPBC woocommerce main settings


	$wpbc_woocommerce_config = array(
	
		'widgets' => ....

	)

*/

add_filter('wpbc/filter/woocommerce/config', 'child_woocommerce_config',10,1);

function child_woocommerce_config($wpbc_woocommerce_config){

	/*
		Change widgets (NEVER EVER CHANGE IDS ON PRODUCTION SITE!!!!!)

		by default config has 2 woo widgets areas:

			widget_area_woocommerce
			widget_area_woocommerce_products

		You could unset one, both, add new ones, or modify args on default ones.

	*/

	//$wpbc_woocommerce_config['widgets']['widget_area_woocommerce']['name'] = 'Custom widget name here';
	//$wpbc_woocommerce_config['widgets']['widget_area_woocommerce']['description'] = 'Custom description here';

	return $wpbc_woocommerce_config;
}