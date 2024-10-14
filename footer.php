<?php
/**
 * The footer.
 *
 * @package    OrderOfMass
 * @subpackage OOMTheme
 * @since      1.0
 */

namespace TMD\OrderOfMass\Theme;

/**
 * Undocumented psalm suppress.
 *
 * @psalm-suppress InvalidGlobal
 */
global $oomtheme_l;

?>
</main>
	<footer>
		<div>
			<span>
				<?php $oomtheme_l( 'License' ); ?>:
				<a href="https://opensource.org/licenses/MIT">MIT license</a>
			</span>
			<span>
				<?php $oomtheme_l( 'Source' ); ?>:
				<a href="https://github.com/tommander/catholic-mass">GitHub</a>
			</span>
			<span>
				<?php $oomtheme_l( 'Author' ); ?>:
				<a href="mailto:tommander@tommander.cz">Tomáš <q>Tommander</q> Rajnoha</a>
			</span>
			<span>&nbsp;</span>
			<span>
				<?php $oomtheme_l( 'Header image based on' ); ?>:
				<a href="https://commons.wikimedia.org/wiki/File:Iglesia_de_San_Carlos_Borromeo,_Viena,_Austria,_2020-01-31,_DD_164-166_HDR.jpg">Iglesia de San Carlos Borromeo, Viena, Austria by Diego Delso</a>
				(<a href="https://creativecommons.org/licenses/by-sa/4.0">CC BY-SA 4.0</a>)
			</span>
			<span>
				<?php $oomtheme_l( 'Bible translations' ); ?>:
				<a href="https://sourceforge.net/projects/zefania-sharp/">Zefania XML Bible Markup Language</a>
				(<a href="https://www.gnu.org/licenses/licenses.html">GNU GPL</a>)
			</span>
			<span>
				<?php $oomtheme_l( 'Icons' ); ?>:
				<a href="https://fontawesome.com/">Font Awesome Free 6 by @fontawesome</a>
				(<a href="https://fontawesome.com/license/free">Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License</a>)
			</span>
			<span>
				<?php $oomtheme_l( 'Font' ); ?>:
				<a href="https://fonts.google.com/specimen/Source+Sans+Pro">Source Sans Pro by Paul D. Hunt</a>
				(<a href="https://scripts.sil.org/cms/scripts/page.php?site_id=nrsi&id=OFL">Open Fonts License</a>)
			</span>
		</div>
		<?php wp_footer(); ?>
	</footer>
  </body>
</html>