<?php get_header(); ?>
<main class="page section on-sidebar content">
    <div class="content_noSidebar content-primary">
        <?php $category = get_queried_object(); ?>
        <span>Category:</span>
        <h1 class="title-blog-category"><?php echo $category->name; ?></h1>
        <ul class="blog-list">
            <?php get_template_part('template-parts/loop', 'blog'); ?>
        </ul>
    </div>
    <div class="sidebar">
        <?php get_sidebar('sidebar_blog'); ?>
    </div>
</main>


<?php get_footer(); ?>