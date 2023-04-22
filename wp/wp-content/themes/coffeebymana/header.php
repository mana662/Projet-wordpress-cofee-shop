<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <div class="container">
        <header class="header py-3">
            <div class="row justify-content-center">
                <div class="col-3 text-center">
                    <a href="<?php echo get_home_url(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Logo" width="230" height="243">
                    </a>
                </div>
            </div>

            <?php
                //Fonction WP Affiche le menu
                wp_nav_menu([
                    'theme_location' => 'header',
                    'container' => false,
                    'menu_class' => 'col nav justify-content-center'
                ]);
            ?>
        </header>

    </div>