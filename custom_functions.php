<?php
/**
 * Bonn Starter Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package BonnJoel
 */

require_once( get_template_directory() . '/inc/libs/class-tgm-plugin-activation.php' );
include( get_template_directory() . '/inc/register-plugins.php' );

add_action( 'tgmpa_register', 'bonnjoel_register_required_plugins' );


function bonnjoel_addmore_scripts() {
	/*
	 * Enqueue custom scripts and styles
	 */

	if (!is_admin()) {
		wp_deregister_script('jquery');
		wp_register_script('jquery', '//code.jquery.com/jquery-3.1.1.min.js', false, '3.1.1');
		wp_enqueue_script('jquery');
	}

	wp_enqueue_style( 'bonnjoel_opensans', '//fonts.googleapis.com/css?family=Open+Sans' );
	wp_enqueue_style( 'bonnjoel_semantic-css', get_template_directory_uri() . '/assets/semantic/semantic.min.css' );
	wp_enqueue_style( 'bonnjoel_mmenu-css', get_template_directory_uri() . '/css/mmenu.css' );
	wp_enqueue_style( 'bonnjoel_lightbox-css', get_template_directory_uri() . '/css/lightbox.css' );
	wp_enqueue_style( 'bonnjoel-style', get_stylesheet_uri() );
	wp_register_style( 'bonnjoel_jsscocials_style', '//cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.css' );
	wp_register_style( 'bonnjoel_jsscocials_style_flat', '//cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-flat.css' );

	wp_register_script( 'bonnjoel_mmenu-js', get_template_directory_uri() . '/js/mmenu.min.js', array('jquery'), 'v5.6.5', true );
	wp_register_script( 'bonnjoel_lightbox-js', get_template_directory_uri() . '/js/lightbox.js', 'jquery', 'v2.8.2', true );
	wp_register_script( 'bonnjoel_fastclick', get_template_directory_uri() . '/js/fastclick.js', '', '1.0.6' );
	wp_register_script( 'bonnjoel_jssocials', '//cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.min.js', array('jquery'), '1.4.0', false );

	wp_enqueue_script( 'bonnjoel_semantic-js', get_template_directory_uri() . '/assets/semantic/semantic.min.js', array('jquery'), '2.2.10', true );

	wp_enqueue_script( 'bonnjoel_fastclick' );
	wp_enqueue_script( 'bonnjoel_mmenu-js' );
	wp_enqueue_script( 'bonnjoel_tether', '//cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js', array('jquery'), '1.4.0', true );
	wp_enqueue_script( 'bonnjoel_theme-js', get_template_directory_uri() . '/js/theme.js', array('jquery','bonnjoel_mmenu-js', 'bonnjoel_semantic-js'), false, true );

}

add_action( 'wp_enqueue_scripts', 'bonnjoel_addmore_scripts' );
