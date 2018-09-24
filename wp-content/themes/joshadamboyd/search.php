<?php get_header(); ?>

<main id="primary" class="main primary container search"
      role="main"
      aria-label="<?php esc_attr_e('Main', 'joshadamboyd'); ?>">
  <header class="page-header">
    <h1 class="page-title">
        <?php if (have_posts()) : ?>
            <?php printf(__('Search Results for: %s', 'joshadamboyd'), '<span>' . get_search_query() . '</span>'); ?>
        <?php else : ?>
          <?php _e('Nothing Found', 'joshadamboyd'); ?>
        <?php endif; ?>
    </h1>
  </header>

  <?php if (have_posts()) : ?>
    <div class="row">
      <?php while (have_posts()) : ?>
        <div class="col-lg-4 col-sm-6 col-xs-12">
          <?php
            the_post();
            get_template_part('template-parts/post/content', 'excerpt');
          ?>
        </div>
      <?php endwhile; ?>
    </div>

    <div class="row">
      <div class="col-lg">
        <?php
          the_posts_pagination(array(
            'prev_text' => joshadamboyd_fontawesome(array('icon' => 'angle-left')) . '<span class="screen-reader-text">' . __('Previous page', 'joshadamboyd') . '</span>',
            'next_text' => '<span class="screen-reader-text">' . __('Next page', 'joshadamboyd') . '</span>' . joshadamboyd_fontawesome(array('icon' => 'angle-right')),
            'mid_size' => 4
          ));
        ?>
      </div>
    </div>
  <?php else : ?>
    <div class="row">
      <div class="col-lg">
        <p>
          <?php _e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'joshadamboyd'); ?>
        </p>

        <?php get_search_form(); ?>
      </div>
    </div>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
