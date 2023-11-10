<?php 

add_action( 'wp_enqueue_scripts', 'chicdressing_enqueue_styles' );
function chicdressing_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
}

add_filter( 'big_image_size_threshold', '__return_false' );

add_action( 'wp_print_scripts', 'dequeue_fonts_style' );
function dequeue_fonts_style() {
      wp_dequeue_script( 'ashe_gfonts_scripts' );
      wp_deregister_script('ashe_gfonts_scripts');
}