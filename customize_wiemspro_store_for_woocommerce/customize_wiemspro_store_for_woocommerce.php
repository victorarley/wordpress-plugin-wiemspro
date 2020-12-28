<?php

/**
 * Customize Wiemspro Store for Woocommerce
 * 
 * Este plugin añade las siguientes funcionalidades al plugin de Woocommerce:
 *  - Creación de productos personalizados.
 *  - Llamada a nuestros servicios al terminar una compra.
 *  - Oculta categorias de productos por roles de usuarios. 
 *
 * @wordpress-plugin
 * Plugin Name:       Customize Wiemspro Store for Woocommerce 
 * Description:       Este plugin añade las siguientes funcionalidades al plugin de Woocommerce:
 *  - Creación de productos personalizados.
 *  - Llamada a nuestros servicios al terminar una compra.
 *  - Oculta categorias de productos por roles de usuarios.
 * Version:           1.0.0
 * Author:            Wimemspro
 * Author URI:        https://wiemspro.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt 
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
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-plugin-name-activator.php
 */
function activate_plugin_name() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-plugin-name-activator.php';
	Plugin_Name_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-plugin-name-deactivator.php
 */
function deactivate_plugin_name() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-plugin-name-deactivator.php';
	Plugin_Name_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_plugin_name' );
register_deactivation_hook( __FILE__, 'deactivate_plugin_name' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-plugin-name.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_plugin_name() {

	$plugin = new Plugin_Name();
	$plugin->run();

}
run_plugin_name();
