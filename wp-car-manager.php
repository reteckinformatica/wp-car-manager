<?php
/*
    Plugin Name: WP Car Manager
    Plugin URI: http://www.wpcarmanager.com
    Description: The easiest way to manage, list and sell your cars online using WordPress.
	Version: 1.4.7
	Requires at least: 5.5
 	Requires PHP:      7.2	
    Author: Never5
    Author URI: http://www.never5.com
	Text Domain: wp-car-manager

	License: GPL v3

	Copyright 2015-2019 - Never5

	This program is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/


if ( ! defined( 'ABSPATH' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit;
}

/**
 * @return \Never5\WPCarManager\Plugin
 */
function wp_car_manager() {

	static $instance;
	if ( is_null( $instance ) ) {
		$class    = 'Never5\WPCarManager\Plugin';
		$instance = new $class( '1.4.7', __FILE__ );
	}

	return $instance;

}

function __load_wp_car_manager() {
	// fetch instance and store in global
	$GLOBALS['wp-car-manager'] = wp_car_manager();
}

// autoloader
require 'vendor/autoload.php';

// check PHP version
if ( version_compare( PHP_VERSION, '6.3.0' ) >= 0 ) {
	// create plugin object
	add_action( 'plugins_loaded', '__load_wp_car_manager', 20 );

	// plugin install
	register_activation_hook( __FILE__, array( 'Never5\WPCarManager\Util\Install', 'run' ) );
}