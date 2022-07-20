<?php

// Modules
// ========================================


// Comments form
if ( file_exists( dirname( __FILE__ ) . '/comments-form.php' ) )
	require_once dirname( __FILE__ ) . '/comments-form.php';


// Privacy notices
if ( file_exists( dirname( __FILE__ ) . '/privacy-notices.php' ) )
	require_once dirname( __FILE__ ) . '/privacy-notices.php';


// Privacy WPforms notice
if ( file_exists( dirname( __FILE__ ) . '/privacy-wpforms-notice.php' ) )
	require_once dirname( __FILE__ ) . '/privacy-wpforms-notice.php';
