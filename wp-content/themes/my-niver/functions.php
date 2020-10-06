<?php
include('inc/form-contact.php');

add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
function mytheme_custom_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999 );

function get_total_nivers () {
    $handle = curl_init();
    $url = "https://app.myniver.net/countnivers";
    curl_setopt($handle, CURLOPT_URL, $url);
    curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
    $output = curl_exec($handle);
    curl_close($handle);
    echo number_format($output,0,'','.');
}