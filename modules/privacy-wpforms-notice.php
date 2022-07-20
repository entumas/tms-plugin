<?php
/**
 * TMS | Modules -> Privacy WPforms notice
 * @author Tumàs Muntané
 *
 */



// Add privacy notice before submit button ========================================

add_action( 'wpforms_display_submit_before', 'tms_privacy_wpforms_notice' );

if ( ! function_exists( 'tms_privacy_wpforms_notice' ) ) :

	function tms_privacy_wpforms_notice() {

		echo tms_get_privacynotices( 'contact', 'wpforms-notice' );

	}

endif;
