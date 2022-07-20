<?php
/*
	Plugin Name:  TMS plugin
	Plugin URI:   https://tumasmuntane.com
	Description:  Add to the WordPress website extra features like custom post types and other functionalities.
	Version:      1.0.0
	Text Domain:  tms-plugin
	Domain Path:  /languages
	Author:       Tumàs Muntané
	Author URI:   https://tumasmuntane.com
	License:      GLP2
	License URI:  https://www.gnu.org/licenses/gpl-2.0.html
*/



if ( ! defined( 'ABSPATH' ) ) exit;


// Textdomain
add_action( 'plugins_loaded', 'tms_load_plugin_textdomain' );

if ( ! function_exists( 'tms_load_plugin_textdomain' ) ) :

	function tms_load_plugin_textdomain() {

		load_plugin_textdomain( 'tms-plugin', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );

	}

endif;



// Functionalities
if ( file_exists( dirname( __FILE__ ) . '/functionalities/index.php' ) )
	require_once dirname( __FILE__ ) . '/functionalities/index.php';



// Admin
if ( file_exists( dirname( __FILE__ ) . '/admin/index.php' ) )
	require_once dirname( __FILE__ ) . '/admin/index.php';



// Modules
if ( file_exists( dirname( __FILE__ ) . '/modules/index.php' ) )
	require_once dirname( __FILE__ ) . '/modules/index.php';



// Post types
// if ( file_exists( dirname( __FILE__ ) . '/post-types/index.php' ) )
// 	require_once dirname( __FILE__ ) . '/post-types/index.php';
