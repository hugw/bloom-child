<?php
/**
 * Related posts
 *
 * @copyright Copyright (c) 2017, hugw.io
 * @author Hugo W - me@hugw.io
 * @license GPLv2
 */

if( ! function_exists('acf_add_local_field_group') ) return;

add_action( 'after_setup_theme', function() {
	acf_add_local_field_group([
		'key' => 'group_grPFmqDdun',
		'title' => __( 'Related Posts', 'bloom' ),
		'fields' => [
			[
				'key' => 'field_SllZehcUtf',
				'label' => __( 'Posts', 'bloom' ),
				'name' => 'related_posts',
				'type' => 'relationship',
				'instructions' => '',
				'required' => 0,
				'post_type' => [
					0 => 'post',
				],
				'taxonomy' => [],
				'filters' => [
					0 => 'search',
					1 => 'post_type',
					2 => 'taxonomy',
				],
				'elements' => [
					0 => 'featured_image',
				],
				'min' => 2,
				'max' => 4,
				'return_format' => 'id',
			],
		],
		'location' => [
			[
				[
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
				],
			],
		],
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => [
			0 => 'custom_fields',
			1 => 'discussion',
			2 => 'comments',
			3 => 'format',
			4 => 'page_attributes',
			5 => 'send-trackbacks',
		],
		'active' => 1,
		'description' => '',
	]);
});
