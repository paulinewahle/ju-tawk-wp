<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <div class="entry-meta">
            <?php one_tone_meta_function();?>
        </div>
    </header>

    <div class="entry-content">
        <?php the_content(); ?>
        <?php wp_link_pages(array(
            'before' => '<div class"page-links">' . esc_html__('Pages:', 'one-tone-theme'),
            'after' => '</div>',
        )); ?>
    </div>

    <p>
        <a href="<?php the_permalink() ?>"> Read more </a>
    </p>

    <footer class="entry-footer">
        <?php one_tone_footer_function();
        ?>
    </footer>
    </article> <?php the_ID(); ?>