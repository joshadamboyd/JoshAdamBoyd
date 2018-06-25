<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content"><?php _e('Skip to content', 'joshadamboyd'); ?></a>

        <!--
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">Navbar</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                      <li class="nav-item active">
                          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">Features</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">Pricing</a>
                      </li>
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Dropdown link
                          </a>

                          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                          </div>
                      </li>
                    </ul>
                </div>
            </div>
        </nav>
      -->

        <header id="masthead" class="site-header" role="banner">
            <?php get_template_part('template-parts/header/header', 'image'); ?>

            <?php if (has_nav_menu('top')) : ?>
                <div class="navigation-top">
                    <div class="wrap">
                        <?php get_template_part('template-parts/navigation/navigation', 'top'); ?>
                    </div>
                </div>
            <?php endif; ?>
        </header>

        <?php
        if ((is_single() || (is_page() && ! joshadamboyd_is_frontpage())) && has_post_thumbnail(get_queried_object_id())) :
            echo '<div class="single-featured-image-header">';
            echo get_the_post_thumbnail(get_queried_object_id(), 'joshadamboyd-featured-image');
            echo '</div>';
        endif;
        ?>

        <div class="site-content-contain">
            <div id="content" class="site-content">
