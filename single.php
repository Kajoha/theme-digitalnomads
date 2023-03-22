<?php
/*
* Template Name: simple detail
*/

/* ESTA ES LA PÁGINA DE ESTILO POR DEFECTO DE LAS ENTRADAS DE TOURS / TRANSPORTATIONS Y TODOS LOS SERVICIOS  TAMBIEN ESTA POR DEFECTO EN LAS ENTRADAS DEL BLOG*/
get_header(); ?>

<?php if (has_post_thumbnail()) :
    the_post_thumbnail('blog', array('class' => 'banner-page'));
endif; ?>

<main class="content page section on-sidebar">
    <div class="content-primary content_noSidebar">
        <?php get_template_part('template-parts/global-page'); ?>
    </div>
    <div class="pre-sidebar">
        <div class="form-sidebar">
            <!--  Aqui va el formulario de contacto de un cliente en especifico -->
            <h3><?php the_field('name_form'); ?></h3>
            <div><?php the_field('content_form'); ?></div>
        </div>
        <div class="sidebar sidebar-services">
            <?php get_sidebar('sidebar_blog');
            /* este llama por defaul la pagina de sidebar.php pero si quiero que llame a otra es ('servicios') */ ?>
        </div>
    </div>

</main>

<?php get_footer(); ?>