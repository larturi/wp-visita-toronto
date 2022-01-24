<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" >
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <div id="page">

        <header id="masthead" class="site-header" role="banner">
            <div class="container">
                <h1 class="site-title">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="">
                    </a>
                </h1>
            </div>
        </header>

        <div class="container" id="contenido">
