<?php

// Cuando el tema es activado

function digitalnomads_setup()
{

    // habilitar imagenes destacadas
    add_theme_support('post-thumbnails');

    // agregar imagenes de tamños personalizados
    // add_image_size('banner', 2000, 300, true);
}
add_action('after_setup_theme', 'digitalnomads_setup');

// menu de navegación

function digitalnomads_menu()
{
    register_nav_menus(array(
        'menu-primary' => __('Menu Principa', 'digitalnomads')
    ));
}

add_action('init', 'digitalnomads_menu');

// cargar libreria y hojas de estilos

function digitalnomads_scripts_styles()
{

    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');

    wp_enqueue_style('slicknavCSS', get_template_directory_uri() . '/css/slicknav.min.css', array(), '1.0.0');

    wp_enqueue_style('googleFont', 'https://fonts.googleapis.com/css2?family=Roboto&family=Rubik:ital,wght@0,300;0,400;0,600;0,700;1,300&display=swap', array(), '1.0.0');

    //hoja de estilo principal
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googleFont'), '1.0.0');

    wp_enqueue_script('slicknavJS', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '1.0.0', true);

    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery', 'slicknavJS'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'digitalnomads_scripts_styles');