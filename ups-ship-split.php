<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://printingsolutions.com
 * @since             1.0.0
 * @package           ups_ship_split
 *
 * @wordpress-plugin
 * Plugin Name:       UPS Ship Split 
 * Plugin URI:        https://printingsolutions.com	 
 * Description:       This plugin allows for items weighing more than a certain weight to be shipped in multiple packages
 * Version:           1.0.0
 * Author:            Printing Solutions
 * Author URI:        https://printingsolutions.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ups-ship-split
 * Domain Path:       /languages
 */


 require_once('ups-ship-split-functions.php');

// $ship_split = new Ups_Ship_Split;