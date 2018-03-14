<?php
/**
 * Displays top navigation
 *
 * @subpackage Josh_Adam_Boyd
 * @since 1.0
 * @version 1.2
 */

?>
<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'joshadamboyd' ); ?>">
  <button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
    <?php
    echo joshadamboyd_get_svg( array( 'icon' => 'bars' ) );
    echo joshadamboyd_get_svg( array( 'icon' => 'close' ) );
    _e( 'Menu', 'joshadamboyd' );
    ?>
  </button>

  <?php wp_nav_menu( array(
    'theme_location' => 'top',
    'menu_id'        => 'top-menu',
  ) ); ?>

  <?php if ( ( joshadamboyd_is_frontpage() || ( is_home() && is_front_page() ) ) && has_custom_header() ) : ?>
    <a href="#content" class="menu-scroll-down"><?php echo joshadamboyd_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'joshadamboyd' ); ?></span></a>
  <?php endif; ?>
</nav><!-- #site-navigation -->
