<?php
if ( ! function_exists( 'concept_scripts') ) :
    /**
     * Enqueues stylesheets
     **/
    function concept_scripts(){
        wp_enqueue_style( 'concept_styles', get_stylesheet_uri(), array(), null );

    }

add_action( 'wp_enqueue_scripts', 'concept_scripts' );
endif;
if (!function_exists('register_my_menu')) :
    /**
     * Main Menu
     */

    function register_my_menu(){
        register_nav_menu( 'main-menu', 'Menu principal' );
    }
    add_action( 'after_setup_theme', 'register_my_menu' );

endif;