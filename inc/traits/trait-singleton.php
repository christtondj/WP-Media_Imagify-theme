<?php

/**
 * 
 * @package Imagify
 */

namespace IMAGIFY_THEME\Inc\traits;

trait Singleton
{

    public function __construct()
    {
    }

    public function __clone()
    {
    }

    final public static function get_instance()
    {
        static $instance = [];

        $called_class = get_called_class();

        if (@!isset($instance[$instance])) {
            $instance[$called_class] = new $called_class();

            do_action(sprintf('imagify_theme_singleton_init%s', $called_class));
        }

        return $instance[$called_class];
    }

    
}
