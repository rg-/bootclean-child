<?php

	add_filter('wpbc/filter/wpbc-full-content-fit/col/args', function($col, $breakpoint, $col_type, $col_side, $layout_id){ 

		if( $col_side == 'left' ){
			$col['content']['content_class'] = 'gpy-2 gpr-'.$breakpoint.'-2';
		}
		if( $col_side == 'right' ){
			$col['content']['content_class'] = 'gpy-2 gpl-'.$breakpoint.'-2';
		}
		return $col;

	},10, 5);