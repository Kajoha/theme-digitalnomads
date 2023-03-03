<?php
/*
* Template Name: simple detail
*/

/* ESTA ES LA PÁGINA DE ESTILO POR DEFECTO */
get_header(); ?>

<?php if (has_post_thumbnail()) :
    the_post_thumbnail('blog', array('class' => 'banner-page'));
endif; ?>

<main class="content page section on-sidebar">
    <div class="content-primary">
        <?php get_template_part('template-parts/global-page'); ?>

    </div>
    <div class="sidebar-services">
        <h1>Hola aqui voy a poner información sobre precio, region, accesibilidad</h1>
    </div>

</main>

<?php get_footer(); ?>