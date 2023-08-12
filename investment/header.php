<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Gotham-Pro-Bold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Montserrat.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Montserrat-Bold.ttf" as="font" type="font/ttf" crossorigin>
    <?php wp_head(); ?>
    <title><?php wp_title(); ?></title>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header-block">
                <a href="/" aria-label="Logo">
                    <img width="158" height="107" src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="Investments">
                </a>
                <?php wp_nav_menu('main'); ?>
                <!--<div class="header-menu">
                    <a href="#company" class="menu-item">About us</a>
                    <a href="#services" class="menu-item">Our approach</a>
                    <a href="#projects" class="menu-item">Contacts</a>
                </div>-->
                <div class="mobile-btn">
                    <button class="menu-mobile-button" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>
        </div>
        <div class="offcanvas offcanvas-end mobile-menu" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="menu-content-head">
                <button type="button" class="close-block-button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <?php wp_nav_menu('main'); ?>
        </div>
    </header>
