<?php
/*
Plugin Name: RestfulAPI
Description:
Version: 0.2
Author: Brandon
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
include_once plugin_dir_path(__FILE__) . 'includes/wc-api-resource.php';
include_once plugin_dir_path(__FILE__) . 'includes/wc-api-server.php';
include_once plugin_dir_path(__FILE__) . 'includes/wc-api-products.php';
include_once plugin_dir_path(__FILE__) . 'includes/interface-wc-api-handler.php';

include_once plugin_dir_path(__FILE__) . 'includes/wc-api-json-handler.php';
include_once plugin_dir_path(__FILE__) . 'includes/wc-api-products.php';




add_action('init','on_init');
function on_init() {
	$path = "";
	$server = new WC_API_Server( $path );
	$p = new WC_API_Products( $server );
	$x = $p->get_product(56);
	print_r( $x );
}

//error_log( 'This is a debug message from my plugin' );
