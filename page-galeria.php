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
                $i = 1;
                foreach ($img_gallery_ID as $id) :
                    $size = ($i == 3 || $i == 5) ? 'portrait' : 'square';
                    $imgThumb = wp_get_attachment_image_src($id, $size)[0];
                    $imgLarge = wp_get_attachment_image_src($id, 'full')[0];
                ?>
            <li>
                <a href="<?php echo $imgLarge  ?>" data-lightbox="gallery">
                    <img src="<?php echo $imgThumb; ?>" alt="Imagen"></a>
            </li>

            <?php $i++;
                endforeach; ?>
        </ul>

        <?php endwhile; ?>
    </div>

</main>

<?php get_footer(); ?>