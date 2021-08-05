<?php
    //Creando el menu
    if(function_exists('register_nav_menus')){
        register_nav_menus (array('superior' => 'Menu principal superior'));
    }
    
    //Clases para los enlances del menu
    add_filter('nav_menu_link_attributes', 'clase_menu_invento', 10, 3);
    function clase_menu_invento($atts, $item, $args){
        $class = 'nav-link';
        $atts['class'] = $class;
        return $atts;
    }
?>