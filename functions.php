<?php

register_nav_menus( array(
    'primary'   => __( 'Primary Menu', 'myfirsttheme' ),
    'secondary' => __( 'Secondary Menu', 'myfirsttheme' )
) );

function simple_theme_setup(){
    // Featured Image Support
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'simple_theme_setup');