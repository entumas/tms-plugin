<?php
/**
 * TMS plugin | Functionalities -> Video
 * @author Tumàs Muntané
 *
 *
 * Use: tms_get_video( $video )
 * Use: tms_video( $video )
 *
 */



// Get ========================================

if ( ! function_exists( 'tms_get_video' ) ) :

	function tms_get_video( $video ) {

		if ( false !== strpos( $video, 'youtube.com' ) ) :

			$video = substr( $video, strlen( 'https://www.youtube.com/watch?v=' ) );

			$output = '<iframe src="https://www.youtube.com/embed/' . $video . '" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';

		elseif ( false !== strpos( $video, 'vimeo.com' ) ) :

			$video = substr( $video, strlen( 'https://vimeo.com/' ) );

			$output = '<iframe src="https://player.vimeo.com/video/' . $video . '" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>';

		endif;


		return '<div class="video-responsive">' . $output . '</div>';

	}

endif;



// Show ========================================

if ( ! function_exists( 'tms_video' ) ) :

	function tms_video( $video ) {

		echo tms_get_video( $video );

	}

endif;
