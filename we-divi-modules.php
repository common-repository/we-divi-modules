<?php
/*
Plugin Name: We Divi Modules
Plugin URI:  https://webextent.net
Description: A simple but useful adons by webextent for Divi users :)
Version:     1.0.1
Author:      Md Tanjid
Author URI:  https://www.linkedin.com/in/md-tanjid-968523ba/
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wedivi-we-divi-modules
Domain Path: /languages

We Divi Modules is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

We Divi Modules is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with We Divi Modules. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/


if ( ! function_exists( 'wedivi_initialize_extension' ) ):
/**
 * Creates the extension's main class instance.
 *
 * @since 1.0.0
 */
function wedivi_initialize_extension() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/WeDiviModules.php';
}
add_action( 'divi_extensions_init', 'wedivi_initialize_extension' );
endif;
function wedivi_init_cb(){
	$wedivi_dir_url = plugin_dir_url( __FILE__ );

	wp_enqueue_style( 'icon-style', $wedivi_dir_url . '/icons/style.css' );

	
}
add_action('wp_enqueue_scripts', 'wedivi_init_cb');
