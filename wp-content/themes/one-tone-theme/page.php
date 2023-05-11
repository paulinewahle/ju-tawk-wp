<?php get_header(); ?>
<main>
    <h1> <?php the_title(); ?> </h1>
    <?php the_post_thumbnail(); ?>
    <?php the_content(); ?>
</main>

<?php get_footer(); ?>