<?php
/**
 * TMS plugin | Functionalities -> Clean head
 * @author Tumàs Muntané
 *
 */



add_action( 'after_setup_theme', 'tms_clean_head' );

if ( ! function_exists( 'tms_clean_head' ) ) :

	function tms_clean_head () {


		if ( ! is_admin() ) :

			// WordPress version
			remove_action( 'wp_head', 'wp_generator' );

			// Resource suggestions for browsers to preload, pre-render, and pre-connect to websites
			remove_action( 'wp_head', 'wp_resource_hints', 2 );

			// Link to the final point of the Really Simple Discovery service
			remove_action( 'wp_head', 'rsd_link' );

			// Link to the Windows Live Writer manifest file
			remove_action( 'wp_head', 'wlwmanifest_link' );

			// Inject rel=shortlink in the header if a shortlink is defined for the current page.
			remove_action( 'wp_head', 'wp_shortlink_wp_head' );

		endif;

	}

endif;
