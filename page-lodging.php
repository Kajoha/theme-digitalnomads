<?php
/*

*Template Name: Template Digital Nomads - lodging
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
            <li class="submenu-items"><a href="#hotels">Hotels</a></li>
            <li class="submenu-items"><a href="#rentals">Rentals</a></li>
            <li class="submenu-items"><a href="#real-estate-brokers">Real Estate Brokers</a></li>
        </ul>
    </div>
</div>
<main class="content page section ">
    <section id="hotels" class="section-content">
        <!--ESPACIO PARA CREAR SECCIONES DEL SUBMENU-->
        <!--IMPORTANTE -DESCUBRIR COMO ETIQUETAR EL CONTENIDO DE SERVICES- -->
        <div class="section-items">
            <h2>Hotels</h2>

        </div>
        <div class="section-list">
            <h3 class="section-list-title">Hotels list</h3>

        </div>


    </section>

    <section id="rentals" class="section-content">
        <!--ESPACIO PARA CREAR SECCIONES DEL SUBMENU-->
        <!--IMPORTANTE -DESCUBRIR COMO ETIQUETAR EL CONTENIDO DE SERVICES- -->
        <div class="section-items">
            <h2>Rentals</h2>

        </div>
        <div class="section-list">
            <h3 class="section-list-title">Rentals list</h3>

        </div>


    </section>

    <section id="real-estate-brokers" class="section-content">
        <!--ESPACIO PARA CREAR SECCIONES DEL SUBMENU-->
        <!--IMPORTANTE -DESCUBRIR COMO ETIQUETAR EL CONTENIDO DE SERVICES- -->
        <div class="section-items">
            <h2>Real Estate Brokers</h2>

        </div>
        <div class="section-list">
            <h3 class="section-list-title">Real Estate Brokers list</h3>

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