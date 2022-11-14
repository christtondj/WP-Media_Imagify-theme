<?php

/**
 * Navigation template
 * 
 * @package Imagify
 */

$menu_class = \IMAGIFY_THEME\Inc\Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id('imagify-header-menu');
$header_menus = wp_get_nav_menu_items($header_menu_id);

?>

<nav>
    <ul class="menu">
        <li class="logo">
            <a href="<?php bloginfo('url'); ?>">
                <?php
                if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                } else 
                { ?>
                    <img src="<?php get_theme_file_uri('assets/images/Logo.png') ?>" alt="<?php bloginfo('name'); ?>">
                <?php }
                ?>
            </a>
        </li>
        <?php

        if (!empty($header_menus) && is_array($header_menus)) {
            foreach ($header_menus as $menu_item) {

                if (!$menu_item->menu_item_parent) {

                    // Retrieve all the child of this menu if exist
                    $child_menu_items = $menu_class->get_child_menu_items($header_menus, $menu_item->ID);
                    $has_children = !empty($child_menu_items) && is_array($child_menu_items);

                    if (!$has_children) {
        ?>

                        <li class="item <?php echo $menu_class->additonal_class(esc_html($menu_item->title)); ?>">
                            <a href="<?php echo esc_url($menu_item->url); ?>">
                                <?php echo esc_html($menu_item->title); ?>
                            </a>
                        </li>

                    <?php    } else {


                    ?>

                        <li class="item has-submenu <?php echo $menu_class->additonal_class(esc_html($menu_item->title)); ?>">
                            <a href="<?php echo esc_url($menu_item->url); ?>" tabindex="0"> <?php echo esc_html($menu_item->title); ?> <i class="fa fa-angle-down"></i></a>
                            <ul class="submenu">
                                <?php

                                foreach ($child_menu_items as $child_item) {
                                ?>

                                    <li class="subitem">
                                        <a href="<?php echo esc_url($child_item->url); ?>">
                                            <?php echo esc_html($child_item->title); ?>
                                        </a>
                                    </li>

                                <?php
                                }
                                ?>

                            </ul>
                        </li>

        <?php }
                }
            }
        }

        ?>
        <li class="item button primary">
            <a href="<?php echo get_theme_mod('nav_actions_account_url', '#'); ?>">
                <?php echo get_theme_mod('nav_actions_account_label', 'User'); ?>
            </a>
        </li>
        <li class="item button secondary">
            <a href="<?php echo get_theme_mod('nav_actions_btn_url', '#'); ?>">
                <?php echo get_theme_mod('nav_actions_btn_label', 'Let Go'); ?>
            </a>
        </li>
        <li class="toggle">
            <a href="#"><i class="fa fa-2x fa-bars"></i></a>
        </li>
    </ul>
</nav>