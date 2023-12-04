<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'font-awesome','simple-line-icons','oceanwp-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION - BACKUP - FUNCTIONS.PHP



// --- --- CPT --- CUSTOM POST TYPE - VIAJES --- // cpt_viajes.php // --- --- --- //
include 'wp-content/themes/Ocean WP Child/cpt_viajes.php';

// --- --- ACF --- CUSTOM FIELDS - DESPLEGABLES --- // acf_desplegables.php // --- --- --- //
include 'wp-content/themes/Ocean WP Child/acf_desplegables.php';

// --- --- ACF --- CUSTOM FIELDS - CREACIÖN MÜLTIPLE --- // acf_proogramas.php // --- --- --- //
include 'wp-content/themes/Ocean WP Child/acf_programas.php';



// --- --- --- --- // ROLES DE USUARIO

//     // Cambiar el nombre del rol "Suscriptor" a "Cliente"
//     // Cambiar el nombre del rol "Author" a "Agencia"

include 'wp-content/themes/Ocean WP Child/rolesDeUsuarios.php';