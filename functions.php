<?php
add_theme_support('menus');
function register_theme_menus() {
    register_nav_menus(
            array(
                'primary-menu' => __('Primary Menu')
            )
    );
}
add_action('init', 'register_theme_menus');

