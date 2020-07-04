<?php

/*

	Add custom settings page for this child theme

*/

if( function_exists('acf_add_options_page') ) { 

	$args = array(
		'page_title' => __('Theme Settings','bootclean-child'),
		'menu_slug' => 'wpbc-theme-settings',
		'capability' => 'edit_theme_options',
		'position' => '2.2',
		'icon_url' => get_template_directory_uri().'/images/theme/bootclean-iso-color-@2.png',
	);

	$args = apply_filters('wpbc/filter/theme-settings/options_page',$args);
	
	acf_add_options_page($args); 

}

/*
	Add styles, notice the menu_slug as part of the class element.
*/

if(!function_exists('WPBC_theme_settings_admin_head')){
	
	add_action('admin_head', 'WPBC_theme_settings_admin_head',999);
	
	function WPBC_theme_settings_admin_head(){
	?>
	<style>
		#adminmenu .toplevel_page_wpbc-theme-settings .wp-menu-image img {
	    width: 18px;
	    height: auto;
	    top: -2px;
	    position: relative;
	}
	</style>
	<?php
	}

}