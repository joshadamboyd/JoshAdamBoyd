<?php
if (!is_active_sidebar('sidebar-1')) {
    return;
} ?>

<aside id="secondary" class="sidebar secondary container widget-area"
       role="complementary"
       aria-label="<?php esc_attr_e('Sidebar', 'joshadamboyd'); ?>">
    <?php dynamic_sidebar('sidebar-1'); ?>
</aside>
