<?php get_header(); ?>

<main id="primary" class="main primary container single"
      role="main"
      aria-label="<?php esc_attr_e('Main', 'joshadamboyd'); ?>">
  <div class="row">
    <div class="col-lg">
        <?php
        while (have_posts()) :
            the_post();

            get_template_part('template-parts/post/content', get_post_format());

            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;

            the_post_navigation(array(
              'prev_text' => '<span class="screen-reader-text">' . __('Previous Post', 'joshadamboyd') . '</span><span aria-hidden="true" class="nav-subtitle">' . __('Previous', 'joshadamboyd') . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . joshadamboyd_get_svg(array('icon' => 'arrow-left')) . '</span>%title</span>',
              'next_text' => '<span class="screen-reader-text">' . __('Next Post', 'joshadamboyd') . '</span><span aria-hidden="true" class="nav-subtitle">' . __('Next', 'joshadamboyd') . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . joshadamboyd_get_svg(array('icon' => 'arrow-right')) . '</span></span>'
            ));
        endwhile;
        ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>
