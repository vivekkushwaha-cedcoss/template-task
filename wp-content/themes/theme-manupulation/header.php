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
 * @author     Original Author <author@example.com>
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

?>
<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" 
		content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="TemplateMo">
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
		<!-- ***** Preloader Start ***** -->
		<div id="preloader">
				<div class="jumper">
						<div></div>
						<div></div>
						<div></div>
				</div>
		</div>  
		<!-- ***** Preloader End ***** -->

		<!-- Header -->
		<header class="space-header-top">
			<nav class="navbar navbar-expand-lg">
				<div class="container">
					<a class="navbar-brand" href="/index.php"><h2>Stand Blog<em>.</em></h2></a>
					<button class="navbar-toggler" 
					type="button" data-toggle="collapse" 
					data-target="#navbarResponsive" aria-controls="navbarResponsive" 
					aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<?php if ( has_nav_menu( 'menu-1' ) ) : ?>
					<?php
					wp_nav_menu(
						array(
							'container'      => '',
							'theme_location' => 'menu-1',
							'menu_class'     => 'navbar-nav ml-auto',
						)
					);
					?>
				<?php endif; ?>
			</div>
				</div>
			</nav>
		</header>
