    </section>

    <footer class="footer navbar navbar-default navbar-fixed-bottom">
      <div class="container">
        <p class="navbar-text pull-left">
          <div class="text-center">
            All images copyright Joshua Boyd <?php echo date("Y"); ?> &copy;
          </div>
        </p>

        <?php if (has_nav_menu('social')) : ?>
            <?php
              wp_nav_menu(array(
                'theme_location'  => 'social',
                'menu_class'      => 'social-links-menu',
                'depth'           => 1,
                'container'       => 'div',
                'container_class' => 'menu-social-container text-right',
              ));
            ?>
        <?php endif; ?>
      </div>
    </footer>

    <?php wp_footer(); ?>

  </body>
</html>
