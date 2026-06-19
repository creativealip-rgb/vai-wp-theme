<?php
/**
 * ACF Setup
 *
 * - JSON save/load point ke theme/acf-json/ (version-controlled field groups)
 * - Register all field groups via PHP (priority over JSON)
 * - Hide ACF admin menu kalau user bukan admin (saving server resources)
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/* ------------------------------------------------------------------ */
/* 1. JSON save/load point — /theme/acf-json/                          */
/* ------------------------------------------------------------------ */
add_filter( 'acf/settings/save_json', function( $path ) {
    return get_stylesheet_directory() . '/acf-json';
});
add_filter( 'acf/settings/load_json', function( $paths ) {
    unset( $paths[0] );
    $paths[] = get_stylesheet_directory() . '/acf-json';
    return $paths;
});

/* ------------------------------------------------------------------ */
/* 2. Hide ACF admin dari non-admins                                  */
/* ------------------------------------------------------------------ */
add_filter( 'acf/settings/show_admin', function( $show ) {
    return current_user_can( 'manage_options' );
});

/* ------------------------------------------------------------------ */
/* 3. Auto-load semua field group definitions                         */
/* ------------------------------------------------------------------ */
require_once get_stylesheet_directory() . '/inc/acf-fields.php';
