<?php
/*

*Template Name: Template Digital Nomads - services
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
            <li class="submenu-items"><a href="#tours">Tours</a></li>
            <li class="submenu-items"><a href="#legal">Legal</a></li>
            <li class="submenu-items"><a href="#health">Health</a></li>
            <li class="submenu-items"><a href="#education">Education</a></li>
            <li class="submenu-items"><a href="#other">Other</a></li>
        </ul>
    </div>
</div>
<main class="content page section ">
    <section id="tours" class="section-content">
        <!--ESPACIO PARA CREAR SECCIONES DEL SUBMENU-->
        <!--IMPORTANTE -DESCUBRIR COMO ETIQUETAR EL CONTENIDO DE SERVICES- -->
        <div class="section-items">
            <h2>Tours</h2>
            <?php
            digitalnomads_list_services(); ?>
        </div>
        <div class="section-list">
            <h3 class="section-list-title">Tours list</h3>
            <?php
            digitalnomads_list_services_mini(); ?>
        </div>


    </section>

    <section id="legal" class="section-content">
        <!--ESPACIO PARA CREAR SECCIONES DEL SUBMENU-->
        <!--IMPORTANTE -DESCUBRIR COMO ETIQUETAR EL CONTENIDO DE SERVICES- -->
        <div class="section-items">
            <h2>Legal</h2>

        </div>
        <div class="section-list">
            <h3 class="section-list-title">Legal list</h3>

        </div>


    </section>

    <section id="health" class="section-content">
        <!--ESPACIO PARA CREAR SECCIONES DEL SUBMENU-->
        <!--IMPORTANTE -DESCUBRIR COMO ETIQUETAR EL CONTENIDO DE SERVICES- -->
        <div class="section-items">
            <h2>Health</h2>

        </div>
        <div class="section-list">
            <h3 class="section-list-title">Health list</h3>

        </div>


    </section>

    <section id="education" class="section-content">
        <!--ESPACIO PARA CREAR SECCIONES DEL SUBMENU-->
        <!--IMPORTANTE -DESCUBRIR COMO ETIQUETAR EL CONTENIDO DE SERVICES- -->
        <div class="section-items">
            <h2>Education</h2>

        </div>
        <div class="section-list">
            <h3 class="section-list-title">Education list</h3>

        </div>


    </section>

    <section id="other" class="section-content">
        <!--ESPACIO PARA CREAR SECCIONES DEL SUBMENU-->
        <!--IMPORTANTE -DESCUBRIR COMO ETIQUETAR EL CONTENIDO DE SERVICES- -->
        <div class="section-items">
            <h2>Other</h2>

        </div>
        <div class="section-list">
            <h3 class="section-list-title">Other list</h3>

        </div>


    </section>
</main>

<!--Aqui se imprime lo que se coloque en la sección de page  <?php /* the_content(); */ ?> -->
<section id="contanct" class="contact-wrapper">
    <div class="contact-manchas">
        <div class="content page section">
            <?php the_content(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>