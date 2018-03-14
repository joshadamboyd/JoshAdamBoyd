<?php get_header(); ?>

<div class="wrap">
  <?php if (is_home() && ! is_front_page()) : ?>

    <header class="page-header">
      <h1 class="page-title"><?php single_post_title(); ?></h1>
    </header>

  <?php else : ?>

    <header class="page-header">
      <h2 class="page-title"><?php _e('Posts', 'joshadamboyd'); ?></h2>
    </header>

  <?php endif; ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>
          <?php get_template_part('template-parts/post/content', get_post_format()); ?>
        <?php endwhile; ?>

        <?php the_posts_pagination(array(
          'prev_text' => joshadamboyd_get_svg(array( 'icon' => 'arrow-left' )) . '<span class="screen-reader-text">' . __('Previous page', 'joshadamboyd') . '</span>',
          'next_text' => '<span class="screen-reader-text">' . __('Next page', 'joshadamboyd') . '</span>' . joshadamboyd_get_svg(array( 'icon' => 'arrow-right' )),
          'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'joshadamboyd') . ' </span>',
        )); ?>

      <?php else : ?>

        <?php get_template_part('template-parts/post/content', 'none'); ?>

      <?php endif; ?>
    </main>
  </div>

  <?php get_sidebar(); ?>
</div>

<?php get_footer();
