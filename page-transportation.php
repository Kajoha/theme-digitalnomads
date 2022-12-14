<?php
/*

*Template Name: Template Digital Nomads - transportation
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
            <li class="submenu-items"><a href="#car-rentals">Car Rentals</a></li>
            <li class="submenu-items"><a href="#shuttles">Shuttles</a></li>
            <li class="submenu-items"><a href="#private-drivers">Private Drivers</a></li>
            <li class="submenu-items"><a href="#other-transportation">Other</a></li>
        </ul>
    </div>
</div>
<main class="content page section ">
    <section id="car-rental" class="section-content">
        <!--ESPACIO PARA CREAR SECCIONES DEL SUBMENU-->
        <!--IMPORTANTE -DESCUBRIR COMO ETIQUETAR EL CONTENIDO DE SERVICES- -->
        <div class="section-items">
            <h2>Car Rentals</h2>

        </div>
        <div class="section-list">
            <h3 class="section-list-title">Car Rentals list</h3>

        </div>


    </section>

    <section id="shuttles" class="section-content">
        <!--ESPACIO PARA CREAR SECCIONES DEL SUBMENU-->
        <!--IMPORTANTE -DESCUBRIR COMO ETIQUETAR EL CONTENIDO DE SERVICES- -->
        <div class="section-items">
            <h2>Shuttles</h2>

        </div>
        <div class="section-list">
            <h3 class="section-list-title">Shuttles list</h3>

        </div>


    </section>

    <section id="private-drivers" class="section-content">
        <!--ESPACIO PARA CREAR SECCIONES DEL SUBMENU-->
        <!--IMPORTANTE -DESCUBRIR COMO ETIQUETAR EL CONTENIDO DE SERVICES- -->
        <div class="section-items">
            <h2>Private Drivers</h2>

        </div>
        <div class="section-list">
            <h3 class="section-list-title">Private Drivers list</h3>

        </div>


    </section>

    <section id="other-transportation" class="section-content">
        <!--ESPACIO PARA CREAR SECCIONES DEL SUBMENU-->
        <!--IMPORTANTE -DESCUBRIR COMO ETIQUETAR EL CONTENIDO DE SERVICES- -->
        <div class="section-items">
            <h2>Other</h2>

        </div>
        <div class="section-list">
            <h3 class="section-list-title">Other</h3>
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