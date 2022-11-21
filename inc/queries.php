<?php
// WP Query para consultar una base de datos
function digitalnomads_list_services()
{ ?>
<ul class="items-list">

    <?php
        $args = array(
            'post_type' => 'services',
            //para traer una cantidad exacta de servicios usamos posts per page -1 es para traerlo todo
            'posts_per_page' => 5
        );
        $services = new WP_Query($args);
        while ($services->have_posts()) : $services->the_post(); ?>
    <li class="items card gradient">
        <?php the_post_thumbnail('mediano'); ?>
        <div class="content-card">
            <a href="<?php the_permalink(); ?>">
                <h3><?php the_title(); ?></h3>
            </a>
            <p><?php the_field('ciudad_provincia'); ?></p>
        </div>
    </li>

    <?php endwhile;
        //para decirle a wp que dejamos de usar jquery decimos reset
        wp_reset_postdata(); ?>
</ul>

<?php
}