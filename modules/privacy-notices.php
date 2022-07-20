<?php
/**
 * TMS | Modules -> Privacy notices
 * @author Tumàs Muntané
 *
 */



if ( ! function_exists( 'tms_get_privacynotices' ) ) :

	function tms_get_privacynotices( $notice, $class = '' ) {

		$notices = get_field( 'privacy_notices', 'option' );

		$class = '' != $class ? ' ' . $class : '';

		$output = '<ul id="privacy-notice" class="privacy-notice collapsible' . $class . '">';
			$output .= '<li>';

				$output .= '<p class="collapsible-header"><span class="chevron">▷</span> ' . __( 'Before submitting your inquiry, take a look at the basic information on data protection here.', 'tms' ) . '</p>';

				$output .= '<div class="collapsible-body">';

					$output .= '<p><b>' . $notices['owner'] . '</b></p>';
					$output .= '<p>' . $notices[$notice] . '</p>';

				$output .= '</div>';

			$output .= '</li>';
		$output .= '</ul>';


		return $output;

	}

endif;
