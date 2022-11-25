<?php

/*

*Template Name: Template Digital Nomads - galería
Plugin URI:
Description: Add Widgets
Version: 1.0.0
Author: Karen Méndez
Author URI: https://kajoha.github.io/karen-mendez/
Text Domain:  digitalnomads

*/

get_header(); ?>

<main class="content page section">
    <div class="content-primary">
        <?php while (have_posts()) : the_post(); ?>
        <h1 class="text-center text-primary"><?php the_title(); ?></h1>

        <?php $gallery = get_post_gallery(get_the_ID(), false);
            $img_gallery_ID = explode(',', $gallery['ids']);


            ?>

        <ul class="galley-img">
            <?php
                foreach ($img_gallery_ID as $id) :
                    $imgThumb = wp_get_attachment_image_src($id, 'square');

                    echo "<pre>";

                    echo "</pre>";
                endforeach;
                ?>
        </ul>

        <?php endwhile; ?>
    </div>

</main>

<?php get_footer(); ?>