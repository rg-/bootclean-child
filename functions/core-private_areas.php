<?php 

/*

	This is de basic description in this scenario settings

	- Entire site is private unless you have a "subscriber" user, logged, role.
	- "administrator" has, of course, access anyway.
	- You can choose on each private page to make it not private anyway.
	- Since we are using woocommerce, and the idea is to sell subscriptions,
	all the woocommerce pages also are not private. So user can purchase a subscription and access private areas/contents.
	- Not private pages also can have (shortcodes), some private parts and some not-private parts.
	- Alerts actived (template-parts available)

	So:

	- visitors will pushed to purchase a subscription to access private areas.
	- users can create an account, they will become "client" role.
	- when they purchase a subscription, they will become "subscriber" user role.
	- while "subscriber" role is actived, user gain access to private areas.
	- when subscription expires, user return to "client" role and lost access to private areas again.

	You can choose where the user will be redirected once logged:

	- if user came from a private page, "private" parameter will tell the plugin to redirect to that "last visitd" url.
	- or, you can filter that and make the user to stay at My Account/Login page
	- or, you can redirect user to home page, shop page, or custom url if needed.
	- By default user will be redirected to the Shop page (see wooocommerce wpbc addon and filter, child customize enabled too.)

*/

/*

	Define the allowed roles to use
	Defaults are "administrator" and "subscriber"

*/
add_filter( 'WPBC/filter/private_areas/allowed_roles', function($allowed_roles){
	return $allowed_roles;
},10,1); 

/*
	Some usefull re-usable function
	Since we are using Type 1 that is entire website private, but not this pages
*/
function WPBC_child_bypass_private(){
	$post_type = get_post_type();
	if( is_account_page() || is_cart() || is_checkout() || is_product() || is_shop() || $post_type == 'product' || is_product_category() ){
		return true;
	} 
}

/*
	Bypass the private zone by..
*/
add_filter( 'WPBC/filter/private_areas/bypass', function($bypass,$url){ 
	$post_type = get_post_type();
	if( WPBC_child_bypass_private() ){
		return true;
	} 
},10,2);


/*
	Redirect users to this page if not allowed and not logged
*/
add_filter( 'WPBC/filter/private_areas/redirect_url', function($redirect_url, $url){
	/*
	default $redirect_url = wp_login_url();
	*/
	$redirect_url = get_permalink( wc_get_page_id( 'myaccount' ) );
	return $redirect_url;
},10,2);
/*
	Redirect users to this page if not allowed and not logged
*/
add_filter( 'WPBC/filter/private_areas/redirect_login_url', function($redirect_login_url){
	/*
	default $redirect_login_url = last visited url;
	*/ 
	return $redirect_login_url;
},10,2);

/* If woocommerce, need this too */

add_filter('WPBC/filter/woocommerce/login_redirect', function ($login_redirect){
	if(isset($_GET['private'])){
		$login_redirect = $_GET['private'];
	}
	return $login_redirect;
},10,1);

/*
	
	Show mesages on front-end depending on user allowed or not ?

*/
add_filter( 'WPBC/filter/private_areas/show_alerts', function($show_alerts){
	return $show_alerts;
},10,1); 