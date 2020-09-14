<?php
/**
* Plugin Name: Gravity Forms Webhook Custom Data Types
* Plugin URI: https://google.com
* Description: Allows Gravity Webhooks to send data as json and int. To send as JSON, append '_as_json' in the field name and use JSON syntax with SINGLE QUOTES in the field value. To send as int, append '_as_int' in the field name. The '_as_x' suffix will be removed in the final output.
* Version: 0.0.1
* Author: Martin Cao
* Author URI: https://google.com
*/

// Check for wordpress environment
defined ( 'ABSPATH' ) or die;

// Check for Gravity Forms Webhook addon
if ( !class_exists( "GF_Webhooks_Bootstrap" ) ) {
    return;
}

// Require plugin class
require_once( plugin_dir_path( __FILE__ ) . "GravityformWebhookDatatypesPlugin.php" );

// Initialise plugin class
if ( class_exists( 'GravityformWebhookDatatypesPlugin' ) ) {
    $gravityform_webook_datatypes_plugin = new GravityformWebhookDatatypesPlugin();
    $gravityform_webook_datatypes_plugin->init();
}