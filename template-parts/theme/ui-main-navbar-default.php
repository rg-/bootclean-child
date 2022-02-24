<?php

	$simulate = true; 
	$affix = 'data-toggle="nav-affix"';
	$affix_target = '#main-content';
	$nav_class = 'navbar-expand-xs navbar-expand-aside collapse-right bg-white';
	$container_class = 'container gpx-1';
	$target = '#main-content';
	$simulate_target = '#main-content';
	global $post;
	if( !empty($post) && WPBC_if_has_page_header($post->ID) ){ 
		$nav_class .= ' has_page_header';   
	}
	if( is_front_page() ){
		$nav_class .= ' is_front_page'; 
	} 

?>

<nav id="main-navbar" 
			class="navbar <?php echo $nav_class; ?>" 
			<?php echo $affix; ?> 
			data-affix-position="fixed-top" 
			data-affix-simulate="<?php echo $simulate; ?>"  
			data-affix-simulate-target="<?php echo $simulate_target; ?>" 
			data-affix-simulate-resize="true" 
			data-affix-scrollify="true" 
			data-affix-breakpoint="xs" 
			data-affix-target="<?php echo $affix_target; ?>" 
			data-affix-offset=""  
			data-aside-expand-target=".aside-expand-content" 
			data-affix-removeclass="" 
			data-affix-addclass="shadow-sm" 
			data-is-inview="detect">

	<div class="container aside-expand-content gpy-1">

		<?php WPBC_get_template_part('parts/ui-navbar-brand'); ?>

		<?php WPBC_get_template_part('parts/ui-navbar-toggler'); ?>

		<?php WPBC_get_template_part('parts/ui-navbar-collapse'); ?>

	</div>

</nav>