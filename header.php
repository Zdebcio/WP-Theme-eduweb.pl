<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php echo get_bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php if (is_search()) : ?>
        <meta name="robots" content="noindex, nofollow" />
    <?php endif; ?>

    <title>LoveToEat Home Page</title>

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory') . '/css/style.css' ?>">

    <link rel="pingback" href="<?php get_bloginfo('pingback_url'); ?>">

    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>
    <header>
        <div class="pos-center">
            <h1><a href="<?php esc_url(home_url(home_url('/'))) ?>">lovetoeat.pl</a></h1>

            <nav id="main-nav">
                <div>
                    <ul class="menu">
                        <li>
                            <a href="#">Przepisy</a>
                            <ul class="sub-menu">
                                <li><a href="#" title="lunch">Obiad i kolacja</a></li>
                                <li><a href="#" title="breakfast">Śniadanie</a></li>
                                <li><a href="#" title="snacks">Przekąski</a></li>
                                <li><a href="#" title="desserts">Desery</a></li>
                                <li><a href="#" title="drinks">Drinki i Napoje</a></li>
                                <li><a href="#" title="all">Wszystkie</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Restauracje</a></li>
                        <li><a href="#">Food Fight</a></li>
                        <li class="current-menu-item"><a href="#">Blog</a></li>
                        <li><a href="#">Kontakt</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>