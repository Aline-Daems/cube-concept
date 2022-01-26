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

/*
 * LOGO
 */
if (!function_exists('logo_image')) :


function logo_image()
{
    return '<img src="http://localhost:10008/wp-content/themes/Cube Concept Theme/assets/images/logo-orange.png" alt="logo de cube concept" />';
}

endif;

/*
 * HOUSE ICON
 */

if (!function_exists('house_image')) :


    function house_image()
    {
        return '<img src="http://localhost:10008/wp-content/themes/Cube Concept Theme/assets/images/house.png" alt="partie domestique" />';
    }

endif;

/*
 * HOUSE ICON
 */

if (!function_exists('industry_image')) :


    function industry_image()
    {
        return '<img src="http://localhost:10008/wp-content/themes/Cube Concept Theme/assets/images/industry.png" alt="partie industrie" />';
    }

endif;