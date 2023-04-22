<?php

    //version avec namespace

    /* namespace permet d'eviter les conflits dans le code en separant bien les fonctions */



    // namespace App;

    // function montheme_support_add_title(){
    //     add_theme_support('title-tag');
    // }

    // function montheme_register_asset(){
    //     wp_register_style( 'bootsrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css');
    // }

    // add_action( 'after_setup_theme',  'App\mon_theme_support_add_title'); //ajout de App\ -> permet de faire appel au namespace
    // add_action( 'wp_enqueue_scripts', 'App\montheme_register_asset')


    
    //version 1
    function montheme_support_add_title(){
        add_theme_support('title-tag');

        //permet d'ajouter dans la création dun article une fonctionalité en plus
        //cette fonctionalité est de configurer une image pour un article
        add_theme_support( 'post-thumbnails'); 

    }

    function montheme_register_asset(){
        wp_register_style( 'bootsrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css');
        wp_register_script( 'bootsrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js');
        wp_enqueue_style( 'bootsrap');
        wp_enqueue_script( 'bootsrap');
    }


    add_action( 'after_setup_theme',  montheme_support_add_title());
    add_action( 'wp_enqueue_scripts', montheme_register_asset());


?>