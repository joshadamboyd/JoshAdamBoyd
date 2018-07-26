<?php get_header(); ?>

<main id="primary" class="main primary container error-404 not-found"
      role="main"
      aria-label="<?php esc_attr_e('Main', 'joshadamboyd'); ?>">
  <header class="page-header">
    <h1 class="page-title"><?php _e('Oops! That page can&rsquo;t be found.', 'joshadamboyd'); ?></h1>
  </header>

  <div class="row">
    <div class="col-lg">
      <p><?php _e('It looks like nothing was found at this location. Maybe try a search?', 'joshadamboyd'); ?></p>

        <?php get_search_form(); ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>
