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
 * Industry ICON
 */

if (!function_exists('industry_image')) :


    function industry_image()
    {
        return '<img src="http://localhost:10008/wp-content/themes/Cube Concept Theme/assets/images/industry.png" alt="partie industrie" />';
    }

endif;


/*
 * Braintech ICON
 */

if (!function_exists('braintech_image')) :


    function braintech_image()
    {
        return '<img src="http://localhost:10008/wp-content/themes/Cube Concept Theme/assets/images/braintech-white.png" alt="braintech logo" />';
    }

endif;


/*
 * Démolition services
 */

if (!function_exists('demolition_image')) :


    function demolition_image()
    {
        return '<img src="http://localhost:10008/wp-content/themes/Cube Concept Theme/assets/images/demolition.jpeg" alt="démolition et evacuation" />';
    }

endif;


/*
 * Nettoyage services
 */

if (!function_exists('nettoyage_image')) :


    function nettoyage_image()
    {
        return '<img src="http://localhost:10008/wp-content/themes/Cube Concept Theme/assets/images/nettoyage.jpeg" alt="nettoyage" />';
    }

endif;

/*
 * Plafonnage services
 */

if (!function_exists('plafonnage_image')) :


    function plafonnage_image()
    {
        return '<img src="http://localhost:10008/wp-content/themes/Cube Concept Theme/assets/images/plafonnage.jpeg" alt="Plafonnage" />';
    }

endif;

/*
 * Carrelage services
 */

if (!function_exists('carrelage_image')) :


    function carrelage_image()
    {
        return '<img src="http://localhost:10008/wp-content/themes/Cube Concept Theme/assets/images/carrelage.jpeg" alt="Carrelage" />';
    }

endif;


/*
 * parachevement services
 */

if (!function_exists('parachevement_image')) :


    function parachevement_image()
    {
        return '<img src="http://localhost:10008/wp-content/themes/Cube Concept Theme/assets/images/parachevement.jpg" alt="Parachevement" />';
    }

endif;

/*
 * Cloisons services
 */

if (!function_exists('cloisons_image')) :


    function cloisons_image()
    {
        return '<img src="http://localhost:10008/wp-content/themes/Cube Concept Theme/assets/images/cloisons.jpeg" alt="Cloisons et plafonds" />';
    }

endif;

/*
 * Isolation services
 */

if (!function_exists('isolation_image')) :


    function isolation_image()
    {
        return '<img src="http://localhost:10008/wp-content/themes/Cube Concept Theme/assets/images/isolation.jpeg" alt="Isolation" />';
    }

endif;

/*
 * Elec services
 */

if (!function_exists('elec_image')) :


    function elec_image()
    {
        return '<img src="http://localhost:10008/wp-content/themes/Cube Concept Theme/assets/images/electrician.jpg" alt="Electricié et éclairage" />';
    }

endif;

/*
 * Domotique services
 */

if (!function_exists('domotique_image')) :


    function domotique_image()
    {
        return '<img src="http://localhost:10008/wp-content/themes/Cube Concept Theme/assets/images/domotique.jpeg" alt="Domotique" />';
    }

endif;

/*
 * pvc services
 */

if (!function_exists('pvc_image')) :


    function pvc_image()
    {
        return '<img src="http://localhost:10008/wp-content/themes/Cube Concept Theme/assets/images/pvc.jpeg" alt="Pose de châssis pvc et alu" />';
    }

endif;