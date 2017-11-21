<?php
/**
 * Core files and functions
 *
 * @copyright Copyright (c) 2017, hugw.io
 * @author Hugo W - me@hugw.io
 * @license GPLv2
 */

if ( ! defined( 'BLOOM_CHILD_DIR' ) ) define( 'BLOOM_CHILD_DIR' , get_stylesheet_directory() );
if ( ! defined( 'BLOOM_CHILD_LIBS_DIR' ) ) define( 'BLOOM_CHILD_LIBS_DIR' , BLOOM_CHILD_DIR . '/libs' );

if ( ! defined( 'BLOOM_CHILD_URL' ) ) define( 'BLOOM_CHILD_URL' , get_stylesheet_directory_uri() );
if ( ! defined( 'BLOOM_CHILD_LIBS_URL' ) ) define( 'BLOOM_CHILD_LIBS_URL' , BLOOM_CHILD_URL . '/libs' );

foreach ( [
	// Core
	'tgm',
	'utils',
	'settings',
	'setup',

	// Widgets & Modules

	// Options
	'options/theme-settings',
	'options/general-settings',
	'options/related-posts',
	'options/ads',

	// Vendor
] as $file ) include_once( BLOOM_CHILD_LIBS_DIR . "/{$file}.php" );
