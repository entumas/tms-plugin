<?php
/**
 * TMS plugin | Functionalities -> Security
 * @author Tumàs Muntané
 *
 */



// Block error messages at the administrator login
// ========================================

add_filter( 'login_errors', create_function( '$a', 'return null;' ) );





// Block visitors using Proxies Servers
// ========================================

// add_action( 'after_setup_theme', 'tms_block_proxy_visits' );

function tms_block_proxy_visits () {

	if ( ! is_user_logged_in() ) :

		if ( @fsockopen( $_SERVER['REMOTE_ADDR'], 80, $errstr, $errno, 1 ) ) :

			die( __( 'Proxy access is not allowed', 'tms-plugin' ) );

		endif;

	endif;

}





// Avoid user enumeration
// ========================================

function tms_check_users_num( $redirect, $request ) {

	if ( preg_match( '/\?author=([0-9]*)(\/*)/i', $request ) ) :

		header( 'Status: 301 Moved Permanently', false, 301);
		header( 'Location: ' . get_site_url() );

	else :

		return $redirect;

	endif;

}


if ( ! is_admin() ) :

	if ( preg_match( '/author=([0-9]*)/i', $_SERVER['QUERY_STRING'] ) ) die();

	add_filter( 'redirect_canonical', 'tms_check_users_num', 10, 2 );

endif;
