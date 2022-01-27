<?php
/**
 * Plugin Name: Acf to Beaver Builder Testimonials
 * Plugin URI: https://www.wpbeaverbuilder.com/?utm_medium=bb&utm_source=plugins-admin-page&utm_campaign=plugins-admin-uri
 * Description: Acf fields used in testimonials
 * License: GNU General Public License v2.0
 * Text Domain: bb-testi
 */


define( 'TESTI_BB_DIR', plugin_dir_path( __FILE__ ) );
define( 'TESTI_BB_URL', plugins_url( '/', __FILE__ ) );

require_once TESTI_BB_DIR . 'stubs.php';//DELETE WHEN DONE

function load_acf_testimonials(){
	if ( class_exists('FLBuilder') ) {
		require_once TESTI_BB_DIR . 'modules/acf-testimonials/acf-testimonials.php';
	}
}

add_action('init','load_acf_testimonials');

