<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * Dashboard. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://www.optimizepress.com/
 * @since             1.0.0
 * @package           Op_Helpdesk_Fix
 *
 * @wordpress-plugin
 * Plugin Name:       OptimizePress Heldesk fix
 * Plugin URI:        http://www.optimizepress.com/
 * Description:       Enques Helpdesk styles for Live Editor pages
 * Version:           1.0.0
 * Author:            OptimizePress
 * Author URI:        http://www.optimizepress.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       op-helpdesk-fix
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}
add_action('wp_print_scripts' , 'op_helpdesk_styles', 99);

function op_helpdesk_styles(){
    if (function_exists('is_le_page')){
        if (is_le_page() || defined('OP_LIVEEDITOR')){
            wp_enqueue_script( 'hsd' );
            wp_enqueue_style( 'hsd' );
        }
    }
}