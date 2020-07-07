<?php

/*

	Bootclean child custom functions 

*/

	/*
	Enable Theme Settings Page
	*/

/* Enable theme_settings addon */
add_filter('wpbc/filter/theme_settings/installed', '__return_true');
include('functions/theme-options-theme-settings.php');

/* Enable private_areas addon */
add_filter('wpbc/filter/private_areas/installed', '__return_true');
include('functions/core-private_areas.php');

/* general options/settings */
include('functions/theme-textdomain.php'); 
include('functions/theme-options.php');
include('functions/theme-options-page-settings.php');
include('functions/theme-scripts.php');
include('functions/theme-fonts.php');
include('functions/theme-widgets.php');

/* core */
include('functions/core-theme_support.php'); 

/* front-end layout */ 
include('functions/layout.php');
include('functions/layout-navmenus.php');

/* plugins */
include('functions/plugins-woocommerce.php');   