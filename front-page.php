<?php get_header('front'); ?>
<section class="home-welcome content page section">
    <h2><?php the_field('welcome_title'); ?></h2>
    <p><?php the_field('welcome_text'); ?></p>
</section>
<div class="home-areas">
    <ul class="content-areas">
        <li class="area-items">
            <?php $area1 = get_field('area_1');
            $img = wp_get_attachment_image_src($area1['img_area'], 'mediano')[0];
            ?>
            <img src="<?php echo esc_attr($img); ?>" alt="">
            <p><?php echo esc_html($area1['text_area']);   ?></p>
        </li>
        <li class="area-items">
            <?php $area2 = get_field('area_2');
            $img = wp_get_attachment_image_src($area2['img_area'], 'mediano')[0];
            ?>
            <img src="<?php echo esc_attr($img); ?>" alt="">
            <p><?php echo esc_html($area2['text_area']);   ?></p>
        </li>
        <li class="area-items">
            <?php $area3 = get_field('area_3');
            $img = wp_get_attachment_image_src($area3['img_area'], 'mediano')[0];
            ?>
            <img src="<?php echo esc_attr($img); ?>" alt="">
            <p><?php echo esc_html($area3['text_area']);   ?></p>
        </li>
        <li class="area-items">
            <?php $area4 = get_field('area_4');
            $img = wp_get_attachment_image_src($area4['img_area'], 'mediano')[0];
            ?>
            <img src="<?php echo esc_attr($img); ?>" alt="">
            <p><?php echo esc_html($area4['text_area']);   ?></p>
        </li>
    </ul>

</div>


<!--Aqui se imprime el formulario de contacto-->
<section id="contanct" class="contact-wrapper margin-home">
    <div class="contact-manchas">
        <div class="content page section">
            <div class="form-flex">
                <div class="form-text">
                    <h2><?php the_field('title_contact'); ?></h2>
                    <p><?php the_field('content_contact'); ?></p>
                </div>
                <?php the_field('form-text'); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>