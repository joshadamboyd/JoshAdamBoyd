<section class="hud">
  <div class="jumbotron">
    <div class="container">
      <?php if (is_front_page() || joshadamboyd_is_frontpage()) : ?>
        <?php the_custom_header_markup(); ?>
      <?php elseif ((is_single() || (is_page() && ! joshadamboyd_is_frontpage())) && has_post_thumbnail(get_queried_object_id())) : ?>
        <div class="single-featured-image-header">
          <?php echo get_the_post_thumbnail(get_queried_object_id(), 'joshadamboyd-featured-image'); ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>
