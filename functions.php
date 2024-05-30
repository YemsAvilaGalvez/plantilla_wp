<?php 

function cargar_estilos_y_scripts() {
    // Ruta del directorio del tema
    $theme_dir = get_template_directory_uri();

    // Enqueue styles
    wp_enqueue_style('bootstrap', $theme_dir . '/include/assets/css/bootstrap.min.css', array(), '1.0');
    wp_enqueue_style('icons', $theme_dir . '/include/assets/css/icons.min.css', array(), '1.0');
    wp_enqueue_style('theme', $theme_dir . '/include/assets/css/theme.min.css', array(), '1.0');

    // Enqueue scripts
    wp_enqueue_script('jquery', $theme_dir . '/include/assets/js/jquery.min.js', array(), '3.6.0', true);
    wp_enqueue_script('bootstrap-bundle', $theme_dir . '/include/assets/js/bootstrap.bundle.min.js', array('jquery'), '5.4.0', true);
    wp_enqueue_script('metismenu', $theme_dir . '/include/assets/js/metismenu.min.js', array(), '3.0.0', true);
    wp_enqueue_script('waves', $theme_dir . '/include/assets/js/waves.js', array(), '1.0', true);
    wp_enqueue_script('simplebar', $theme_dir . '/include/assets/js/simplebar.min.js', array(), '5.3.0', true);
    wp_enqueue_script('theme', $theme_dir . '/include/assets/js/theme.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'cargar_estilos_y_scripts');


