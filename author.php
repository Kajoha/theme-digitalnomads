<?php get_header(); ?>
<main class="page section on-sidebar content">
    <div class="content_noSidebar content-primary">
        <?php $author = get_queried_object(); ?>
        <span>Author:</span>
        <h1 class="title-blog-category"><?php echo $author->data->display_name; ?></h1>
        <p class="description-blog-category"><?php echo get_the_author_meta('description', $author->data->ID); ?></p>
        <ul class="blog-list">
            <?php get_template_part('template-parts/loop', 'blog'); ?>
        </ul>
    </div>
    <div class="sidebar">
        <?php get_sidebar('sidebar_blog'); ?>
    </div>
</main>


<?php get_footer(); ?>


<!-- IMPORTANTE 
        si quiero ver los datos que trae wordpress hago:

        <?php /** $category = get_queried_object(); */ ?>

        echo "<pre>";
            var_dump($category);
        echo "<pre>";

        ESTO IMPRIME EN LA PANTALLA UN ARRAY DE OBJETOS DE LA INFORMACIÓN QUE PUEDO IMPRIMIR EN LA PANTALLA
    -->