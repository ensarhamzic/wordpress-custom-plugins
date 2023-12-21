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

			// Field 1 - Slider Page Number 1
			$wp_customize->add_setting(
				'set_slider_page1', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_slider_page1', array(
					'label'			=> 'Set slider page 1',
					'description'	=> 'Set slider page 1',
					'section'		=> 'sec_slider',
					'type'			=> 'dropdown-pages'
				)
			);			

			// Field 2 - Slider Button Text Number 1
			$wp_customize->add_setting(
				'set_slider_button_text1', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_text1', array(
					'label'			=> 'Button Text for Page 1',
					'description'	=> 'Button Text for Page 1',
					'section'		=> 'sec_slider',
					'type'			=> 'text'
				)
			);

			// Field 3 - Slider Button URL Number 1
			$wp_customize->add_setting(
				'set_slider_button_url1', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'esc_url_raw'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_url1', array(
					'label'			=> 'URL for Page 1',
					'description'	=> 'URL for Page 1',
					'section'		=> 'sec_slider',
					'type'			=> 'url'
				)
			);	

			/*---------------------------------------*/

			// Field 4 - Slider Page Number 2
			$wp_customize->add_setting(
				'set_slider_page2', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_slider_page2', array(
					'label'			=> 'Set slider page 2',
					'description'	=> 'Set slider page 2',
					'section'		=> 'sec_slider',
					'type'			=> 'dropdown-pages'
				)
			);			

			// Field 5 - Slider Button Text Number 2
			$wp_customize->add_setting(
				'set_slider_button_text2', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_text2', array(
					'label'			=> 'Button Text for Page 2',
					'description'	=> 'Button Text for Page 2',
					'section'		=> 'sec_slider',
					'type'			=> 'text'
				)
			);

			// Field 6 - Slider Button URL Number 2
			$wp_customize->add_setting(
				'set_slider_button_url2', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'esc_url_raw'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_url2', array(
					'label'			=> 'URL for Page 2',
					'description'	=> 'URL for Page 2',
					'section'		=> 'sec_slider',
					'type'			=> 'url'
				)
			);			

			/*---------------------------------------*/

			// Field 7 - Slider Page Number 3
			$wp_customize->add_setting(
				'set_slider_page3', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_slider_page3', array(
					'label'			=> 'Set slider page 3',
					'description'	=> 'Set slider page 3',
					'section'		=> 'sec_slider',
					'type'			=> 'dropdown-pages'
				)
			);			

			// Field 8 - Slider Button Text Number 3
			$wp_customize->add_setting(
				'set_slider_button_text3', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_text3', array(
					'label'			=> 'Button Text for Page 3',
					'description'	=> 'Button Text for Page 3',
					'section'		=> 'sec_slider',
					'type'			=> 'text'
				)
			);

			// Field 9 - Slider Button URL Number 3
			$wp_customize->add_setting(
				'set_slider_button_url3', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'esc_url_raw'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_url3', array(
					'label'			=> 'URL for Page 3',
					'description'	=> 'URL for Page 3',
					'section'		=> 'sec_slider',
					'type'			=> 'url'
				)
			);
    }

    add_action( 'customize_register', 'beautislide_customizer' );



 ?>