<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>うつ仕事</title>
    <meta name="description" content="うつ病を持ちながら何とか働かれている方、休職中の方、復職を検討している方に向けたサイトです。">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/logo.png" >
    <meta property="og:title" content="depression-worker1">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://depression-worker.com/">
	<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/no_image.jpg">
	<meta property="og:site_name" content="depression-worker">
	<meta property="og:description" content="test">
	<meta name="twitter:card" content="summary_large_image">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-EFT8L3V8QB"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-EFT8L3V8QB');
    </script>
    <?php wp_head(); ?>
</head>
<body>
    <header class="header" id="header">
        <input type="checkbox" id="menu_toggle" class="menu_checkbox">
        <label for="menu_toggle" class="menu_hamburger">
            <div class="hamburger_box">
                <span class="bar"></span>
            </div>
        </label>
        <div class="header_top">
            <div class="header_inner">
                <h1 class="header_title"><a href="<?php echo esc_url(home_url('/'));?>">うつ仕事</a></h1>
            </div>
            <?php get_search_form(); ?>
        </div>
        <div class="header_bottom">
            <?php
                if (has_nav_menu('global') || has_nav_menu('global_sns') || has_nav_menu('login')) :
            ?>
                <div class="header_inner">
                    <nav class="header_nav">
                        <?php
                        if (has_nav_menu('global')) {
                            wp_nav_menu(
                                array(
                                    'depth' => 1,
                                    'theme_location' => 'global',
                                    'container' => false,
                                    'menu_class' => 'header_nav-1',
                                )
                            );
                        } else {
                            echo '<ul></ul>';
                        }
                        if (has_nav_menu('global_sns')) {
                            wp_nav_menu(
                                array(
                                    'depth' => 1,
                                    'theme_location' => 'global_sns',
                                    'container' => false,
                                    'menu_class' => 'header_nav-2',
                                )
                            );
                        } else {
                            echo '<ul></ul>';
                        }
                        ?>
                    </nav>
                </div>
            <?php 
                endif; 
                if (has_nav_menu('login')) {
                    wp_nav_menu(
                        array(
                            'depth' => 1,
                            'theme_location' => 'login',
                            'container' => 'div',
                            'container_class' => 'header_nav-3',
                            'menu_class' => '',
                        )
                    );
                }
            ?>
        </div>
    </header>
