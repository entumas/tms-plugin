<?php
/**
 * TMS plugin | Functionalities -> Deregister scripts
 * @author Tumàs Muntané
 *
 */



// Styles
// ========================================

add_action( 'wp_print_styles', 'tms_deregister_style', 100 );

if ( ! function_exists( 'tms_deregister_style' ) ) :

	function tms_deregister_style() {

		wp_deregister_style( 'wp-block-library' );
		wp_deregister_style( 'wp-block-library-theme' );
		wp_deregister_style( 'wc-block-style' );
		wp_deregister_style( 'global-styles' );

		if ( ! is_user_logged_in() ) :

			wp_deregister_style( 'dashicons' );
			wp_deregister_style( 'admin-bar' );

		endif;

	}

endif;





// Scripts
// ========================================

add_action( 'wp_print_scripts', 'tms_deregister_script', 100 );

if ( ! function_exists( 'tms_deregister_script' ) ) :

	function tms_deregister_script() {

		if ( ! is_user_logged_in() ) :

			wp_deregister_style( 'admin-bar' );

		endif;

	}

endif;
