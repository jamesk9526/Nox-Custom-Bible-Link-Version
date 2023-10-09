<?php
/**
 * Plugin Name: Nox Custom Bible Link Version
 * Plugin URI: https://jamesnox.com
 * Description: A plugin to show custom Bible verse popups.
 * Requires at least: 5.5
 * Requires PHP: 7.0
 * Author: James Anthony Knox - Jamesnox.com
 * Version: 1.5
 * Text Domain: nox-custom-bible
 * Domain Path: /languages
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

// Plugin version.
if (!defined('NCL_VERSION')) {
    define('NCL_VERSION', '1.5');
}

// Plugin Folder Path.
if (!defined('NCL_PLUGIN_DIR')) {
    define('NCL_PLUGIN_DIR', plugin_dir_path(__FILE__));
}

// Plugin Folder URL.
if (!defined('NCL_PLUGIN_URL')) {
    define('NCL_PLUGIN_URL', plugin_dir_url(__FILE__));
}

// Plugin Root File.
if (!defined('NCL_PLUGIN_FILE')) {
    define('NCL_PLUGIN_FILE', __FILE__);
}

// Enqueue scripts and styles.
function ncl_enqueue_scripts()
{
    // Enqueue the main script (nbclink.js)
    wp_enqueue_script('ncl-js', NCL_PLUGIN_URL . 'js/nbclink.js', array('jquery'), NCL_VERSION, true);
    
    // Localize the script with necessary data
    wp_localize_script('ncl-js', 'ncl_params', array(
        'NCL_PLUGIN_URL' => NCL_PLUGIN_URL,
    ));

    // Enqueue the style (nbclink.css)
    wp_enqueue_style('ncl-css', NCL_PLUGIN_URL . 'nbclink.css', array(), NCL_VERSION);

// Enqueue the JSON configuration file
    wp_enqueue_script('block-config', NCL_PLUGIN_URL . 'nox-ref-block-config.json', array(), NCL_VERSION, true);


    // Localize the nbclink-references.js script with necessary data (if needed)
    // You can add localization data here if required by your JavaScript logic.
}
add_action('wp_enqueue_scripts', 'ncl_enqueue_scripts');

// Admin menu for settings.
function ncl_admin_menu()
{
    add_menu_page('Nox Custom Bible Link Version', 'Nox Custom Bible Link Version', 'manage_options', 'nox-custom-bible-link', 'ncl_admin_page');
}
add_action('admin_menu', 'ncl_admin_menu');

// Admin page for settings.
function ncl_admin_page()
{
    ?>
    <div class="wrap">
        <h2>Nox Custom Bible Link Version Settings</h2>
        <!-- Add your settings form here -->
    </div>
    <?php
}

// Check if slug exists.
function ncl_slug_exists($post_slug)
{
    $posts = get_posts(array(
        'name' => $post_slug,
        'post_type' => 'page',
        'post_status' => 'publish',
        'posts_per_page' => 1
    ));
    return count($posts) ? true : false;
}

// Enqueue your custom Gutenberg block script.
function enqueue_custom_gutenberg_block_script() {
    wp_enqueue_script(
        'nox-ref-block', // Handle name
        plugin_dir_url(__FILE__) . '/js/nox-ref-block.js', // Path to your JavaScript file within the "js" subdirectory
        array('wp-blocks', 'wp-editor', 'wp-components', 'wp-i18n'), // Dependencies
        filemtime(plugin_dir_path(__FILE__) . '/js/nox-ref-block.js') // Version (optional)
    );
}
add_action('enqueue_block_editor_assets', 'enqueue_custom_gutenberg_block_script');
?>
