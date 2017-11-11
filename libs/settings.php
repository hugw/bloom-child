<?php
/**
 * Settings
 *
 * @copyright Copyright (c) 2017, hugw.io
 * @author Hugo W - me@hugw.io
 * @license GPLv2
 */

/**
 * Settings variables
 */
add_filter( '_bloom_child_settings', function( $bloom = [] ) {

	// $bloom['preview'] = (object) [
	// 	'length' => '25',
	// 	'end' => ' ...',
	// 	'read_more' => __( 'Read more', 'bloom' ),
	// ];

	return $bloom;
} );
