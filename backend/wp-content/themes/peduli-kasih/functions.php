<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

        
if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_ext1', 'https://fonts.googleapis.com/css?family=Open+Sans:400,700' );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css' );

if ( !function_exists( 'chld_thm_cfg_child_css' ) ):
    function chld_thm_cfg_child_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', get_stylesheet_uri() ); 
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_child_css', 999 );

// END ENQUEUE PARENT ACTION

/* Enable featured image on pages/posts */
add_theme_support( 'post-thumbnails' );

/* Add additional image size */
add_image_size( 'site_logo', 100, 100, true ); //for site logo