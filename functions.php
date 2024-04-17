<?php




//Add CSS - Bootrstrap - JS
function university_files() {

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_enqueue_style('university_main_styles', get_stylesheet_uri());

    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', 'jquery', false);
    wp_enqueue_script('bootstrap');
}

add_action('wp_enqueue_scripts', 'university_files');








// Add featured image support

function learningWordPress_setup() {
    add_theme_support('post-thumbnails');
    add_image_size('small-thumbnails', 180, 120, true);
    add_image_size('banner-image', 1321, 210, true);
}

add_action('after_setup_theme', 'learningWordPress_setup');

?>