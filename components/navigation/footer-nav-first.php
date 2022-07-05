<?php
/**
 * Primary Nav
 * 
 * @author Andrea Musso
 * 
 * @package Foundry
 */

if ( has_nav_menu( 'footermenufirst' ) ) :
    wp_nav_menu([
        'theme_location'    => 'footermenufirst',
        'menu_class'        => 'footer-menu-first',
        'container'         => 'nav',
        'container_class'   => 'footer-menufirst',
        'depth'             => 1
    ]);
endif;
