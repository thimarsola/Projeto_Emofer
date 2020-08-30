<?php

//LOAD SCRIPTS
function loadScripts()
{
    //CSS
    wp_enqueue_style('fontMontserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap', [], '1.0.0', 'all');

    if (is_home()) {
        wp_enqueue_style('styleMain', get_template_directory_uri() . '/_cdn/css/styleMain.css', [], '1.0.0', 'all');
    } elseif (is_page('empresa')) {
        wp_enqueue_style('styleCompany', get_template_directory_uri() . '/_cdn/css/styleCompany.css', [], '1.0.0', 'all');
    } elseif (is_page('produtos')) {
        wp_enqueue_style('styleProducts', get_template_directory_uri() . '/_cdn/css/styleProducts.css', [], '1.0.0', 'all');
    } elseif (is_page('servicos')) {
        wp_enqueue_style('styleServices', get_template_directory_uri() . '/_cdn/css/styleServices.css', [], '1.0.0', 'all');
    } elseif (is_page('informacoes')) {
        wp_enqueue_style('styleInformation', get_template_directory_uri() . '/_cdn/css/styleInformation.css', [], '1.0.0', 'all');
    } elseif (is_page('contato')) {
        wp_enqueue_style('styleContact', get_template_directory_uri() . '/_cdn/css/styleContact.css', [], '1.0.0', 'all');
    }elseif (is_page(['chapas', 'cantoneiras', 'barras', 'tubos-industriais', 'vigas', 'perfis-w', 'lamina-raiada', 'porta-de-enrolar-automatica', 'acessorios-para-serralheria'])) {
        wp_enqueue_style('styleProduct', get_template_directory_uri() . '/_cdn/css/styleProduct.css', [], '1.0.0', 'all');
    }elseif (is_single()) {
        wp_enqueue_style('styleSingle', get_template_directory_uri() . '/_cdn/css/styleSingle.css', [], '1.0.0', 'all');
    }elseif (is_404()) {
        wp_enqueue_style('styleError', get_template_directory_uri() . '/_cdn/css/styleError.css', [], '1.0.0', 'all');
    }


    //Js
    if (is_home()) {
        wp_enqueue_script('main', get_template_directory_uri() . '/_cdn/js/main.js', [], '1.0.0', true);
    } else {
        wp_enqueue_script('pages', get_template_directory_uri() . '/_cdn/js/pages.js', [], '1.0.0', true);
    }
    
}

add_action('wp_enqueue_scripts', 'loadScripts');


//Menu
function register_my_menus()
{
    register_nav_menus([
        'header-menu' => __('Header Menu'),
        'footer-menu' => __('Footer Menu')
    ]);
}
add_action('init', 'register_my_menus');

//Thumnails
add_theme_support('post-thumbnails');
