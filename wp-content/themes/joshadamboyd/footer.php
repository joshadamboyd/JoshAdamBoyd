    </section>

    <footer class="footer">
      <div class="container-fluid">
        <div class="container">
          <div class="row py-3">
            <div class="col-md-5 text-right">
              <?php if (has_nav_menu('social')) : ?>
                  <?php
                    wp_nav_menu(array(
                      'theme_location'  => 'social',
                      'menu_class'      => 'social-links-menu',
                      'depth'           => 1,
                      'container'       => 'div',
                      'container_class' => 'menu-social-container pull-right',
                    ));
                  ?>
              <?php endif; ?>
            </div>

            <div class="col-md-7 order-first">
              <p class="text-white">All images copyright Joshua Boyd <?php echo date("Y"); ?> &copy;</p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <?php wp_footer(); ?>

  </body>
</html>
