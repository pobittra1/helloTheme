<?php

function hello_theme_enqueue_styles()
{
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/fontawesome/css/all.min.css');
    wp_enqueue_style('templatemo-edu-meeting', get_template_directory_uri() . '/assets/css/templatemo-edu-meeting.css');
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.css');
    wp_enqueue_style('lightbox', get_template_directory_uri() . '/assets/css/lightbox.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css');
    wp_enqueue_style('single', get_template_directory_uri() . '/single.css');
    wp_enqueue_style('author', get_template_directory_uri() . '/author.css');
}
add_action('wp_enqueue_scripts', 'hello_theme_enqueue_styles');


function hello_theme_enqueue_scripts()
{
    wp_enqueue_script('jquery', get_template_directory_uri() . '/vendor/jquery/jquery.min.js', array(), null, true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), null, true);
    wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/js/isotope.min.js', array('jquery'), null, true);
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl-carousel.js', array('jquery'), null, true);
    wp_enqueue_script('lightbox', get_template_directory_uri() . '/assets/js/lightbox.js', array('jquery'), null, true);
    wp_enqueue_script('tabs', get_template_directory_uri() . '/assets/js/tabs.js', array('jquery'), null, true);
    wp_enqueue_script('video', get_template_directory_uri() . '/assets/js/video.js', array('jquery'), null, true);
    wp_enqueue_script('slick-slider', get_template_directory_uri() . '/assets/js/slick-slider.js', array('jquery'), null, true);
    wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'hello_theme_enqueue_scripts');
