<?php
function move_jquery_into_footer( $wp_scripts ) {

    if( is_admin() ) {
        return;
    }

    $wp_scripts->add_data( 'jquery', 'group', 1 );
    $wp_scripts->add_data( 'jquery-core', 'group', 1 );
    $wp_scripts->add_data( 'jquery-migrate', 'group', 1 );
}

add_action( 'wp_default_scripts', 'move_jquery_into_footer' );

//Add scripts and stylesheets.
function startwordpress_scripts() {
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css');
    wp_enqueue_style('blog', get_template_directory_uri().'/css/blog.css', array('bootstrap'));
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', array('jquery', 'tether'), null, true);
    wp_enqueue_script('tether', get_template_directory_uri().'/js/tether.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'startwordpress_scripts');

// WordPress Titles
add_theme_support( 'title-tag' );
