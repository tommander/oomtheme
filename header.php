<?php
/**
 * The header.
 *
 * @package    OrderOfMass
 * @subpackage OOMTheme
 * @since      1.0
 */

use TMD\OrderOfMass\Plugin\Bible;
use TMD\OrderOfMass\Plugin\Calendar;
use TMD\OrderOfMass\Plugin\Labels;
use TMD\OrderOfMass\Plugin\Lectionary;
use TMD\OrderOfMass\Plugin\Parameters;
use TMD\OrderOfMass\Plugin\VirtualPage;
use TMD\OrderOfMass\Plugin\Mysteries;

$oom_plugin_in_theme_main = \TMD\OrderOfMass\Plugin\Main::new();
$ctnr = $oom_plugin_in_theme_main->container;
/**
 * Undocumented var.
 *
 * @var Calendar Calendar
 */
$ctnr_calendar = $ctnr->get( Calendar::class );
/**
 * Undocumented var.
 *
 * @var Parameters Parameters
 */
$ctnr_parameters = $ctnr->get( Parameters::class );
/**
 * Undocumented var.
 *
 * @var VirtualPage VirtualPage
 */
$ctnr_virtual_page = $ctnr->get( VirtualPage::class );
/**
 * Undocumented var.
 *
 * @var Labels Labels
 */
$ctnr_labels = $ctnr->get( Labels::class );
/**
 * Undocumented var.
 *
 * @var Lectionary Lectionary
 */
$ctnr_lectionary = $ctnr->get( Lectionary::class );
/**
 * Undocumented var.
 *
 * @var Bible Bible
 */
$ctnr_bible = $ctnr->get( Bible::class );
/**
 * Undocumented var.
 *
 * @var Mysteries Mysteries
 */
$ctnr_mysteries = $ctnr->get( Mysteries::class );

$current_type = $ctnr_parameters->get_parameter( Parameters::PARAMETER_TYPE );
$current_texts = $ctnr_parameters->get_parameter( Parameters::PARAMETER_TEXTS );
$current_labels = $ctnr_parameters->get_parameter( Parameters::PARAMETER_LABELS );
$current_date = $ctnr_parameters->get_parameter( Parameters::PARAMETER_DATE );
$current_bible = $ctnr_parameters->get_parameter( Parameters::PARAMETER_BIBLE );

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo( 'name' ); ?></title>
	<?php wp_head(); ?>
	<style>
		header {
			background-image: url('<?php echo esc_attr( get_stylesheet_directory_uri() . '/assets/img/church.png' ); ?>');
		}
	</style>
  </head>
  <body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header>
	  <h1><?php esc_html_e( 'Mass', 'order-of-mass' ); ?></h1>
	</header>
	<nav>
		<div id="navSettings">
			<form name="mainNav" action="<?php echo esc_attr( get_permalink() ); ?>" method="GET">
			<div>
				<label for="TYPE_SELECTION"><?php esc_html_e( 'Type', 'order-of-mass' ); ?></label>
				<select name="" id="TYPE_SELECTION">
				<?php $ctnr_virtual_page->render_options( $current_type ); ?>
				</select>
			</div>
			<div>
				<label for="TEXTS_SELECTION"><?php esc_html_e( 'Texts', 'order-of-mass' ); ?></label>
				<select id="TEXTS_SELECTION" name="">
				<?php $ctnr_virtual_page->render_options_children( $current_type, $current_texts ); ?>
				</select>
			</div>
			<div>
				<label for="LABELS_SELECTION"><?php esc_html_e( 'Labels', 'order-of-mass' ); ?></label>
				<select id="LABELS_SELECTION" name="labels">
				  <?php $ctnr_labels->render_options(); ?>
				</select>
			</div>
			<div>
				<label for="DATE_SELECTION"><?php esc_html_e( 'Date', 'order-of-mass' ); ?></label>
				<input type="date" name="date" id="DATE_SELECTION" value="<?php echo esc_attr( $current_date ); ?>">
			</div>
			<div>
				<label for="BIBLE_SELECTION"><?php esc_html_e( 'Bible', 'order-of-mass' ); ?></label>
				<select name="bible" id="BIBLE_SELECTION">
				<?php $ctnr_bible->render_options(); ?>
				</select>
			</div>
			</form>
		</div>
		<div id="navLegend">
			<span><span class="navLegendShort">P</span> = <?php esc_html_e( 'Priest', 'order-of-mass' ); ?></span>
			<span><span class="navLegendShort">A</span> = <?php esc_html_e( 'All', 'order-of-mass' ); ?></span>
			<span><span class="navLegendShort">R</span> = <?php esc_html_e( 'Reader', 'order-of-mass' ); ?></span>
		</div>
		<div id="navDate">
			<div>
			<?php
			echo esc_html( $ctnr_calendar->abbr_description( $ctnr_calendar->date_abbr( $current_date ) ) );
			?>
			</div><div>
			<?php
			echo 'Year ';
			$lectyear = $ctnr_calendar->liturgical_year( $current_date );
			echo esc_html( $ctnr_calendar->year_cycle( $lectyear ) );
			?>
			</div><div>
			<?php
			echo 'Week ';
			echo esc_html( $ctnr_calendar->week_cycle( $lectyear ) );
			?>
			</div><div>
			<?php
			echo esc_html( $ctnr_mysteries->get_mystery_long( $ctnr_mysteries->get_mystery( $current_date ) ) );
			?>
			</div>
		</div>
		<div id="navNavigation">
			<div><a href=""></a></div>
		</div>
	</nav>
	<main class="<?php echo esc_attr( $current_type ); ?>">

