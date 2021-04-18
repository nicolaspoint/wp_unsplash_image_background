<?php

// euqueue scripts
function plugin_enqueue_files() {
    // CSS
    wp_enqueue_style( 'plugin_styles', plugins_url() . '/' . $GLOBALS['plugin_folder'] . '/css/styles.css');

    // SCRIPTS
    wp_enqueue_script( 'plugin_scripts', plugins_url() . '/' . $GLOBALS['plugin_folder'] . '/js/main.js', '', '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'plugin_enqueue_files');