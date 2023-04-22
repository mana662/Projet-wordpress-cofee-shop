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
       
        //add_theme_support -> Permet d'ajouter dans la création dun article une fonctionalité en plus

        //Ajoute la prise en charge de la balise de titre du thème
         add_theme_support('title-tag');

        //Permet de configurer des images en vedette pour les articles 
        add_theme_support( 'post-thumbnails'); 

        //Crée un emplacement pour le menu de navigation
        register_nav_menu('header','en tête du menu');

    }

    function montheme_register_asset(){
        wp_register_style( 'bootsrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css');
        wp_register_script( 'bootsrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js');
        wp_enqueue_style( 'bootsrap');
        wp_enqueue_script( 'bootsrap');
    }

    function montheme_change_menu_class($classes){
        
        $classes[] = 'nav-item';
        return $classes;

        //Affiche les infos structurés d'une variable
        //var_dump(func_get_args());
        //die();
        
    }

    function montheme_change_menu_link($attrs){
        
        $attrs['class'] = 'nav-link';
        return $attrs;
        
    }


    add_action( 'after_setup_theme',  'montheme_support_add_title');
    add_action( 'wp_enqueue_scripts', 'montheme_register_asset');
   

    //Ajoute un filtre
    //Ajoute une classe CSS à la liste de classes pour chaque élément de menu de navigation.
    add_filter('nav_menu_css_class', 'montheme_change_menu_class');

    //Modifie les attributs de chaque lien an ajoutant la classe nav-link
    add_filter('nav_menu_link_attributes', 'montheme_change_menu_link');



?>