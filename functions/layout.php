<?php
add_filter('wpbc/filter/layout/locations', function($locations){ 
	$locations['home']['id'] = 'a1';
	return $locations;  
}, 20, 1 );


add_filter('WPBC_post_header_title_class', function($title_class){ 
	/*
	default
	$title_class = 'entry-title';
	*/
	$title_class .= ' gmb-2';
	return $title_class;  
}, 20, 1 ); 