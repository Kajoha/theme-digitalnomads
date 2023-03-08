<?php
/*

*Template Name: Template Digital Nomads - lodging
Plugin URI:
Description: Add Widgets
Version: 1.1.0
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
            <li class="submenu-items"><a href="#hotels"><?php the_field('item_menu_1'); ?></a></li>
            <li class="submenu-items"><a href="#rentals"><?php the_field('item_menu_2'); ?></a></li>
            <li class="submenu-items"><a href="#real-estate-brokers"><?php the_field('item_menu_3'); ?></a></li>
        </ul>
    </div>
</div>
<main class="content page section ">
    <section id="<?php the_field('id_menu_1'); ?>" class="section-content">
        <!--ESPACIO PARA CREAR SECCIONES DEL SUBMENU-->
        <!--IMPORTANTE -DESCUBRIR COMO ETIQUETAR EL CONTENIDO DE SERVICES- -->
        <div class="section-items">
            <h2><?php the_field('item_menu_1'); ?></h2>
            <?php
            digitalnomads_list_hotels(); ?>
        </div>
        <div class="section-list">
            <h3 class="section-list-title"><?php the_field('item_menu_1'); ?> list</h3>
            <?php
            digitalnomads_list_hotels_mini(); ?>
        </div>


    </section>

    <section id="<?php the_field('id_menu_2'); ?>" class="section-content margin-home">
        <!--ESPACIO PARA CREAR SECCIONES DEL SUBMENU-->
        <!--IMPORTANTE -DESCUBRIR COMO ETIQUETAR EL CONTENIDO DE SERVICES- -->
        <div class="section-items">
            <h2><?php the_field('item_menu_2'); ?></h2>
            <?php
            digitalnomads_list_rentals(); ?>
        </div>
        <div class="section-list">
            <h3 class="section-list-title"><?php the_field('item_menu_2'); ?> list</h3>
            <?php
            digitalnomads_list_rentals_mini(); ?>
        </div>


    </section>

    <section id="<?php the_field('id_menu_3'); ?>" class="section-content margin-home">
        <!--ESPACIO PARA CREAR SECCIONES DEL SUBMENU-->
        <!--IMPORTANTE -DESCUBRIR COMO ETIQUETAR EL CONTENIDO DE SERVICES- -->
        <div class="section-items">
            <h2><?php the_field('item_menu_3'); ?></h2>
            <?php
            digitalnomads_list_realEstate(); ?>
        </div>
        <div class="section-list">
            <h3 class="section-list-title"><?php the_field('item_menu_3'); ?> list</h3>
            <?php
            digitalnomads_list_realEstate_mini(); ?>
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