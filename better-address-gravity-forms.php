<?php
/*
Plugin Name: 	Better Address for Gravity Forms
Plugin URI: 	https://wordpress.org/plugins/better-address-for-gravity-forms
Description:	Easily include States, Provinces, Regions and more into the address fields in Gravity Forms.
Version: 		1.0.0
Author: 		Rocket Apps
Author URI: 	https://rocketapps.com.au/
Text Domain: 	gformba
Domain Path: 	/languages/
*/

/* Look for translation file */
function load_gf_better_address_textdomain() {
    load_plugin_textdomain( 'gformba', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'load_gf_better_address_textdomain' );

/* Gravity Forms Add-on */
define( 'GF_STATES_PROVINCES_ADDON_VERSION', '1.0' );

add_action( 'gform_loaded', array( 'GF_States_Provinces_Bootstrap', 'load' ), 5 );

class GF_States_Provinces_Bootstrap {

    public static function load() {

        if ( ! method_exists( 'GFForms', 'include_addon_framework' ) ) {
            return;
        }

        require_once( 'class-better-address-gravity-forms.php' );

        GFAddOn::register( 'GravityFormsBetterAddress' );
    }

}

function gf_better_address() {
    return GravityFormsBetterAddress::get_instance();
}

/* Add custom CSS to admin */
function bagd_admin_style() {
    $plugin_data 		= get_plugin_data( __FILE__ );
    $plugin_version 	= $plugin_data['Version'];
	$plugin_directory	= plugins_url('css/', __FILE__ );
	$subview 			= isset($_GET['subview']);
	wp_enqueue_style('bagf-admin-style', $plugin_directory . 'bagf-admin-style.css', '', $plugin_version);
}
add_action('admin_enqueue_scripts', 'bagd_admin_style');