<?php
function some_assets() {
    wp_enqueue_style( 'maincss', get_template_directory_uri() . '/assets/index.css' );
    wp_enqueue_style( 'contactus', get_template_directory_uri() . '/assets/contactus.css' );
    wp_enqueue_style( 'blogcss', get_template_directory_uri() . '/assets/blogpage.css' );

    wp_enqueue_script( 'common-script', get_template_directory_uri() . '/assets/js/common.js', array(), '20151215', true );
    wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/index.js', array(), '20151215', true );
}

add_action( 'wp_enqueue_scripts', 'some_assets' );

show_admin_bar(false);

add_theme_support('post-thumbnails');
add_theme_support('post-thumbnails',array('card'));
?>