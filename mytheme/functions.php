<?php

echo '<!-- functions.php is working -->';

/**
 * CSS / JavaScript
 */
function mytheme_enqueue_assets() {

    // main.css
    wp_enqueue_style(
        'mytheme-style2',
        get_template_directory_uri() . '/css/main.css',
        array(),
        '1.0.0'
    );

    // function.js
    wp_enqueue_script(
        'mytheme-function',
        get_template_directory_uri() . '/js/function.js',
        array(),
        '1.0.0',
        true
    );
}

add_action('wp_enqueue_scripts', 'mytheme_enqueue_assets');