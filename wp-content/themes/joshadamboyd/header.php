<!doctype html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="page" class="site">
    <?php if ((joshadamboyd_is_frontpage() || (is_home() && is_front_page()))) : ?>
      <a href="#content" class="skip-link menu-scroll-down">
        <span class="screen-reader-text"><?php _e('Scroll down to content', 'joshadamboyd'); ?></span>
      </a>
    <?php endif; ?>

    <header class="header">
      <nav class="navbar navbar-expand-sm navbar-light fixed-top bg-light">
        <div class="container">
          <button class="navbar-toggler navbar-toggler-right" type="button"
                  data-toggle="collapse" data-target="#navbarTop"
                  aria-controls="navbarTop" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <a class="navbar-brand" href="<?php bloginfo('url')?>">
            <?php if (has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <?php bloginfo('name')?>
            <?php endif; ?>
          </a>

          <div id="navbarTop" class="collapse navbar-collapse main-navigation"
               role="navigation"
               aria-label="<?php esc_attr_e('Top Menu', 'joshadamboyd'); ?>">
            <?php if (has_nav_menu('top')) : ?>
                <?php wp_nav_menu(array(
                    'theme_location' => 'top',
                    'menu_id'        => 'top-menu',
                    'menu_class'     => 'menu mr-auto'
                )); ?>
            <?php else : ?>
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="<?php echo esc_url(home_url('/')); ?>">Home</a>
                </li>
              </ul>
            <?php endif; ?>
          </div>
        </div>
      </nav>
    </header>

    <section class="content" class="container">
        <?php get_template_part('template-parts/header/content', 'hud'); ?>
