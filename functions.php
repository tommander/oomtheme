<?php
/**
 * The functions.
 *
 * @package    OrderOfMass
 * @subpackage OOMTheme
 * @since      1.0
 */

/**
 * Undocumented function
 *
 * @return void
 */
function oomtheme_enqueuescripts() {
	$js_file = get_theme_file_uri( 'main.js' );
	$css_file = get_stylesheet_uri();
	wp_enqueue_script( 'oomtheme-main-js', $js_file, array(), microtime(), array() );
	wp_enqueue_style( 'oomtheme-main-css', $css_file, array(), microtime(), 'all' );
}

add_action( 'wp_enqueue_scripts', 'oomtheme_enqueuescripts' );
