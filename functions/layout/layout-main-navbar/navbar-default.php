<?php


	
add_filter('wpbc/filter/layout/main-navbar/defaults', 'child_main_navmenu_default',10,1);  


function child_main_navmenu_default($args){

	/*
	
	 Affix args

	*/ 

	$affix = true;
	$simulate = true; 

	global $post;
	if(WPBC_if_has_page_header($post->ID)){
		$simulate = false; 
	}

	
	$args['class'] = 'navbar navbar-expand-aside collapse-right navbar-expand-lg bg-light'; 
	$args['nav_attrs'] = ' data-affix-removeclass="bg-light" data-affix-addclass="bg-dark navbar-dark shadow" ';

	$args['container_class'] = 'container gpl-1 gpr-2';

	$args['navbar_brand']['class'] = 'py-3';
	$args['navbar_brand']['attrs'] = ' data-affix-removeclass="" data-affix-addclass="" ';  
 
	$logo = '[WPBC_get_stylesheet_directory_uri]/images/theme/bootclean-logo-color-@2.png';
	// $args['navbar_brand']['title'] = '<img width="220" src="'.$logo.'" alt="Bootclean" data-affix-addclass=""/>';

	// or just site name
	//  $args['navbar_brand']['title'] = '<span class="" data-affix-removeclass="" data-affix-addclass="">Bootclean</span>';

	$args['navbar_toggler']['class'] = 'toggler-primary toggler-open-primary';
	$args['navbar_toggler']['type'] = 'animate';
	$args['navbar_toggler']['effect'] = 'close-arrow'; 
	$args['navbar_toggler']['attrs'] = 'data-affix-addclass="toggler-white" data-affix-removeclass="toggler-primary"'; 

	$args['wp_nav_menu']['container_class'] = 'collapse navbar-collapse flex-row-reverse mx-auto order-3';
	$args['wp_nav_menu']['menu_class'] = 'navbar-nav nav';   
	
  
	/* TODO 
		
		make any arg to be converted into data-affix-* attribute

	*/
	
	$args['affix'] = $affix;
	$args['affix_defaults']['target'] = '#main-content-wrap'; // #main-content-wrap 
	// $args['affix_defaults']['simulate'] = true;  // true, false
	$args['affix_defaults']['simulate_target'] = '#main-content'; // simulate append to element
	$args['affix_defaults']['breakpoint'] = 'xs'; // bs breakpoints
	$args['affix_defaults']['scrollify'] = false;  // true, false
  $args['affix_defaults']['position'] = 'top'; // top, fixed-top

  $args['affix_defaults']['affix-show'] = 'scroll-up'; 
	// $args['nav_attrs'] = ' data-affix-target="#main-content-wrap" '; 

	
	$args['nav_attrs'] .= ' data-affix-show="scroll-up" ';
	
	// $args['nav_attrs'] = ' data-toggle="nav-affix" data-affix-position="top" data-affix-breakpoint="xs" data-affix-target="#main-content-wrap" data-affix-simulate="false" data-affix-scrollify="true" data-affix-showXX="scroll-up" data-affix-addclassXX="bg-white" data-affix-removeclassXX="bg-transparent" ';
	 
	//$args['wp_nav_menu']['before_menu'] = '[WPBC_get_template name="parts/something"]'; 

	/* wp_nav_menu */
	//$args['wp_nav_menu'] = ''; // use this to replace wp_nav_menu with "collapse-custom" one
	//$args['wp_nav_menu_custom'] = '[WPBC_get_template name="parts/wp_nav_menu_custom"]';
	//$args['navbar_toggler']['data_toggle'] = 'data-toggle="collapse-custom"';
	//$args['navbar_toggler']['target'] = 'collapse-custom';

	return $args;
}