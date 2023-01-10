<?php 
    /**
     * functions.php
     * @package xllant
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 2023
    **/
?>

<?php 

    // REGISTER MENUS
        $hook_result = apply_filters_deprecated('elementor_hello_theme_register_menus', [true], '2.0', 'hello_elementor_register_menus');

        if (apply_filters('hello_elementor_register_menus', $hook_result)) {
            register_nav_menus(['menu-3' => __('Header-Primary', 'xllant')]);
            register_nav_menus(['menu-4' => __('Header-Secondary', 'xllant')]);
            register_nav_menus(['menu-5' => __('Header-Mobile', 'xllant')]);
            register_nav_menus(['menu-6' => __('Footer-Primary', 'xllant')]);
            register_nav_menus(['menu-7' => __('Footer-Secondary', 'xllant')]);
            register_nav_menus(['menu-8' => __('Footer-Mobile', 'xllant')]);
        }
    
    // REMOVE WP_HEAD
        remove_action('wp_head', '_wp_render_title_tag', 1);
?>