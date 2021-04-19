<?php
/**
 * Plugin Name:       WP Unsplash Image Background
 * Plugin URI:        https://kwante.com
 * Description:       Create a title div container with a random Unsplash image background, through a shortcode.
 * Version:           1.0.1
 * Author:            Nicolas Point
 * Author URI:        https://www.kwante.com/
 * Text Domain:       wp_unsplash_image_background
*/

/*
Plugins docs:
https://codex.wordpress.org/
https://developer.wordpress.org/plugins/
https://codex.wordpress.org/Widgets_API
*/

if(!defined('ABSPATH')){
    exit;
}

// Plugin's folder
$GLOBALS['plugin_folder']  = "wp_unsplash_image_background";

require_once( plugin_dir_path(__FILE__) . '/includes/plugins_scripts.php' );

require_once( plugin_dir_path(__FILE__) . '/includes/shortcode_image.php' );