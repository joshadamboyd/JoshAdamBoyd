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

  <ul class="cats">
    <?php  wp_list_categories(array(
      'depth'               => 1,
      'echo'                => true,
      'hide_empty'          => true,
      'hide_title_if_empty' => true,
      'show_count'          => false,
      'show_option_all'     => __('All'),
      'title_li'            => '',
      'use_desc_for_title'  => true
    )); ?>
  </ul>

  <div class="row">
    <div class="col-lg">
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();

                get_template_part('template-parts/post/content', 'excerpt');
            endwhile;

            the_posts_pagination(array(
              'mid_size' => 4
            ));
        else :
            ?>

            <p>
              <?php _e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'joshadamboyd'); ?>
            </p>

            <?php
                get_search_form();
        endif;
        ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>
