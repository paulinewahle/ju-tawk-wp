<?php get_header(); ?>

<main id="main" class="site-main">
<?php
// Sart the loop
while (have_posts()) : the_post();
    //Get rhe template art for displaying content 
    get_template_part('template-parts/content', get_post_type());
endwhile;

//Display pagination links, if necessary
the_posts_pagination(array(
    'prev_text' => __('Previous page', 'one-tone-theme'),
    'next_text' => __('Next page', 'one-tone-theme'),
    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'one-tone-theme') . ' </span>',
));
?>

</main> <!-- #main -->

<?php get_footer(); ?>