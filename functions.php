<?php
/**
 * The functions.
 *
 * @package    OrderOfMass
 * @subpackage OOMTheme
 * @since      1.0
 */

namespace TMD\OrderOfMass\Theme;

use TMD\OrderOfMass\Plugin\Main;
use TMD\OrderOfMass\Plugin\Bible;
use TMD\OrderOfMass\Plugin\Calendar;
use TMD\OrderOfMass\Plugin\Labels;
use TMD\OrderOfMass\Plugin\Lectionary;
use TMD\OrderOfMass\Plugin\Parameters;
use TMD\OrderOfMass\Plugin\VirtualPage;
use TMD\OrderOfMass\Plugin\Mysteries;

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

if (
	true !== class_exists( Main::class ) ||
	true !== class_exists( Bible::class ) ||
	true !== class_exists( Calendar::class ) ||
	true !== class_exists( Labels::class ) ||
	true !== class_exists( Lectionary::class ) ||
	true !== class_exists( Parameters::class ) ||
	true !== class_exists( VirtualPage::class ) ||
	true !== class_exists( Mysteries::class )
) {
	add_action(
		'admin_notices',
		function () {
			printf(
				'<div class="error"><p>%s</p></div',
				'Plugin "OoM Plugin" seems to be inactive.'
			);
		}
	);
	die();
}

add_action( 'wp_enqueue_scripts', oomtheme_enqueuescripts::class );

$oomtheme_main = Main::new();
$oomtheme_ctnr = $oomtheme_main->container;
/**
 * Undocumented var.
 *
 * @var Calendar
 */
$oomtheme_calendar = $oomtheme_ctnr->get( Calendar::class );
/**
 * Undocumented var.
 *
 * @var Parameters
 */
$oomtheme_parameters = $oomtheme_ctnr->get( Parameters::class );
/**
 * Undocumented var.
 *
 * @var VirtualPage
 */
$oomtheme_virtual_page = $oomtheme_ctnr->get( VirtualPage::class );
/**
 * Undocumented var.
 *
 * @var Labels
 */
$oomtheme_labels = $oomtheme_ctnr->get( Labels::class );
/**
 * Undocumented var.
 *
 * @var Bible
 */
$oomtheme_bible = $oomtheme_ctnr->get( Bible::class );
/**
 * Undocumented var.
 *
 * @var Mysteries
 */
$oomtheme_mysteries = $oomtheme_ctnr->get( Mysteries::class );
/**
 * Undocumented function
 *
 * @param string $label Label.
 *
 * @return void
 */
$oomtheme_l = function ( string $label ): void {
	global $oomtheme_labels;
	echo wp_kses( $oomtheme_labels->shortcode_oomlabel( array(), $label, '' ), 'post' );
};
