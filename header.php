<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>


    <header class="site-header">
        <div class="content">
            <div class="content-nav">
                <div class="logo"><a href="http://localhost/wordpress/"><img
                            src="<?php echo get_template_directory_uri(); ?> /img/nuevo.png" alt=""></a>
                </div>
                <?php $args = array(
                    'theme_location' => 'menu-primary',
                    'container' => 'nav',
                    'container_class' => 'menu-primary'
                );
                wp_nav_menu($args); ?>
            </div>
        </div>
    </header>