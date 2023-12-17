<?php 

function my_scripts(){
    wp_enqueue_style('nbrt', get_stylesheet_uri());
    wp_enqueue_style('nbrt-bootstrapcss', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css');

    wp_enqueue_script('nbrt-boostrapjs', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'my_scripts');
?>