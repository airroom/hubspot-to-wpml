<?php

/**
 * @link              https://github.com/airroom/hubspot-to-wpml
 * @since             0.1.0
 * @package           hubspot_wpml
 *
 * @wordpress-plugin
 * Plugin Name:       HubSpot to WPML
 * Plugin URI:        https://github.com/airroom/hubspot-to-wpml
 * Description:       Yay
 * Version:           9.1.0
 * Author:            Romário S. Lima
 * Author URI:        http://github.com/airroom
 * License:           Beerware
 * License URI:       https://github.com/airroom/hubspot-to-wpml/blob/master/LICENSE
 * Text Domain:       hubspot-to-wpml
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-hubspot-to-wpml-activator.php
 */
function activate_hubspot_wpml() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-hubspot-to-wpml-activator.php';
	Hubspot_Wpml_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-hubspot-to-wpml-deactivator.php
 */
function deactivate_hubspot_wpml() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-hubspot-to-wpml-deactivator.php';
	Hubspot_Wpml_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_hubspot_wpml' );
register_deactivation_hook( __FILE__, 'deactivate_hubspot_wpml' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-hubspot-to-wpml.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    0.1.0
 */
function run_hubspot_wpml() {

	$plugin = new Hubspot_Wpml();
	$plugin->run();

}
run_hubspot_wpml();
