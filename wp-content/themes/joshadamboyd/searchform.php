<?php $unique_id = esc_attr(uniqid('search-form-')); ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
  <label for="<?php echo $unique_id; ?>">
    <span class="screen-reader-text"><?php echo _x('Search for:', 'label', 'joshadamboyd'); ?></span>
  </label>

  <input type="search" id="<?php echo $unique_id; ?>" class="search-field" name="s"
         placeholder="<?php echo esc_attr_x('Search &hellip;', 'placeholder', 'joshadamboyd'); ?>"
         value="<?php echo get_search_query(); ?>" />

  <button type="submit" class="search-submit"><?php echo joshadamboyd_get_svg(array('icon' => 'search')); ?>
    <span class="screen-reader-text"><?php echo _x('Search', 'submit button', 'joshadamboyd'); ?></span>
  </button>
</form>
