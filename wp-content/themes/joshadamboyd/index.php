<?php get_header(); ?>

<main id="primary" class="main primary container"
      role="main"
      aria-label="<?php esc_attr_e('Main', 'joshadamboyd'); ?>">
  <header class="page-header">
    <?php if (is_home() && ! is_front_page()) : ?>
      <h1 class="page-title"><?php single_post_title(); ?></h1>
    <?php else : ?>
      <h2 class="page-title"><?php _e('Posts', 'joshadamboyd'); ?></h2>
    <?php endif; ?>
  </header>

  <ul class="cats">
    <?php  wp_list_categories(array(
      'depth'               => 1,
      'hide_title_if_empty' => 1,
      'show_count'          => false,
      'show_option_all'     => __('All'),
      'title_li'            => '',
      'use_desc_for_title'  => true
    )); ?>
  </ul>

  <?php if (have_posts()) : ?>
    <div class="row">
      <?php while (have_posts()) : ?>
        <div class="col-lg-4 col-sm-6 col-xs-12">
          <?php
            the_post();
            get_template_part('template-parts/post/content', get_post_format());
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
        <?php get_template_part('template-parts/post/content', 'none'); ?>
      </div>
    </div>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
