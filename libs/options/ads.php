<?php
/**
 * Ads page
 *
 * @copyright Copyright (c) 2017, hugw.io
 * @author Hugo W - me@hugw.io
 * @license GPLv2
 */

if( ! function_exists('acf_add_options_page') ) return;
add_action( 'after_setup_theme', function() {

  acf_add_options_sub_page([
    'page_title' 	=> __( 'Ads Settings', 'bloom' ) ,
    'menu_title'	=> __( 'Ads', 'bloom' ) ,
    'parent_slug'	=> 'theme-settings',
    'menu_slug'   => 'theme-settings-ads',
    'autoload'    => true,
  ]);

  $ads = [
    [
      'key' => 'featured',
      'label' => __( 'Featured', 'bloom' )
    ],
    [
      'key' => 'sidebar',
      'label' => __( 'Sidebar', 'bloom' )
    ]
  ];

  foreach( $ads as $ad ) {
    $key = $ad['key'];
    $label = $ad['label'];

    acf_add_local_field_group([
      'key' => "group_ads_{$key}",
      'title' => $label,
      'fields' => [
        [
          'key' => "tab_ads_settings_{$key}",
          'label' => __( 'Settings', 'bloom' ),
          'name' => '',
          'type' => 'tab',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'placement' => 'top',
          'endpoint' => 0,
        ],
        [
          'key' => "subgroup_ads_settings_{$key}",
          'label' => '',
          'name' => "ads_{$key}_settings",
          'type' => 'group',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'layout' => 'row',
          'sub_fields' => [
            [
              'key' => "field_ads_settings_width_{$key}",
              'label' => __( 'Width', 'bloom' ),
              'name' => 'width',
              'type' => 'range',
              'instructions' => '',
              'required' => 1,
              'conditional_logic' => 0,
              'default_value' => 300,
              'min' => '',
              'max' => 1000,
              'step' => 10,
              'prepend' => '',
              'append' => '',
            ],
            [
              'key' => "field_ads_settings_height_{$key}",
              'label' => __( 'Height', 'bloom' ),
              'name' => 'height',
              'type' => 'range',
              'instructions' => '',
              'required' => 1,
              'conditional_logic' => 0,
              'default_value' => 250,
              'min' => '',
              'max' => 1000,
              'step' => 10,
              'prepend' => '',
              'append' => '',
            ],
          ],
        ],
        [
          'key' => "tab_ads_items_{$key}",
          'label' => __( 'Ads', 'bloom' ),
          'name' => '',
          'type' => 'tab',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'placement' => 'top',
          'endpoint' => 0,
        ],
        [
          'key' => "subgroup_ads_items_{$key}",
          'label' => '',
          'name' => "ads_{$key}_items",
          'type' => 'repeater',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'collapsed' => "field_ads_items_name_{$key}",
          'min' => 0,
          'max' => 0,
          'layout' => 'row',
          'button_label' => __( 'Add new', 'bloom' ),
          'sub_fields' => [
            [
              'key' => "field_ads_items_name_{$key}",
              'label' => __( 'Name', 'bloom' ),
              'name' => 'name',
              'type' => 'text',
              'instructions' => '',
              'required' => 1,
              'conditional_logic' => 0,
              'default_value' => '',
              'placeholder' => '',
              'prepend' => '',
              'append' => '',
              'maxlength' => '',
            ],
            [
              'key' => "field_ads_items_status_{$key}",
              'label' => __( 'Status', 'bloom' ),
              'name' => 'status',
              'type' => 'button_group',
              'instructions' => '',
              'required' => 1,
              'conditional_logic' => 0,
              'choices' => [
                'active' => __( 'Active', 'bloom' ),
                'inactive' => __( 'Inactive', 'bloom' ),
              ],
              'allow_null' => 0,
              'default_value' => 'active',
              'layout' => 'horizontal',
              'return_format' => 'value',
            ],
            [
              'key' => "field_ads_items_type_{$key}",
              'label' => __( 'Type', 'bloom' ),
              'name' => 'type',
              'type' => 'button_group',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'choices' => [
                'image' => __( 'Image', 'bloom' ),
                'code' => __( 'Code', 'bloom' ),
                'flash' => __( 'Flash', 'bloom' ),
                'adsense' => __( 'Adsense', 'bloom' ),
              ],
              'allow_null' => 0,
              'default_value' => 'image',
              'layout' => 'horizontal',
              'return_format' => 'value',
            ],
            [
              'key' => "field_ads_items_url_{$key}",
              'label' => __( 'Url', 'bloom' ),
              'name' => 'url',
              'type' => 'text',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => [
                [
                  [
                    'field' => "field_ads_items_type_{$key}",
                    'operator' => '==',
                    'value' => 'image',
                  ],
                ],
              ],
              'default_value' => '',
              'placeholder' => '',
              'prepend' => '',
              'append' => '',
              'maxlength' => '',
            ],
            [
              'key' => "field_ads_items_image_{$key}",
              'label' => __( 'Image', 'bloom' ),
              'name' => 'image',
              'type' => 'image',
              'instructions' => '',
              'required' => 1,
              'conditional_logic' => [
                [
                  [
                    'field' => "field_ads_items_type_{$key}",
                    'operator' => '==',
                    'value' => 'image',
                  ],
                ],
              ],
              'return_format' => 'url',
              'preview_size' => 'full',
              'library' => 'all',
              'min_width' => '',
              'min_height' => '',
              'min_size' => '',
              'max_width' => '',
              'max_height' => '',
              'max_size' => '',
              'mime_types' => '',
            ],
            [
              'key' => "field_ads_items_code_{$key}",
              'label' => __( 'Code', 'bloom' ),
              'name' => 'code',
              'type' => 'textarea',
              'instructions' => '',
              'required' => 1,
              'conditional_logic' => [
                [
                  [
                    'field' => "field_ads_items_type_{$key}",
                    'operator' => '==',
                    'value' => 'code',
                  ],
                ],
              ],
              'default_value' => '',
              'placeholder' => '',
              'maxlength' => '',
              'rows' => '',
              'new_lines' => '',
            ],
            [
              'key' => "field_ads_items_flash_{$key}",
              'label' => __( 'Flash', 'bloom' ),
              'name' => 'flash',
              'type' => 'file',
              'instructions' => '',
              'required' => 1,
              'conditional_logic' => [
                [
                  [
                    'field' => "field_ads_items_type_{$key}",
                    'operator' => '==',
                    'value' => 'flash',
                  ],
                ],
              ],
              'return_format' => 'url',
              'library' => 'all',
              'min_size' => '',
              'max_size' => '',
              'mime_types' => 'swf',
            ],
            [
              'key' => "field_ads_items_slot_id_{$key}",
              'label' => __( 'Slot ID', 'bloom' ),
              'name' => 'slot_id',
              'type' => 'text',
              'instructions' => '',
              'required' => 1,
              'conditional_logic' => [
                [
                  [
                    'field' => "field_ads_items_type_{$key}",
                    'operator' => '==',
                    'value' => 'adsense',
                  ],
                ],
              ],
              'default_value' => '',
              'placeholder' => '',
              'prepend' => '',
              'append' => '',
              'maxlength' => '',
            ],
            [
              'key' => "field_ads_items_client_id_{$key}",
              'label' => __( 'Client ID', 'bloom' ),
              'name' => 'client_id',
              'type' => 'text',
              'instructions' => '',
              'required' => 1,
              'conditional_logic' => [
                [
                  [
                    'field' => "field_ads_items_type_{$key}",
                    'operator' => '==',
                    'value' => 'adsense',
                  ],
                ],
              ],
              'default_value' => '',
              'placeholder' => '',
              'prepend' => '',
              'append' => '',
              'maxlength' => '',
            ],
          ],
        ],
      ],
      'location' => [
        [
          [
            'param' => 'options_page',
            'operator' => '==',
            'value' => 'theme-settings-ads',
          ],
        ],
      ],
      'menu_order' => 0,
      'position' => 'normal',
      'style' => 'default',
      'label_placement' => 'top',
      'instruction_placement' => 'label',
      'hide_on_screen' => '',
      'active' => 1,
      'description' => '',
    ]);
  }
});
