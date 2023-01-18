<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <title><?php bloginfo('name');?></title>
<!--    <link rel="stylesheet" href="--><?php //bloginfo('stylesheet_url'); ?><!--">-->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' .
        filemtime( get_stylesheet_directory() . '/style.css'); ?>"
          type="text/css" media="screen, projection" />
    <?php wp_head(); ?>
</head>
<body>
<header>
    <h1><?php bloginfo('name'); ?></h1>
    <small><?php bloginfo('description'); ?></small>
    <p><?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?></p>
</header>
