<?php
/**
 * Short description for file
 *
 * Long description for file (if any)...
 *
 * PHP version 5
 *
 * LICENSE: This source file is subject to version 3.01 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @category   CategoryName
 * @package    PackageName
 * @author     Another Author <another@example.com>
 * @copyright  1997-2005 The PHP Group
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    SVN: $Id$
 * @link       http://pear.php.net/package/PackageName
 * @see        NetOther, Net_Sample::Net_Sample()
 * @since      File available since Release 1.2.0
 * @deprecated File deprecated in Release 2.0.0
 */

/*
* Place includes, constant defines and $_GLOBAL settings here.
* Make sure they have appropriate docblocks to avoid phpDocumentor
* construing they are documented by the page-level docblock.
*/

/**
 * Short description for class
 *
 * Long description for class (if any)...
 *
 * @category   CategoryName
 * @package    PackageName
 * @author     Original Author <author@example.com>
 * @author     Another Author <another@example.com>
 * @copyright  1997-2005 The PHP Group
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    Release: @package_version@
 * @link       http://pear.php.net/package/PackageName
 * @see        NetOther, Net_Sample::Net_Sample()
 * @since      Class available since Release 1.2.0
 * @deprecated Class deprecated in Release 2.0.0
 */

get_header();
?>

<main id="primary" class="site-main">
	<section class="call-to-action">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<header class="page-header">
						<h1 class="page-title">
							<?php
							esc_html_e(
								'Oops! That page can&rsquo;t be found.',
								'theme-manupulation'
							);
							?>
						</h1>
					</header><!-- .page-header -->
				</div>
			</div>
		</div>
	</section>
	<section class="blog-posts grid-system">
		<div class="container">
			<div class="row">
				<div class="page-content">
					<p>
						<?php
						esc_html_e(
							'It looks like nothing was found at this location.
							Maybe try one of the links below or a search?',
							'theme-manupulation'
						);
						?>
					</p>
					<?php
					get_search_form();
					the_widget( 'WP_Widget_Recent_Posts' );
					?>
					<div class="widget widget_categories">
						<h2 class="widget-title">
							<?php
							esc_html_e(
								'Most Used Categories',
								'theme-manupulation'
							);
							?>
						</h2>
						<ul>
							<?php
							wp_list_categories(
								array(
									'orderby'    => 'count',
									'order'      => 'DESC',
									'show_count' => 1,
									'title_li'   => '',
									'number'     => 10,
								)
							);
							?>
						</ul>
					</div><!-- .widget -->
					<?php
					$theme_manupulation_archive_content = '<p>' . sprintf(
						/* translators: %s: search term */
						esc_html__(
							'Try looking in the monthly archives. %1$s',
							'theme-manupulation'
						),
						convert_smilies( ':)' )
					) . '</p>';
					the_widget(
						'WP_Widget_Archives',
						'dropdown=1',
						"after_title=</h2>$theme_manupulation_archive_content"
					);
					the_widget( 'WP_Widget_Tag_Cloud' );
					?>
				</div><!-- .page-content -->
			</div>
		</div>
	</section><!-- .error-404 -->
</main><!-- #main -->
<?php
get_footer();
