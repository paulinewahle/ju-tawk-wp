<footer>
    <nav>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'secondary',
            'menu_class' => 'secondary-menu',
        ));
        ?>
    </nav>
    <?php the:title(); ?>
    <?php dynamic_sidebar('footer-widget-area'); ?>
</footer>
<?php wp_footer(); ?>
</body>

</html>
