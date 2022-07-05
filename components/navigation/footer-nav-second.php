<?php
/**
 * Primary Nav
 * 
 * @author Andrea Musso
 * 
 * @package Foundry
 */

if ( has_nav_menu( 'footermenusecond' ) ) :
    wp_nav_menu([
        'theme_location'    => 'footermenusecond',
        'menu_class'        => 'footer-menu-second',
        'container'         => 'nav',
        'container_class'   => 'footer-menusecond',
        'depth'             => 1
    ]);
endif;
