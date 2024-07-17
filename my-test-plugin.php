<?php
/*
Plugin Name: My Test Plugin
Description: This is a Test Plugin !
Author: Yamada Tadaaki
Version: 1.0.0
Author URI: https://github.com/yamtd
*/

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * difinitions
 */
if ( ! defined( 'MY_PLUGIN_VERSION' ) ) {
	define( 'MY_PLUGIN_VERSION', '1.0' );
}
if ( ! defined( 'MY_PLUGIN_PATH' ) ) {
	define( 'MY_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
}
if ( ! defined( 'MY_PLUGIN_URL' ) ) {
	define( 'MY_PLUGIN_URL', plugins_url( '/', __FILE__ ) );
}

/**
 * Enqueue scripts and styles
 */
add_action( 'wp_enqueue_scripts', function() {

	/** JS */
	wp_enqueue_script(
		'my-test-script',
		MY_PLUGIN_URL.'assets/my_script.js',
		array(),
		MY_PLUGIN_VERSION,
		array('strategy' => 'defer', 'in_footer' => false)
	);

	/** CSS */
	wp_enqueue_style(
		'my-test-style',
		MY_PLUGIN_URL.'assets/my_style.css',
		array(),
		MY_PLUGIN_VERSION
	);
});
