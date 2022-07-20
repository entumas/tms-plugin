<?php

// Admin
// ========================================


// Login
if ( file_exists( dirname( __FILE__ ) . '/login.php' ) )
	require_once dirname( __FILE__ ) . '/login.php';


// Admin bar
if ( file_exists( dirname( __FILE__ ) . '/admin-bar.php' ) )
	require_once dirname( __FILE__ ) . '/admin-bar.php';



if ( is_admin() ) :


	// Capabilities editors
	if ( file_exists( dirname( __FILE__ ) . '/capabilities-editors.php' ) )
		require_once dirname( __FILE__ ) . '/capabilities-editors.php';


	// Menu
	if ( file_exists( dirname( __FILE__ ) . '/menu.php' ) )
		require_once dirname( __FILE__ ) . '/menu.php';


	// Options page
	if ( file_exists( dirname( __FILE__ ) . '/options-page.php' ) )
		require_once dirname( __FILE__ ) . '/options-page.php';

endif;
