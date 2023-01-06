<?php

/** Consultas reutilizables */

require get_template_directory() . '/inc/queries.php';
require get_template_directory() . '/inc/shortcodes.php';

// Cuando el tema es activado

function digitalnomads_setup()
{
    // habilitar imagenes destacadas
    add_theme_support('post-thumbnails');

    // Titulos SEO
    add_theme_support('title-tag');

    // agregar imagenes de tamños personalizados
    add_image_size('square', 350, 350, true);
    add_image_size('portrait', 350, 724, true);
    add_image_size('cajas', 400, 375, true);
    add_image_size('medium', 700, 400, true);
    add_image_size('blog-setup', 966, 644, true);
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
    // wp_enqueue_style('slicknavCSS', get_template_directory_uri() . '/css/slicknav.min.css', array(), '1.0.0');
    wp_enqueue_style('googleFont', 'https://fonts.googleapis.com/css2?family=Roboto&family=Rubik:ital,wght@0,300;0,400;0,600;0,700;1,300&display=swap', array(), '1.0.0');


    if (is_page('galleria')) : //sirve para identificar en que pagina quiero que se muestre la galeria
        wp_enqueue_style('lightboxCSS', get_template_directory_uri() . '/css/lightbox.min.css', array(), '2.11.2');
    endif;

    if (is_page('services')) : //sirve para identificar en que pagina quiero que se muestre la galeria
        wp_enqueue_style('leaftletCSS', 'https://unpkg.com/leaflet@1.9.3/dist/leaflet.css', array(), '1.9.3');
    endif;

    //hoja de estilo principal
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googleFont'), '1.0.0');
    wp_enqueue_script('slicknavJS', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery', 'slicknavJS'), '1.0.0', true);

    if (is_page('galleria')) :
        wp_enqueue_script('lightboxJS', get_template_directory_uri() . '/js/lightbox.min.js', array('jquery', 'slicknavJS'), '2.11.2', true);
    endif;

    if (is_page('services')) :
        wp_enqueue_script('leaftletJS', 'https://unpkg.com/leaflet@1.9.3/dist/leaflet.js', array(), '1.9.3', true);
    endif;
}

add_action('wp_enqueue_scripts', 'digitalnomads_scripts_styles');


//Definir zonas de Widgets

function digitalnomads_widgets()
{
    register_sidebar(array(
        'name' => 'Sidebar blog',
        'id' => 'sidebar_blog',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

add_action('widgets_init', 'digitalnomads_widgets');

// Imagen Hero

function digitalnomads_hero_img()
{   // para optener el id de la página principal
    $front_page_id = get_option('page_on_front');
    // obtener el id de la imagen
    $id_img = get_field('img_hero', $front_page_id);
    // obtener la imagen
    $img = wp_get_attachment_image_src($id_img, 'full')[0];

    //Estilos
    wp_register_style('custom', false);
    wp_enqueue_style('custom');

    $img_home_css = "
        body.home .site-header {
            background-image: linear-gradient( rgba(0,0,0,0.75), rgba(0,0,0,0.75)), url($img);
        }
    ";
    wp_add_inline_style('custom', $img_home_css);
}
add_action('init', 'digitalnomads_hero_img');