<?php
/**
 * Primary Nav
 * 
 * @author Andrea Musso
 * 
 * @package Foundry
 */

if ( has_nav_menu( 'footermenulegal' ) ) :
    wp_nav_menu([
        'theme_location'    => 'footermenulegal',
        'menu_class'        => 'footer-menu-legal',
        'container'         => 'nav',
        'container_class'   => 'footer-menulegal',
        'depth'             => 1
    ]);
endif;
