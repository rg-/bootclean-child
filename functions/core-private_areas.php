<?php

/* Enable private_areas addon */
add_filter('wpbc/filter/private_areas/installed', '__return_true');

add_filter( 'WPBC/filter/private_areas/allowed_roles', function($allowed_roles){
	/*
	defaults
	$allowed_roles = array(
		'administrator',
		'subscriber'
	);
	*/
	return $allowed_roles;
},10,1);

add_filter( 'WPBC/filter/private_areas/redirect/url', function($redirect_url){
	/*
	default
	$redirect_url = wp_login_url();
	*/
	$redirect_url = get_home_url().'?rel=1';
	return $redirect_url;
},10,1);


add_filter( 'WPBC/filter/private_areas/if', function($if){ 
	/*
	default
	$if = false;
	*/
	if( is_page(45) ){
		$if = true;
	}
	return $if;
},10,1);