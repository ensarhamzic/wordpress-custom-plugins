<?php
/**
 * Plugin Name: Beautislide
 * Plugin URI: https://beautislide.com/
 * Description: Very beautiful slider for your website.
 * Version: 1.0.0
 * Author: Ensar Hamzic
 * Author URI: https://ensarhamzic.com
 * Text Domain: ensarhamzic
 * Requires at least: 6.3
 * Requires PHP: 7.4
 *
 * @package Beautislide
 */

 if (!function_exists('add_action')) {
    echo 'Hi there! I\'m just a plugin, not much I can do when called directly.';
    exit;
}

function beautislide_scripts() {

  $plugin_directory_url = plugin_dir_url( __FILE__ );
   	// Flexslider Javascript and CSS files
	wp_enqueue_script( 'flexslider-min-js', $plugin_directory_url . '/inc/flexslider/jquery.flexslider-min.js', array( 'jquery' ), '', true );
	wp_enqueue_style( 'flexslider-css', $plugin_directory_url . '/inc/flexslider/flexslider.css', array(), '', 'all' );
	wp_enqueue_script( 'flexslider-js', $plugin_directory_url . '/inc/flexslider/flexslider.js', array( 'jquery' ), '', true );

  wp_enqueue_style('flexslider-custom-css', $plugin_directory_url . '/inc/style.css', array(), '', 'all');
}

add_action( 'wp_enqueue_scripts', 'beautislide_scripts' );

 	/*--------------------------------------------------------------------------------*/
	// Slider Section

  function beautislide_customizer( $wp_customize ){
	$wp_customize->add_section(
		'sec_slider', array(
			'title'			=> 'Slider Settings',
			'description'	=> 'Slider Section'
		)
	);	


 ?>