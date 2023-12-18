<?php

require_once('classes/class-fluidpress-menu-walker.php');

/**
 * Register Menu.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_nav_menus#Examples
 * @package FluidPress
 * @since FluidPress 1.0.0
 */

register_nav_menus(
    array(
        'header_menu'  => esc_html__('Header Menu', 'ah-wordpress-boilerplate'),
        'footer_menu_1'  => esc_html__('Footer Menu 1', 'ah-wordpress-boilerplate'),
        'footer_menu_2'  => esc_html__('Footer Menu 2', 'ah-wordpress-boilerplate'),
        'footer_menu_3'  => esc_html__('Footer Menu 3', 'ah-wordpress-boilerplate')
    )
);

/**
 * Menu.
 *
 * @link http://codex.wordpress.org/Function_Reference/wp_nav_menu
 */

function wp_boilerplate_header_menu()
{
    wp_nav_menu(
        array(
            'container'      => false,
            'menu_class'     => 'menu',
            'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'theme_location' => 'header_menu',
            'depth'          => 2,
            'fallback_cb'    => false,
            'walker'         => new Wp_Boilerplate_Header_Menu_Walker(),
        )
    );
}

function wp_boilerplate_footer_menu_1()
{
    wp_nav_menu(
        array(
            'container'      => false,
            'menu_class'     => 'footer__menu',
            'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'theme_location' => 'footer_menu_1',
            'depth'          => 1,
            'fallback_cb'    => false,
            'walker'         => new Wp_Boilerplate_Footer_Menu_Walker(),
        )
    );
}

function wp_boilerplate_footer_menu_2()
{
    wp_nav_menu(
        array(
            'container'      => false,
            'menu_class'     => 'footer__menu',
            'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'theme_location' => 'footer_menu_2',
            'depth'          => 1,
            'fallback_cb'    => false,
            'walker'         => new Wp_Boilerplate_Footer_Menu_Walker(),
        )
    );
}

function wp_boilerplate_footer_menu_3()
{
    wp_nav_menu(
        array(
            'container'      => false,
            'menu_class'     => 'footer__menu',
            'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'theme_location' => 'footer_menu_3',
            'depth'          => 1,
            'fallback_cb'    => false,
            'walker'         => new Wp_Boilerplate_Footer_Menu_Walker(),
        )
    );
}