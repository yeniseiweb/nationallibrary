<?php 
// Отключаем создание копий картинок в WordPress https://wp-kama.ru/id_4409/ubiraem-kopii-zagruzhaemyih-izobrazheniy.html
function my_scripts(){
    wp_enqueue_style('nbrt', get_stylesheet_uri());
    wp_enqueue_style('nbrt-bootstrapcss', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css');

    wp_enqueue_script('nbrt-boostrapjs', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'my_scripts');

/* ------------------------------- */

add_filter( 'intermediate_image_sizes', 'delete_intermediate_image_sizes' );
function delete_intermediate_image_sizes( $sizes ){
	// размеры которые нужно удалить
	return array_diff( $sizes, [
		'medium_large',
	] );
}
function nbrt_theme(){
    add_theme_support('post_thumbnails');
}
add_action('after_setup_theme', 'nbrt_theme');


/* -------------------------------------------------------------- Убираем заголовок с пагинации */


function my_navigation_template( $template, $class ){
	/*
	Вид базового шаблона:
	<nav class="navigation %1$s" role="navigation">
		<h2 class="screen-reader-text">%2$s</h2>
		<div class="nav-links">%3$s</div>
	</nav>
	*/

	return '
	<nav class="navigation" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>
	';
}
add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
?>
