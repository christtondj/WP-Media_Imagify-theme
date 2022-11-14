<?php

/**
 * All assets management
 * 
 * @package Imagify
 */

namespace IMAGIFY_THEME\Inc;

use IMAGIFY_THEME\Inc\traits\Singleton;

class Assets
{

    use Singleton;

    protected function __construct()
    {
        $this->set_hooks();
    }

    protected function set_hooks()
    {
        /**
         * Actions
         */
        // Register and Enqueue Styles
        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        // Register and Enqueue Scripts
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
    }

    public function register_styles()
    {
        // Register Styles
        wp_register_style('custom-stylesheet', IMAGIFY_DIR_URI . '/assets/src/library/css/style.css', [], filemtime(IMAGIFY_DIR_PATH . '/assets/src/library/css/style.css'), 'all');
        wp_register_style('fontawesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', [], false, 'all');
        // Enqueue styles
        wp_enqueue_style('fontawesome-css');
        wp_enqueue_style('custom-stylesheet');
    }

    public function register_scripts()
    {
        // Register scripts
        wp_register_script('custom-js', IMAGIFY_DIR_URI . '/assets/src/library/js/script.js', ['jquery'], false, 'all');
        wp_register_script('main-js', IMAGIFY_DIR_PATH . '/assets/js/main.js', [], filemtime(IMAGIFY_DIR_PATH . '/assets/js/main.js'), true);

        // Enqueue Scripts
        wp_enqueue_script('custom-js');
        wp_enqueue_script('main-js');
    }
}
