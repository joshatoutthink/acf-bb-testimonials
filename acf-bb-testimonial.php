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


function load_acf_testimonials(){
	$bb_exists = class_exists('FLBuilder');
	$acf_exists = class_exists( 'acf_field_repeater' );

if ( $bb_exists && $acf_exists ) {
	require_once TESTI_BB_DIR . 'modules/acf-testimonials/acf-testimonials.php';
} else {
		add_action('admin_notices', 'missing_plugin_notice');	
	}
}

function missing_plugin_notice(){
	$bb_exists = class_exists('FLBuilder');
	$acf_exists = class_exists( 'acf_field_repeater' );
	//Gets the error message to display
	$missing_plugin = "";
	if( $bb_exists == $acf_exists  ){
		$missing_plugin =	"Need to add beaverbuilder and ACF Pro"; 
	} elseif ( $bb_exists > $acf_exists ){
			$missing_plugin = "Need to add ACF"; 
	}else{
		$missing_plugin = "Need to add Beaver Builder";
	}


	?>
	<div class="notice notice-warning is-dismissible">
			<p><?php echo $missing_plugin; ?></p>
	</div>
	<?php
}

add_action('init','load_acf_testimonials');
