<?php

/*
Plugin Name: Advanced Custom Fields: Icon Font
Plugin URI: PLUGIN_URL
Description: An font icon selector field that lets you preview a font icon.
Version: 1.0.0
Author: Kreshnik Hasanaj
Author URI: https://www.github.com/Kreshnik
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/




// 1. set text domain
// Reference: https://codex.wordpress.org/Function_Reference/load_plugin_textdomain
load_plugin_textdomain( 'acf-icon_font', false, dirname( plugin_basename(__FILE__) ) . '/lang/' );




// 2. Include field type for ACF5
// $version = 5 and can be ignored until ACF6 exists
function include_field_types_icon_font( $version ) {

	include_once('acf-icon_font-v5.php');

}

add_action('acf/include_field_types', 'include_field_types_icon_font');




// 3. Include field type for ACF4
function register_fields_icon_font() {

	include_once('acf-icon_font-v4.php');

}

add_action('acf/register_fields', 'register_fields_icon_font');




?>