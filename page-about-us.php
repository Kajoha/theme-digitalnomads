<?php get_header(); ?>

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
<div class="FAQ">
    <section class="content page section margin-home">
        <div class="row">

            <div class="col">
                <h2> <b>FAQ</b></h2>
                <div class="tabs">
                    <div class="tab">
                        <input type="radio" id="rd1" name="rd">
                        <label class="tab-label" for="rd1">Item 1</label>
                        <div class="tab-content">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, facilis.
                        </div>
                    </div>
                    <div class="tab">
                        <input type="radio" id="rd2" name="rd">
                        <label class="tab-label" for="rd2">Item 2</label>
                        <div class="tab-content">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil, aut.
                        </div>
                    </div>
                    <div class="tab">
                        <input type="radio" id="rd3" name="rd">
                        <label for="rd3" class="tab-close">Close others &times;</label>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>