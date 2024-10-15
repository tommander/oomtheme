<?php
/**
 * The header.
 *
 * @package    OrderOfMass
 * @subpackage OOMTheme
 */

namespace TMD\OrderOfMass\Theme;

use TMD\OrderOfMass\Plugin\Parameters;

/**
 * Undocumented psalm suppress.
 *
 * @psalm-suppress InvalidGlobal
 */
global
	$oomtheme_l,
	$oomtheme_labels,
	$oomtheme_virtual_page,
	$oomtheme_bible,
	$oomtheme_calendar,
	$oomtheme_parameters,
	$oomtheme_mysteries;

$oomtheme_param_type = $oomtheme_parameters->get_parameter( Parameters::PARAMETER_TYPE );
$oomtheme_param_texts = $oomtheme_parameters->get_parameter( Parameters::PARAMETER_TEXTS );
$oomtheme_param_date = $oomtheme_parameters->get_parameter( Parameters::PARAMETER_DATE );
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
	  <h1><?php $oomtheme_l( 'Mass' ); ?></h1>
	</header>
	<nav>
		<div id="navSettings">
			<form name="mainNav" action="" method="GET">
			<div>
				<label for="TYPE_SELECTION"><?php $oomtheme_l( 'Type' ); ?></label>
				<select name="" id="TYPE_SELECTION">
				<?php $oomtheme_virtual_page->render_options( $oomtheme_param_type ); ?>
				</select>
			</div>
			<div>
				<label for="TEXTS_SELECTION"><?php $oomtheme_l( 'Texts' ); ?></label>
				<select id="TEXTS_SELECTION" name="">
				<?php $oomtheme_virtual_page->render_options_children( $oomtheme_param_type, $oomtheme_param_texts ); ?>
				</select>
			</div>
			<div>
				<label for="LABELS_SELECTION"><?php $oomtheme_l( 'Labels' ); ?></label>
				<select id="LABELS_SELECTION" name="labels">
				  <?php $oomtheme_labels->render_options(); ?>
				</select>
			</div>
			<div>
				<label for="DATE_SELECTION"><?php $oomtheme_l( 'Date' ); ?></label>
				<input type="date" name="date" id="DATE_SELECTION" value="<?php echo esc_attr( $oomtheme_param_date ); ?>">
			</div>
			<!--<div>
				<label for="BIBLE_SELECTION"><?php $oomtheme_l( 'Bible' ); ?></label>
				<select name="bible" id="BIBLE_SELECTION">
				<?php //$oomtheme_bible->render_options(); ?>
				</select>
			</div>-->
			</form>
		</div>
		<div id="navLegend">
			<span><span class="navLegendShort">P</span> = <?php $oomtheme_l( 'Priest' ); ?></span>
			<span><span class="navLegendShort">A</span> = <?php $oomtheme_l( 'All' ); ?></span>
			<span><span class="navLegendShort">R</span> = <?php $oomtheme_l( 'Reader' ); ?></span>
		</div>
		<div id="navDate">
			<div>
			<?php
			$oomtheme_l( $oomtheme_calendar->abbr_description( $oomtheme_calendar->date_abbr( $oomtheme_param_date ) ) );
			?>
			</div><div>
			<?php
			$oomtheme_l( 'Year' );
			$lectyear = $oomtheme_calendar->liturgical_year( $oomtheme_param_date );
			echo '&nbsp;' . esc_html( $oomtheme_calendar->year_cycle( $lectyear ) );
			?>
			</div><div>
			<?php
			$oomtheme_l( 'Week' );
			echo '&nbsp;' . esc_html( $oomtheme_calendar->week_cycle( $lectyear ) );
			?>
			</div><div>
			<?php
			$oomtheme_l( $oomtheme_mysteries->get_mystery_long( $oomtheme_mysteries->get_mystery( $oomtheme_param_date ) ) );
			?>
			</div>
		</div>
	</nav>
	<main class="<?php echo esc_attr( $oomtheme_param_type ); ?>">