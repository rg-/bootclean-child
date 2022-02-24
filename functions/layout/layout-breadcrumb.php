<?php

	/* 
	
		Breadcrumb

	*/ 

	add_action('wpbc/layout/start', function($out){

		if(!is_front_page()){
			WPBC_get_template_part('parts/breadcrumb'); 
	  }

	},21,1);   