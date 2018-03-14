<?php get_header(); ?>

<div class="wrap">
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('template-parts/post/content', get_post_format()); ?>

        <?php if (comments_open() || get_comments_number()) : ?>
          <?php comments_template(); ?>
        <?php endif; ?>

        <?php the_post_navigation(array(
          'prev_text' => '<span class="screen-reader-text">' . __('Previous Post', 'joshadamboyd') . '</span><span aria-hidden="true" class="nav-subtitle">' . __('Previous', 'joshadamboyd') . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . joshadamboyd_get_svg(array( 'icon' => 'arrow-left' )) . '</span>%title</span>',
          'next_text' => '<span class="screen-reader-text">' . __('Next Post', 'joshadamboyd') . '</span><span aria-hidden="true" class="nav-subtitle">' . __('Next', 'joshadamboyd') . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . joshadamboyd_get_svg(array( 'icon' => 'arrow-right' )) . '</span></span>',
        )); ?>
      <?php endwhile; ?>
    </main>
  </div>

  <?php get_sidebar(); ?>
</div>

<?php get_footer();
