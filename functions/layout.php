<?php

	add_filter('wpbc/filter/layout_blog/installed', '__return_true');

	include('layout/layout-locations.php'); 
	include('layout/layout-styles.php'); 
	include('layout/layout-main-navbar.php'); 
	include('layout/layout-builder.php');  