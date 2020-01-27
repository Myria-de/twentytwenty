<?php
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

add_filter( 'body_class','my_body_classes' );
function my_body_classes( $classes ) {
    if ( is_category() ) {
         $classes[] = 'template-full-width';

    } 
    
    if ( is_archive() ) {
         $classes[] = 'template-full-width';
    } 
    
    if ( is_page_template( 'templates/template-software-full-width.php' )) {
          $classes[] = 'template-full-width';
    } 
    return $classes;
  }
?>
