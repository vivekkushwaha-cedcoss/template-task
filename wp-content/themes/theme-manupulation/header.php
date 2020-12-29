<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gutener
 */

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
		  <div class="collapse navbar-collapse" id="navbarResponsive">
			<?php if ( has_nav_menu( 'menu-1' ) ) : ?>
				<?php
					wp_nav_menu( array(
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
