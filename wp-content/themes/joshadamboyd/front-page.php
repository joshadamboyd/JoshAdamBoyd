<?php get_header(); ?>

<main id="primary" class="main primary container front-page"
      role="main"
      aria-label="<?php esc_attr_e('Main', 'joshadamboyd'); ?>">
  <div class="row">
    <div class="col-lg">
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                get_template_part('template-parts/page/content', 'front-page');
            endwhile;
        else :
            get_template_part('template-parts/post/content', 'none');
        endif; ?>

        <?php
        if (0 !== joshadamboyd_panel_count() || is_customize_preview()) :
            $num_sections = apply_filters('joshadamboyd_front_page_sections', 4);
            global $joshadamboydcounter;

            for ($i = 1; $i < (1 + $num_sections); $i++) {
                $joshadamboydcounter = $i;
                joshadamboyd_front_page_section(null, $i);
            }
        endif; ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>
