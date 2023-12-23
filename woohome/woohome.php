<?php
/**
 * Plugin Name: Woohome
 * Plugin URI: https://woohome.com/
 * Description: Very beautiful slider for your website.
 * Version: 1.0.0
 * Author: Ensar Hamzic
 * Author URI: https://ensarhamzic.com
 * Text Domain: ensarhamzic
 * Requires at least: 6.3
 * Requires PHP: 7.4
 *
 * @package Woohome
 */

  if (!function_exists('add_action')) {
    echo 'Hi there! I\'m just a plugin, not much I can do when called directly.';
    exit;
}

function woohome_scripts() {
  $plugin_directory_url = plugin_dir_url( __FILE__ );
  wp_enqueue_style('woohome-styles', $plugin_directory_url . '/inc/style.css', array(), '', 'all');
}

add_action( 'wp_enqueue_scripts', 'woohome_scripts' );