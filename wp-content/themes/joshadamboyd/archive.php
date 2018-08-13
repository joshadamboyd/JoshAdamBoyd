<?php get_header(); ?>

<main id="primary" class="main primary container"
      role="main"
      aria-label="<?php esc_attr_e('Main', 'joshadamboyd'); ?>">
    <?php if (have_posts()) : ?>
      <header class="page-header">
        <?php
          the_archive_title('<h1 class="page-title">', '</h1>');
          the_archive_description('<div class="taxonomy-description">', '</div>');
        ?>
      </header>
    <?php endif; ?>

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
        if (have_posts()) : ?>
            <?php
            while (have_posts()) :
                the_post();

                get_template_part('template-parts/post/content', get_post_format());
            endwhile;

            the_posts_pagination(array(
              'prev_text' => joshadamboyd_get_svg(array('icon' => 'arrow-left')) . '<span class="screen-reader-text">' . __('Previous page', 'joshadamboyd') . '</span>',
              'next_text' => '<span class="screen-reader-text">' . __('Next page', 'joshadamboyd') . '</span>' . joshadamboyd_get_svg(array('icon' => 'arrow-right')),
              'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'joshadamboyd') . ' </span>'
            ));
        else :
            get_template_part('template-parts/post/content', 'none');
        endif; ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>
