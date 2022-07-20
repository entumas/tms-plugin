<?php
/**
 * TMS plugin | Admin -> Admin bar
 * @author Tumàs Muntané
 *
 */



// Admin bar ========================================

add_action( 'wp_before_admin_bar_render', 'tms_before_admin_bar' );

if ( ! function_exists( 'tms_before_admin_bar' ) ) :

	function tms_before_admin_bar () {

		global $wp_admin_bar;

		$wp_admin_bar->remove_menu( 'wp-logo' );
		$wp_admin_bar->remove_menu( 'comments' );

	}

endif;
