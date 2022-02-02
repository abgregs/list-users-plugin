<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           List_Users
 *
 * @wordpress-plugin
 * Plugin Name:       List Users
 * Plugin URI:        http://example.com/list-users-uri/
 * Description:       A simple plugin that creates a page and displays a list of users.
 * Version:           1.0.0
 * Author:            Your Name or Your Company
 * Author URI:        http://example.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       list-users
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'LIST_USERS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-list-users-activator.php
 */
function activate_list_users() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-list-users-activator.php';
	List_Users_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-list-users-deactivator.php
 */
function deactivate_list_users() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-list-users-deactivator.php';
	List_Users_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_list_users' );
register_deactivation_hook( __FILE__, 'deactivate_list_users' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-list-users.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_list_users() {

	$plugin = new List_Users();
	$plugin->run();

}
run_list_users();
