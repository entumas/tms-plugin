<?php
/**
 * TMS plugin | Modules -> Comments form
 * @author Tumàs Muntané
 *
 */



// Privacy checkbox ========================================

// Add privacy checkbox

add_action( 'comment_form_after_fields', 'tms_privacy_comment_checkbox' );

if ( ! function_exists( 'tms_privacy_comment_checkbox' ) ) :

	function tms_privacy_comment_checkbox() {

		$output = '<p class="comment-form-privacy-consent">';

			$output .= '<input id="wp_comment_privacy_consent" name="wp_comment_privacy_consent" type="checkbox" value="privacy-accept" aria-req="true" required>';

			$output .= '<label for="wp_comment_privacy_consent">' . sprintf(
				_x( 'Accept the <a href="%s" target="blank">privacy policy</a>', 'Privacy policy notice', 'tms-plugin' ),
				get_privacy_policy_url()
			) . '</label>';

		$output .= '</p>';

		echo $output;

	}

endif;


// Save privacy checkbox in commentmeta

add_action( 'comment_post', 'tms_privacy_comment_save' );

if ( ! function_exists( 'tms_privacy_comment_save' ) ) :

	function tms_privacy_comment_save( $comment_id ) {

		if ( is_user_logged_in() ) :

			$datatype = 'logged-user';

		else :

			$datatype = $_POST[ 'wp_comment_privacy_consent' ];

		endif;

		add_comment_meta( $comment_id, 'wp_comment_privacy_consent', $datatype );

	}

endif;



// Validate ALL form with AJAX ========================================

add_action( 'wp_footer', 'tms_comment_validation' );

if ( ! function_exists( 'tms_comment_validation' ) ) :

	function tms_comment_validation() {

		if ( is_single() && comments_open() ) :

			wp_enqueue_script(
				'jquery-validate-scripts',
				'https://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js',
				array(),
				'1.9',
				true
			);

			wp_enqueue_script(
				'comments-validation-scripts',
				plugin_dir_url( __DIR__ ) . '/js/comment-validation.js',
				array( 'jquery-validate-scripts' ),
				wp_get_theme()->get( 'Version' ),
				true
			);

			wp_localize_script(
				'comments-validation-scripts',
				'tmsJsTranslates',
				tms_js_translates()
			);

		endif;

	}

endif;



// Add privacy notice after form ========================================

add_action( 'comment_form', 'tms_privacy_comment_notice' );

if ( ! function_exists( 'tms_privacy_comment_notice' ) ) :

	function tms_privacy_comment_notice() {

		echo tms_get_privacynotices( 'comments', 'comment-reply-notice' );

	}

endif;
