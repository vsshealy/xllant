<?php 
    /**
     * php/menus/menu-footer-primary.php
     * @package xllant
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 2023
    **/
?>

<?php 
    wp_nav_menu(
        array(
            'theme_location' => 'menu-6',
            'menu_id' => 'Footer-Primary'
        )
    );
?>