<?php do_action('ultima_qodef_before_top_navigation'); ?>

    <nav data-navigation-type='float' class="qodef-vertical-menu qodef-vertical-dropdown-float">
        <?php
        wp_nav_menu(array(
            'theme_location'  => 'main-navigation',
            'container'       => '',
            'container_class' => '',
            'menu_class'      => '',
            'menu_id'         => '',
            'fallback_cb'     => 'top_navigation_fallback',
            'link_before'     => '<span>',
            'link_after'      => '</span>',
            'walker'          => new UltimaQodefLeftRightNavigationWalker()
        ));
        ?>
    </nav>

<?php do_action('ultima_qodef_after_top_navigation'); ?>