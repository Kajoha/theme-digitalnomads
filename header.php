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
                <div class="logo"><a href="<?php echo site_url('/'); ?>"><img
                            src="<?php echo get_template_directory_uri(); ?> /img/nuevo.png" alt=""></a>
                </div>
                <div class="hambur-menu">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="46"
                        height="46" viewBox="0 0 24 24" stroke-width="2.5" stroke="#ffffff" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <line x1="4" y1="6" x2="20" y2="6" />
                        <line x1="4" y1="12" x2="20" y2="12" />
                        <line x1="4" y1="18" x2="20" y2="18" />
                    </svg>
                </div>
                <div class="content-menu">
                    <?php $args = array(
                        'theme_location' => 'menu-primary',
                        'container' => 'nav',
                        'container_class' => 'menu-primary' /*me permite poner una clase al menu*/
                    );
                    wp_nav_menu($args); ?>
                </div>
            </div>
            <div class="content-menu-mobile">
                <?php $args = array(
                    'theme_location' => 'menu-primary',
                    'container' => 'nav',
                    'container_class' => 'menu-primary' /*me permite poner una clase al menu*/
                );
                wp_nav_menu($args); ?>

            </div>
        </div>
    </header>