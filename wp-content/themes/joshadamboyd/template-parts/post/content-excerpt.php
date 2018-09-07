<?php
/**
 * Template part for displaying posts with excerpts
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php if ('post' === get_post_type()) : ?>
            <div class="entry-meta">
                <?php
                    echo joshadamboyd_time_link();
                ?>
            </div>
        <?php endif; ?>

        <?php
        if (is_front_page() && ! is_home()) {
            // The excerpt is being displayed within a front page section, so it's a lower hierarchy than h2.
            the_title(sprintf('<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h3>');
        } else {
            the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>');
        } ?>
    </header>

    <div class="entry-summary">
        <?php the_excerpt(); ?>
    </div>
</article>
