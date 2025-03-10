<?php
function my_theme_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'hello-theme'),
    ));
}
add_action('after_setup_theme', 'hello_theme_setup');


require_once get_template_directory() . '/inc/enqueue.php';
