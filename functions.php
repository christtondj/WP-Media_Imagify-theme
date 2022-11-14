<?php

/**
 * Theme function
 * 
 * @package Imagify
 */

/**
 * Add stylesheets and scripts
 */
if (!defined('IMAGIFY_DIR_PATH')) {
    define('IMAGIFY_DIR_PATH', untrailingslashit(get_template_directory()));
}

if (!defined('IMAGIFY_DIR_URI')) {
    define('IMAGIFY_DIR_URI', untrailingslashit(get_template_directory_uri()));
}


require_once IMAGIFY_DIR_PATH . '/inc/helpers/autoloader.php';


function imagify_theme_instance() {
    \IMAGIFY_THEME\Inc\IMAGIFY_THEME::get_instance();
}
imagify_theme_instance();

/**
 * Enqueue styles and script of the theme
 */
function imagify_enqueies() {

}

add_action('wp_enqueue_scripts', 'imagify_enqueies');
