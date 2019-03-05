<?php
/**
 * Plugin Name:     Force to use jQuery 1.12.4
 * Description:     A simple plugin forces WordPress to use jQuery 1.12.4 and jQuery-migrate 1.4.1 from <a href="https://cdnjs.com/" target=_blank">https://cdnjs.com</a>.
 * Version:         0.1.00
 * Plugin URI:      https://github.com/glebkema/wp-force-to-use-jquery-1-12-4
 * Author:          Gleb Kemarsky
 * Author URI:      http://glebkema.ru/
 */


//**** abort, if this file is called directly
if ( ! defined( 'WPINC' ) ) {
	die;
}


//**** force to use these versions of jQuery and jQuery-migrate
add_action( 'wp_enqueue_scripts', 'glebkema_jquery_core_version', 999 );  // NB: 999
function glebkema_jquery_core_version() {
	if ( ! is_admin() ) {
		$version_jquery = '1.12.4';
		$version_jquery_migrate = '1.4.1';

		$handle_jquery = 'jquery';
		$handle_jquery_migrate = 'jquery-migrate';

		wp_deregister_script( $handle_jquery );
		wp_deregister_script( $handle_jquery_migrate );

		wp_register_script( $handle_jquery,
			"https://cdnjs.cloudflare.com/ajax/libs/jquery/$version_jquery/jquery.min.js",
			false, $version_jquery );
		wp_enqueue_script( $handle_jquery_migrate,
			"https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/$version_jquery_migrate/jquery-migrate.min.js",
			array( $handle_jquery ), $version_jquery_migrate );
	}
}
