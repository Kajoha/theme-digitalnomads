<?php
/*
* Template Name: simple page
*/

get_header(); ?>

<?php if (has_post_thumbnail()) :
    the_post_thumbnail('blog', array('class' => 'banner-page'));
endif; ?>

<main class="content page section">
    <div class="content-primary">
        <?php get_template_part('template-parts/global-page'); ?>
    </div>

</main>

<?php get_footer(); ?>