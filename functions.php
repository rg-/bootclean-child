<?php

/*

	Bootclean child custom functions 

*/

/* general options/settings */
include('functions/theme-textdomain.php'); 
include('functions/theme-options.php');
include('functions/theme-scripts.php');
include('functions/theme-fonts.php');
include('functions/theme-widgets.php');

/* core */
include('functions/core-theme_support.php');
include('functions/core-private_areas.php');

/* front-end layout */ 
include('functions/layout.php');
include('functions/layout-navmenus.php');

/* plugins */
include('functions/plugins-woocommerce.php');   