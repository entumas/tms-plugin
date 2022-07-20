<?php
/**
 * TMS plugin | Functionalities -> SVG icon
 * @author Tumàs Muntané
 *
 *
 * Use: tms_get_svg_icon( array( $icon, $class ) )
 * Use: tms_svg_icon( array( $icon, $class ) )
 *
 */



// Get ========================================

if ( ! function_exists( 'tms_get_svg_icon' ) ) :

	function tms_get_svg_icon( $args = array() ) {

		$path  = array_key_exists( 'path', $args ) ? $args[ 'path' ] : 'images';
		$file  = array_key_exists( 'file', $args ) ? $args[ 'file' ] : 'icons';
		$class = array_key_exists( 'class', $args ) ? ' class="svg-icon ' . $args[ 'class' ] . '"' : ' class="svg-icon"';

		$url   = get_stylesheet_directory_uri() . '/' . $path . '/';

		if ( $args[ 'icon' ] ) :
			$output  = '<svg ' . $class . '><use href="' . $url . $file . '.svg#' . $args[ 'icon' ] . '"/></svg>';
		else :
			$output  = '<img ' . $class . ' src="' . $url . $file . '.svg"/>';
		endif;


		return $output;

	}

endif;



// Show ========================================

if ( ! function_exists( 'tms_svg_icon' ) ) :

	function tms_svg_icon( $args = array() ) {

		echo tms_get_svg_icon( $args );

	}

endif;
