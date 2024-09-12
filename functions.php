<?php 

add_action( 'wp_enqueue_scripts', 'chicdressing_enqueue_styles' );
function chicdressing_enqueue_styles() {
    // Chargement du style.css du thème parent Twenty Twenty
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    // Chargement du css/theme.css pour nos personnalisations
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/style.css', array(), filemtime(get_stylesheet_directory() . '/style.css'));
}

add_filter( 'big_image_size_threshold', '__return_false' );

// Décharger les scripts Google Fonts
add_action( 'wp_enqueue_scripts', 'remove_my_script', 999 );
	 function remove_my_script() {
	   wp_dequeue_style('ashe-playfair-font');
	   wp_dequeue_style('ashe-opensans-font');
	   wp_dequeue_style('ashe-kalam-font');
	   wp_dequeue_style('ashe-rokkitt-font');
	}

?>