<?php /*Esta hoja de estilo se sobrepone al global - agarra las pestañas de la página servicios/transporte */
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
            <li class="submenu-items"><a href="<?php echo get_template_directory_uri(); ?> /wordpress/blog">Blog</a>
            </li>
            <li class="submenu-items"><a href="#faq">FAQ</a></li>
        </ul>
    </div>
</div>

<main class="content page section on-sidebar">
    <div class="content-primary content_noSidebar">
        <?php the_content(); ?>

    </div>
    <div class="sidebar">
        <?php get_sidebar('sidebar_blog');
        /* este llama por defaul la pagina de sidebar.php pero si quiero que llame a otra es ('servicios') */ ?>
    </div>

</main>

<?php get_footer(); ?>