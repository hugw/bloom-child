<?php
/**
 * TGM setup
 *
 * @copyright Copyright (c) 2017, hugw.io
 * @author Hugo W - me@hugw.io
 * @license GPLv2
 */

add_filter( '_bloom_child_tgm_config', function( $config = [] ) {
	return $config;
} );

add_filter( '_bloom_child_tgm_plugins', function( $plugins = [] ) {
	return $plugins;
} );
