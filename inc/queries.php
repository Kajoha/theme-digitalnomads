<?php
function digitalnomads_list_class()
{ ?>
<ul class="class-list">
    // WP Query para consultar una base de datos

    <?php
        $args = array(
            'post_type' => 'services-tours',
            //para traer una cantidad exacta de servicios usamos posts per page -1 es para traerlo todo
            'posts_per_page' => 5
        );
        $tours = new WP_Query($args);
        while ($tours->have_posts()) : $tours->the_post(); ?>
    <li>

    </li>

    <?php endwhile; ?>
</ul>

<?php
}