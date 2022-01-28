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

    // Widgets
    function theme_widgets() {
        register_sidebar( array(
            'name' => __('Sidebar Testimoniales'),
            'id' => 'sidebar-testimoniales',
            'description' => __('Widgets para testimoniales'),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        ));
    }
    add_action('widgets_init', 'theme_widgets');

    // Ocultar barra menu de WordPress
    add_filter('show_admin_bar', '__return_false');

?>