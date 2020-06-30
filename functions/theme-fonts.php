<?php

/* Adding custom google fonts */

add_filter('WPBC_enqueue_google_fonts', 'custom__google_fonts', 10, 1);

function custom__google_fonts($fonts){

	/*
	$fonts = array(
		array(
			'base' => 'Noto-Serif', // css class base name .font-[base]{}
			'href' => 'https://fonts.googleapis.com/css?family=Noto+Serif&display=swap',
			'font-family' => "'Noto Serif', serif;",
			'primary' => true // will be "body" font on inline style
		), 
	);
	*/

	/*
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
	font-family: 'Montserrat', sans-serif;
	*/

	$fonts = array(
		array(
			'base' => 'Montserrat', // css class base name .font-[base]{}
			'href' => 'https://fonts.googleapis.com/css?family=Montserrat:wght@300&display=swap',
			'font-family' => "'Montserrat', serif;",
			'primary' => true // will be "body" font on inline style
		), 
	);

	return $fonts; 

}