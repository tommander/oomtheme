<?php
/**
 * The main template file
 *
 * @package    OrderOfMass
 * @subpackage Theme
 * @since      1.0
 */

get_header(); ?>

<?php if ( is_home() === true && is_front_page() !== true && empty( single_post_title( '', false ) ) !== true ) : ?>
	<header class="page-header alignwide">
		<h1 class="page-title"><?php single_post_title(); ?></h1>
	</header><!-- .page-header -->
<?php endif; ?>

<?php
if ( have_posts() === true ) {
	// Load posts loop.
	while ( have_posts() === true ) {
		the_post();
		get_template_part( 'content', 'excerpt' );
	}
} else {
	// If no content, include the "No posts found" template.
	// get_template_part('template-parts/content/content-none');.
	?>
<article id="error-404">
	<div class="entry-content">
		<h1>404 Not Found</h1>
		<p>Yikes&hellip;</p>
	</div><!-- .entry-content -->
</article><!-- #error-404 -->
	<?php
}

get_footer();
