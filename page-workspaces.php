<?php
/*

*Template Name: Template Digital Nomads - workspaces
Plugin URI:
Description: Add Widgets
Version: 1.0.0
Author: Karen Méndez
Author URI: https://kajoha.github.io/karen-mendez/
Text Domain:  digitalnomads

*/

get_header(); ?>

<?php if (has_post_thumbnail()) :
    the_post_thumbnail('blog', array('class' => 'banner-page'));
endif; ?>
<div class="submenu-banner">
    <div class="content title submenu">
        <h1 class="text-center text-primary"><?php the_title(); ?></h1>
    </div>
</div>
<div class="submenu-banner-ul">
    <div class="content title submenu">
        <ul class="submenu-content">
            <li class="submenu-items"><a href="#coworking">Coworking</a></li>
            <li class="submenu-items"><a href="#meeting-spaces">Meeting Spaces</a></li>
            <li class="submenu-items"><a href="#resources">Resources</a></li>
        </ul>
    </div>
</div>
<main class="content page section ">
    <section id="coworking" class="section-content">
        <!--ESPACIO PARA CREAR SECCIONES DEL SUBMENU-->
        <!--IMPORTANTE -DESCUBRIR COMO ETIQUETAR EL CONTENIDO DE SERVICES- -->
        <div class="section-items">
            <h2>Coworking</h2>

        </div>
        <div class="section-list">
            <h3 class="section-list-title">Coworking list</h3>

        </div>


    </section>

    <section id="meeting-spaces" class="section-content">
        <!--ESPACIO PARA CREAR SECCIONES DEL SUBMENU-->
        <!--IMPORTANTE -DESCUBRIR COMO ETIQUETAR EL CONTENIDO DE SERVICES- -->
        <div class="section-items">
            <h2>Meeting Spaces</h2>

        </div>
        <div class="section-list">
            <h3 class="section-list-title">Meeting Spaces list</h3>

        </div>


    </section>

    <section id="resources" class="section-content">
        <!--ESPACIO PARA CREAR SECCIONES DEL SUBMENU-->
        <!--IMPORTANTE -DESCUBRIR COMO ETIQUETAR EL CONTENIDO DE SERVICES- -->
        <div class="section-items">
            <h2>Resources</h2>

        </div>
        <div class="section-list">
            <h3 class="section-list-title">Resources list</h3>

        </div>


    </section>
</main>

<!--Aqui se imprime el formulario de contacto-->
<section id="contanct" class="contact-wrapper">
    <div class="contact-manchas">
        <div class="content page section">
            <div class="form-flex">
                <div class="form-text">
                    <h2><?php the_field('title_contact'); ?></h2>
                    <p><?php the_field('content_contact'); ?></p>
                </div>
                <?php the_field('form-text'); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>