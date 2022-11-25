<?php get_header(); ?>

<?php if (has_post_thumbnail()) :
    the_post_thumbnail('blog', array('class' => 'banner-page'));
endif; ?>

<main class="content page section">
    <div class="content-primary">
        <?php get_template_part('template-parts/global-page'); ?>
    </div>
    <?php


    ?>
</main>


<?php get_footer(); ?>