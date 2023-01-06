<?php get_header(); ?>



<main class="page section on-sidebar content">
    <div class="content_noSidebar content-primary">
        <ul class="blog-list">
            <?php get_template_part('template-parts/loop', 'blog'); ?>
        </ul>
    </div>
    <div class="sidebar">
        <?php get_sidebar('sidebar_blog'); ?>
    </div>
</main>


<?php get_footer(); ?>