<?php
include('inc/form-contact.php');

add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
function mytheme_custom_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999 );