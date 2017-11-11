<?php
/**
 * Setup functions
 *
 * @copyright Copyright (c) 2017, hugw.io
 * @author Hugo W - me@hugw.io
 * @license GPLv2
 */

/**
 * Make theme available
 * for translation
 */
load_theme_textdomain( 'bloom', BLOOM_CHILD_DIR . '/lang' );

/**
 * Basic setup
 */
add_action( 'after_setup_theme', function() {
	// Editor style
	add_editor_style( '/assets/css/theme-editor.min.css' );
}, 11 );

/**
 * Enqueue base stylesheets
 */
add_action( '_bloom_enqueue_stylesheets', function() {
	wp_enqueue_style( 'bloom-child-theme' , BLOOM_CHILD_URL . '/assets/css/theme.min.css' );
} );


/**
 * Enqueue base scripts
 */
add_action( '_bloom_enqueue_scripts', function() {
	wp_enqueue_script( 'flourish-child-theme' , BLOOM_CHILD_URL . '/assets/js/theme.min.js' );
} );
