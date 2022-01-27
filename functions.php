<?php  

    // Estilos
    function theme_scripts() {
        wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');
        wp_enqueue_style('style', get_stylesheet_uri());
    }
    add_action('wp_enqueue_scripts', 'theme_scripts');

    add_theme_support('post-thumbnails');

    add_image_size('destacada', 1100, 418, true);

    // Menus
    register_nav_menus(
        array(
            'menu_principal' => __( 'Menu Principal', 'TorontoWP' )
        )
    );

    // Ocultar barra menu de WordPress
    add_filter('show_admin_bar', '__return_false');

?>