<?php
//registrando menú
function register_my_menus()
{
  register_nav_menus(
    //creando menú
    array(
      'menu_izquierdo' => __('Menu Principal Izquierdo')
    )
  );
}
add_action('init', 'register_my_menus');

//agregamos estilos a la etiqueta <a></a>
add_filter('nav_menu_link_attributes', 'clases_menu', 10, 3);

function clases_menu($atts, $item, $args){
    $class = 'waves-effect';
    $atts['class'] = $class;
    return $atts;
}
