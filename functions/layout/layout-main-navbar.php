<?php
/*

	Filter main-navbar settings

*/
	
// include('layout-main-navbar/navbar-default.php');


/*
	Alter output html for menus
*/
function nav_replace_wpse_189788($item_output, $item) {  
	return $item_output; 
}
add_filter('walker_nav_menu_start_el','nav_replace_wpse_189788',10,2);


/*
	Disable main-navbar from templates
*/
add_filter('wpbc/filter/layout/main-navbar/defaults',function ($params){
	//$params['use_custom_template'] = 'none';
	return $params;
},10,1); 


/*
	Add items into menus
*/
// add_filter('wp_nav_menu_items', 'add_admin_link', 10, 2);
function add_admin_link($items, $args){
    if( $args->theme_location == 'primary' ){
        $items .= '<li class="nav-item menu-item">'; 
    		$items .= 'something';
    		$items .= '</li>';
    }
    return $items;
}


/* 
	Disable dropdown markup on BootstrapNavWalker 
*/
// add_filter('nav_menu_use_dropdown',function(){ return false; });