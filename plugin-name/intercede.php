<?php

/**
 * Plugin Name: Intercede
 * Plugin URI:  http://intercede.com
 * Description: Effective management of prayer requests and praise reports, with captcha option on the prayer submission form.
 * Version:     1.0.0
 * Author:      Victor Aigbeghian
 * Author URI:  http://intercede.com
 * Donate link: http://intercede.com
 * License:     GPLv2
 * Text Domain: intercede
 * Domain Path: /languages
 */

/**
 * Copyright (c) 2016 Victor Aigbeghian (email : prayeraltar365@gmail.com)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2 or, at
 * your discretion, any later version, as published by the Free
 * Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Plugin version.
if ( ! defined( 'INTERCEDE_VERSION' ) ) {
	define( 'INTERCEDE_VERSION', '1.0.0' );
}

// Plugin Folder Path.
if ( ! defined( 'INTERCEDE_PLUGIN_DIR' ) ) {
	define( 'INTERCEDE_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
}
// Plugin Folder URL.
if ( ! defined( 'INTERCEDE_PLUGIN_URL' ) ) {
	define( 'INTERCEDE_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
}

// Plugin Root File.
if ( ! defined( 'INTERCEDE_PLUGIN_FILE' ) ) {
	define( 'INTERCEDE_PLUGIN_FILE', __FILE__ );
}
/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-intercede-activator.php
 */
function activate_intercede() {
	require_once INTERCEDE_PLUGIN_DIR . 'includes/class-intercede-activator.php';
	Intercede_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-intercede-deactivator.php
 */
function deactivate_intercede() {
	include_once INTERCEDE_PLUGIN_DIR . 'includes/class-intercede-deactivator.php';
	Intercede_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_intercede' );
register_deactivation_hook( __FILE__, 'deactivate_intercede' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
include_once INTERCEDE_PLUGIN_DIR . 'includes/class-intercede.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function PRF() {

	$intercede = new Intercede();
	$intercede->run();

}
PRF();
