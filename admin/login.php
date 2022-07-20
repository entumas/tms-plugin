<?php
/**
 * TMS plugin | Admin -> Login
 * @author Tumàs Muntané
 *
 */



// Logo URL ========================================

add_filter( 'login_headerurl', 'tms_login_logo_url' );

if ( ! function_exists( 'tms_login_logo_url' ) ) :

	function tms_login_logo_url() {

		return esc_url( home_url() );

	}

endif;





// Logo URL title ========================================

add_filter( 'login_headertitle', 'tms_login_logo_url_title' );

if ( ! function_exists( 'tms_login_logo_url_title' ) ) :

	function tms_login_logo_url_title() {

		return get_bloginfo( 'name' );

	}

endif;
