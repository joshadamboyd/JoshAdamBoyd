<?php get_header(); ?>

<main id="primary" class="main primary container page"
      role="main"
      aria-label="<?php esc_attr_e('Main', 'joshadamboyd'); ?>">
  <div class="row">
    <div class="col-lg">
        <?php
        while (have_posts()) :
            the_post();
            get_template_part('template-parts/page/content', 'page');

            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
        endwhile;
        ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>
