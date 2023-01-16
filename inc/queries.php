<?php
// WP Query para consultar una base de datos

//services

function digitalnomads_list_tours()
{ ?>
    <ul class="items-list sidebar-title">

        <?php
        $args = array(
            'post_type' => 'tours',
            //para traer una cantidad exacta de servicios usamos posts per page -1 es para traerlo todo
            'posts_per_page' => 4
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
?>


<?php
// WP Query para consultar una base de datos
function digitalnomads_list_tours_mini()
{ ?>
    <ul class="items-list-mini">

        <?php
        $args = array(
            'post_type' => 'tours',
            //para traer una cantidad exacta de servicios usamos posts per page -1 es para traerlo todo
            'posts_per_page' => -1
        );
        $services = new WP_Query($args);
        while ($services->have_posts()) : $services->the_post(); ?>
            <li class="items card-mini">
                <?php the_post_thumbnail('mediano'); ?>
                <div class="content-card-mini">
                    <a href="<?php the_permalink(); ?>">
                        <h4><?php the_title(); ?></h4>
                    </a>
                    <p><?php the_field('ciudad_provincia'); ?></p>
                </div>
                <div class="content-card-mimi_arrow">
                    <img src="<?php echo get_template_directory_uri(); ?> /img/flecha.png" alt="">
                </div>
            </li>

        <?php endwhile;
        //para decirle a wp que dejamos de usar jquery decimos reset
        wp_reset_postdata(); ?>
    </ul>

<?php
}




//Legal

function digitalnomads_list_legal()
{ ?>
    <ul class="items-list sidebar-title">

        <?php
        $args = array(
            'post_type' => 'legal',
            //para traer una cantidad exacta de servicios usamos posts per page -1 es para traerlo todo
            'posts_per_page' => 4
        );
        $legal = new WP_Query($args);
        while ($legal->have_posts()) : $legal->the_post(); ?>
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
?>


<?php
// WP Query para consultar una base de datos
function digitalnomads_list_legal_mini()
{ ?>
    <ul class="items-list-mini">

        <?php
        $args = array(
            'post_type' => 'legal',
            //para traer una cantidad exacta de servicios usamos posts per page -1 es para traerlo todo
            'posts_per_page' => -1
        );
        $health = new WP_Query($args);
        while ($health->have_posts()) : $health->the_post(); ?>
            <li class="items card-mini">
                <?php the_post_thumbnail('mediano'); ?>
                <div class="content-card-mini">
                    <a href="<?php the_permalink(); ?>">
                        <h4><?php the_title(); ?></h4>
                    </a>
                    <p><?php the_field('ciudad_provincia'); ?></p>
                </div>
                <div class="content-card-mimi_arrow">
                    <img src="<?php echo get_template_directory_uri(); ?> /img/flecha.png" alt="">
                </div>
            </li>

        <?php endwhile;
        //para decirle a wp que dejamos de usar jquery decimos reset
        wp_reset_postdata(); ?>
    </ul>

<?php
}


//Health

function digitalnomads_list_health()
{ ?>
    <ul class="items-list sidebar-title">

        <?php
        $args = array(
            'post_type' => 'healths',
            //para traer una cantidad exacta de servicios usamos posts per page -1 es para traerlo todo
            'posts_per_page' => 4
        );
        $health = new WP_Query($args);
        while ($health->have_posts()) : $health->the_post(); ?>
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
?>


<?php
// WP Query para consultar una base de datos
function digitalnomads_list_health_mini()
{ ?>
    <ul class="items-list-mini">

        <?php
        $args = array(
            'post_type' => 'healths',
            //para traer una cantidad exacta de servicios usamos posts per page -1 es para traerlo todo
            'posts_per_page' => -1
        );
        $legal = new WP_Query($args);
        while ($legal->have_posts()) : $legal->the_post(); ?>
            <li class="items card-mini">
                <?php the_post_thumbnail('mediano'); ?>
                <div class="content-card-mini">
                    <a href="<?php the_permalink(); ?>">
                        <h4><?php the_title(); ?></h4>
                    </a>
                    <p><?php the_field('ciudad_provincia'); ?></p>
                </div>
                <div class="content-card-mimi_arrow">
                    <img src="<?php echo get_template_directory_uri(); ?> /img/flecha.png" alt="">
                </div>
            </li>

        <?php endwhile;
        //para decirle a wp que dejamos de usar jquery decimos reset
        wp_reset_postdata(); ?>
    </ul>

<?php
}



//lodging


// WP Query para consultar una base de datos
function digitalnomads_list_education()
{ ?>
    <ul class="items-list sidebar-title">

        <?php
        $args = array(
            'post_type' => 'education',
            //para traer una cantidad exacta de servicios usamos posts per page -1 es para traerlo todo
            'posts_per_page' => 4
        );
        $education = new WP_Query($args);
        while ($education->have_posts()) : $education->the_post(); ?>
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
?>


<?php
// WP Query para consultar una base de datos
function digitalnomads_list_education_mini()
{ ?>
    <ul class="items-list-mini">

        <?php
        $args = array(
            'post_type' => 'education',
            //para traer una cantidad exacta de servicios usamos posts per page -1 es para traerlo todo
            'posts_per_page' => -1
        );
        $education = new WP_Query($args);
        while ($education->have_posts()) : $education->the_post(); ?>
            <li class="items card-mini">
                <?php the_post_thumbnail('mediano'); ?>
                <div class="content-card-mini">
                    <a href="<?php the_permalink(); ?>">
                        <h4><?php the_title(); ?></h4>
                    </a>
                    <p><?php the_field('ciudad_provincia'); ?></p>
                </div>
                <div class="content-card-mimi_arrow">
                    <img src="<?php echo get_template_directory_uri(); ?> /img/flecha.png" alt="">
                </div>
            </li>

        <?php endwhile;
        //para decirle a wp que dejamos de usar jquery decimos reset
        wp_reset_postdata(); ?>
    </ul>

<?php
}


//lodging


// WP Query para consultar una base de datos
function digitalnomads_list_other_services()
{ ?>
    <ul class="items-list sidebar-title">

        <?php
        $args = array(
            'post_type' => 'otherServices',
            //para traer una cantidad exacta de servicios usamos posts per page -1 es para traerlo todo
            'posts_per_page' => 4
        );
        $otherServices = new WP_Query($args);
        while ($otherServices->have_posts()) : $otherServices->the_post(); ?>
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
?>


<?php
// WP Query para consultar una base de datos
function digitalnomads_list_other_services_mini()
{ ?>
    <ul class="items-list-mini">

        <?php
        $args = array(
            'post_type' => 'otherServices',
            //para traer una cantidad exacta de servicios usamos posts per page -1 es para traerlo todo
            'posts_per_page' => -1
        );
        $otherServices = new WP_Query($args);
        while ($otherServices->have_posts()) : $otherServices->the_post(); ?>
            <li class="items card-mini">
                <?php the_post_thumbnail('mediano'); ?>
                <div class="content-card-mini">
                    <a href="<?php the_permalink(); ?>">
                        <h4><?php the_title(); ?></h4>
                    </a>
                    <p><?php the_field('ciudad_provincia'); ?></p>
                </div>
                <div class="content-card-mimi_arrow">
                    <img src="<?php echo get_template_directory_uri(); ?> /img/flecha.png" alt="">
                </div>
            </li>

        <?php endwhile;
        //para decirle a wp que dejamos de usar jquery decimos reset
        wp_reset_postdata(); ?>
    </ul>

<?php
}
