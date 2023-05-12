<?php get_header(); ?>

<main>
    <?php if(have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article>
                <h1><?php the_title(); ?></h1>
                <?php the_post_thumbnail(); ?>
                <p class="post-meta"><?php printf(__('Posted on %s', 'one-tone-theme'), get_the_date(), get_the_author()); ?></p>
                <?php the_content(); ?>
            </article>
            <?php wp_link_pages(array(
            'before' => '<div class"page-links">' . esc_html__('Pages:', 'one-tone-theme'),
            'after' => '</div>',
            )); ?>
        <?php endwhile; ?>
    <?php else : ?>
        <p><?php esc:html_e('Sorry, no posts matched your criteria.', 'one-tone-theme'); ?></p>
    <?php endif; ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>