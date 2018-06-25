            </div>

            <footer id="colophon" class="footer bg-dark site-footer" role="contentinfo">
                <div class="container">
                <?php
                get_template_part('template-parts/footer/footer', 'widgets');

                if (has_nav_menu('social')) : ?>
                    <nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e('Footer Social Links Menu', 'joshadamboyd'); ?>">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'social',
                            'menu_class'     => 'social-links-menu',
                            'depth'          => 1,
                            'link_before'    => '<span class="screen-reader-text">',
                            'link_after'     => '</span>' . joshadamboyd_get_svg(array('icon' => 'chain')),
                            ));
                        ?>
                    </nav>
                <?php endif;

                get_template_part('template-parts/footer/site', 'info');
                ?>
                </div>
            </footer>
        </div>
    </div>

    <?php wp_footer(); ?>

</body>
</html>
