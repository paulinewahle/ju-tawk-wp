<footer>
    
     <a href="/ju-tawk-wp/#"> <h1>  <?= get_bloginfo('name'); ?> </h1> </a>
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
