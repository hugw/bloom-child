<?php
/**
 * Theme settings
 *
 * @copyright Copyright (c) 2017, hugw.io
 * @author Hugo W - me@hugw.io
 * @license GPLv2
 */

if( ! function_exists('acf_add_options_page') ) return;

add_action( 'after_setup_theme', function() {

  acf_add_options_page([
		'page_title' 	=> __( 'Theme Settings', 'bloom' ) ,
		'menu_title'	=> __( 'Theme Settings', 'bloom' ) ,
		'menu_slug' 	=> 'theme-settings',
		'capability'	=> 'edit_posts',
    'redirect'		=> true,
    'autoload'    => true,
  ]);
});
