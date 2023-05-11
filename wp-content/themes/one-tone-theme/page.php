
<?php get_header(); ?>
<main>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <?php the_post_thumbnail(); ?> 
            <article>
                <?php the_content(); ?>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p><?php esc_html_e('Sorry, no pages matched your criteria.', 'my-custom-theme'); ?></p>
    <?php endif; ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>