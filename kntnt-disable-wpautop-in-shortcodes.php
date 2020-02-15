<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Kntnt  Disable Wpautop in Shortcodes
 * Plugin URI:        https://www.kntnt.com/
 * Description:       Disables wpautop in shortcodes.
 * Version:           1.0.0
 * Author:            Thomas Barregren
 * Author URI:        https://www.kntnt.com/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 */

defined( 'ABSPATH' ) || die;

// See https://stackoverflow.com/a/14685465
remove_filter('the_content', 'wpautop');
add_filter('the_content', 'wpautop', 99);
add_filter('the_content', 'shortcode_unautop', 100);
