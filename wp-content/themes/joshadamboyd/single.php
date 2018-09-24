<?php get_header(); ?>

<main id="primary" class="main primary container single"
      role="main"
      aria-label="<?php esc_attr_e('Main', 'joshadamboyd'); ?>">
  <div class="row">
    <div class="col-lg">
        <?php
        while (have_posts()) :
            the_post();

            the_post_navigation(array(
              'prev_text' => joshadamboyd_fontawesome(array('icon' => 'angle-left')) . '<span class="screen-reader-text">' . __('Previous Page', 'joshadamboyd') . '</span>',
              'next_text' => '<span class="screen-reader-text">' . __('Next Page', 'joshadamboyd') . '</span>' . joshadamboyd_fontawesome(array('icon' => 'angle-right'))
            ));

            get_template_part('template-parts/post/content', get_post_format());

            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
        endwhile;
        ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>
