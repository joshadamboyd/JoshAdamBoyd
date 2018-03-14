<?php get_header(); ?>

<div class="wrap">

  <header class="page-header">
    <?php if (have_posts()) : ?>
      <h1 class="page-title"><?php printf(__('Search Results for: %s', 'joshadamboyd'), '<span>' . get_search_query() . '</span>'); ?></h1>
    <?php else : ?>
      <h1 class="page-title"><?php _e('Nothing Found', 'joshadamboyd'); ?></h1>
    <?php endif; ?>
  </header>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>
          <?php get_template_part('template-parts/post/content', 'excerpt'); ?>
        <?php endwhile; ?>

        <?php the_posts_pagination(array(
          'prev_text' => joshadamboyd_get_svg(array( 'icon' => 'arrow-left' )) . '<span class="screen-reader-text">' . __('Previous page', 'joshadamboyd') . '</span>',
          'next_text' => '<span class="screen-reader-text">' . __('Next page', 'joshadamboyd') . '</span>' . joshadamboyd_get_svg(array( 'icon' => 'arrow-right' )),
          'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'joshadamboyd') . ' </span>',
        )); ?>

      <?php else : ?>

        <p><?php _e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'joshadamboyd'); ?></p>

        <?php get_search_form(); ?>

      <?php endif; ?>
    </main>
  </div>

  <?php get_sidebar(); ?>
</div>

<?php get_footer();
