<?php
/**
 * ------------------------------------------------------------------------
 * Theme's CSS Assets
 * ------------------------------------------------------------------------
 * This file is for registering your theme's stylesheets. In here you
 * should also deregister all unwanted assets which can be
 * shiped with various third-parity plugins.
 */

if ( ! function_exists( 'zadanie_register_styles' ) ) {
	/**
	 * Registers theme's CSS styles.
	 *
	 * @todo Change function prefix to your textdomain.
	 * @todo Update prefix in the hook function and if statement.
	 *
	 * @return void
	 */
	function zadanie_register_styles() {
		$asset_ver = 1.0;

		wp_enqueue_style( 'style-name', get_stylesheet_uri() );
		wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/public/css/app.css', false, $asset_ver );
	}
}
add_action( 'wp_enqueue_scripts', 'zadanie_register_styles' );
