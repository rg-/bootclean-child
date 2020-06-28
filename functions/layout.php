<?php
add_filter('wpbc/filter/layout/locations', function($locations){ 
	$locations['home']['id'] = 'a1';
	return $locations;  
}, 20, 1 );