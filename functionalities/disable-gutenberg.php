<?php
/**
 * TMS plugin | Functionalities -> Disable Gutenberg
 * Extend WordPress search for including custom fields
 * @author Tumàs Muntané
 *
 */



//


add_filter( 'use_block_editor_for_post_type', '__return_false', 100 );
