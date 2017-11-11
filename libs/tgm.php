<?php
/**
 * TGM setup
 *
 * @copyright Copyright (c) 2017, hugw.io
 * @author Hugo W - me@hugw.io
 * @license GPLv2
 */

add_filter( '_bloom_child_tgm_config', function( $config = [] ) {
	// $config['id'] = 'bloom-child';
	return $config;
} );

add_filter( '_bloom_child_tgm_plugins', function( $plugins = [] ) {
	$plugins[] =  [
		'name'      => 'WordPress SEO by Yoast',
		'slug'      => 'wordpress-seo',
		'required'  => false,
	];

	$plugins[] =  [
		'name'      => 'Image Compression',
		'slug'      => 'wp-smushit',
		'required'  => false,
	];

	return $plugins;
} );
