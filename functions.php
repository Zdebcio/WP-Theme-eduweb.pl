<?php

if (!defined('LOVETOEAT_THEME_DIR')) {
    // define('LOVETOEAT_THEME_DIR', ABSPATH . 'wp-content/themes/' . get_template() . '/');
    define('LOVETOEAT_THEME_DIR', get_theme_root() . '/' . get_template() . '/');
}

if (!defined('LOVETOEAT_THEME_URL')) {
    define('LOVETOEAT_THEME_URL', WP_CONTENT_URL . '/themes/' . get_template() . '/');
}

require_once(realpath(LOVETOEAT_THEME_DIR . 'libs/postTypes.php'));
require_once(realpath(LOVETOEAT_THEME_DIR . 'libs/utils.php'));

add_theme_support('post-formats', ['gallery']);
add_theme_support('post-thumbnails', ['post', 'recipes', 'restaurants', 'foodfight']);

function printRestaurantCategories($post_id)
{
    printPostCategories($post_id, ['cousine-type', 'city']);
}

function printRanking($post_id)
{
    $rate = (int)get_post_meta($post_id, 'ranking', true);

    for ($i = 0; $i < 4; $i++) {
        if ($i < $rate) {
            echo '<li class="active"></li>';
        } else {
            echo '<li></li>';
        }
    }
}
