<footer>
    <h2> One Tone </h2>
    <!-- <?php get_the_title(); ?> -->
    <nav>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'tertiary',
            'menu_class' => 'tertiary-menu',
        ));
        ?>
    </nav>
    <?php dynamic_sidebar('footer-widget-area'); ?>
</footer>
<?php wp_footer(); ?>
</body>

</html>
