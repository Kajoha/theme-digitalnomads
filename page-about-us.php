<?php /*Esta hoja de estilo se sobrepone al global - agarra las pestañas de la página servicios/transporte */
get_header(); ?>

<?php if (has_post_thumbnail()) :
    the_post_thumbnail('blog', array('class' => 'banner-page'));
endif; ?>

<main class="content page section on-sidebar">
    <div class="content-primary content_noSidebar">
        <?php get_template_part('template-parts/global-page'); ?>
    </div>
    <div class="sidebar">
        <?php get_sidebar('sidebar_blog');
        /* este llama por defaul la pagina de sidebar.php pero si quiero que llame a otra es ('servicios') */ ?>
    </div>
</main>

<?php get_footer(); ?>