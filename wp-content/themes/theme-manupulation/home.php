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
get_header();
?>
<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="heading-page header-text">
	<section class="page-heading">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="text-content">
						<h4>Recent Posts</h4>
						<h2>Our Recent Blog Entries</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<!-- Banner Ends Here -->
<section class="call-to-action">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="main-content">
					<div class="row">
						<div class="col-lg-8">
							<span>Stand Blog HTML5 Template</span>
							<h4>Creative HTML Template For Bloggers!</h4>
						</div>
						<div class="col-lg-4">
							<div class="main-button">
								<a href="https://templatemo.com/tm-551-stand-blog" 
								target="_parent">Download Now!</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="blog-posts grid-system">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="all-blog-posts">
					<div class="row">
						<?php
						if ( have_posts() ) {
							while ( have_posts() ) {
								the_post();
								?>
						<div class="col-lg-6">
							<div class="blog-post">
								<div class="blog-thumb">
									<?php
									$allowed_html = array(
										'img' => array(
											'src'         => array(),
											'class'       => array(),
											'width'       => array(),
											'height'      => array(),
											'srcset'      => array(),
											'alt loading' => array(),
											'sizes'       => array(),
										),
									);
									$output       = ( has_post_thumbnail() ) ?
									the_post_thumbnail() :
									'<img src=' . get_template_directory_uri() .
									'/images/banner-item-01.jpg>';
									echo wp_kses( $output, $allowed_html );
									?>
								</div>
							<div class="down-content">
								<span>
									<?php
									the_category();
									?>
								</span>
								<?php
									global $post;
									$post_slug = $post->post_name;
								?>
								<a href="<?php echo esc_html( $post_slug ); ?>">
									<h4>
										<?php the_title(); ?>
									</h4>
								</a>
								<ul class="post-info">
									<li>
										<a href="#">
											<?php the_author(); ?>
										</a>
									</li>
									<li>
										<a href="#">
											<?php echo esc_html( get_the_date() ); ?>
										</a>
									</li>
									<li>
										<a href="#">
											<?php echo esc_html( get_comments_number() ); ?> 
											comments
										</a>
									</li>
								</ul>
								<p>
									<?php
									$allowed_html = array(
										'a' => array(
											'class' => array(),
											'id'    => array(),
											'href'  => array(),
										),
									);
									$output       = get_the_excerpt() .
									' <a href=' . $post_slug .
									' id="link-color-read-more">read more..</a>';
									echo wp_kses( $output, $allowed_html );
									?>
								</p>
								<div class="post-options">
									<div class="row">
										<div class="col-lg-12">
											<ul class="post-tags">
												<?php
												$tags   = get_tags(
													array( 'get' => 'all' )
												);
												$output = '<li>
														<i class="fa fa-tags">
														</i>
													</li>';
												if ( $tags ) {
													foreach ( $tags as $tagg ) {
														$output .= '<li>
															<a href="/tag/' .
															$tagg->name . '">' .
															$tagg->name . '</a>
														</li> ';
													}
												} else {
													esc_html_e(
														'No tags created.',
														'text-domain'
													);
												}
												$allowed_html = array(
													'ul' => array(
														'class' => array(),
														'id'    => array(),
													),
													'li' => array(
														'class' => array(),
														'id'    => array(),
													),
													'i'  => array(
														'class' => array(),
														'id'    => array(),
													),
													'a'  => array(
														'class' => array(),
														'id'    => array(),
														'href'  => array(),
													),
												);
												echo wp_kses( $output, $allowed_html );
												?>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
								<?php
							}
						}
						?>
					<div class="col-lg-12">
						<ul class="page-numbers">
							<?php
							$allowed_html = array(
								'a'    => array(
									'class' => array(),
									'id'    => array(),
									'href'  => array(),
								),
								'span' => array(
									'class'        => array(),
									'aria current' => array(),
								),
							);
							echo wp_kses( paginate_links(), $allowed_html );
							?>
						</ul>
					</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="sidebar">
					<div class="row">
						<div class="col-lg-12">
							<?php get_sidebar(); ?>
						</div>
						<div class="col-lg-12">
							<div class="sidebar-item tags">
								<div class="sidebar-heading">
									<h2>Tag Clouds</h2>
								</div>
							<div class="content">
								<?php
								$tags   = get_tags( array( 'get' => 'all' ) );
								$output = '<ul class="tag-cloud-list">';
								if ( $tags ) {
									foreach ( $tags as $tagg ) {
										$output .= '<li><a href="/tag/' .
										$tagg->name . '">' .
										$tagg->name . '</a></li>';
									}
								} else {
									esc_html_e( 'No tags created.', 'text-domain' );
								}
								$output      .= '</ul>';
								$allowed_html = array(
									'ul' => array(
										'class' => array(),
										'id'    => array(),
									),
									'li' => array(
										'class' => array(),
										'id'    => array(),
									),
									'i'  => array(
										'class' => array(),
										'id'    => array(),
									),
									'a'  => array(
										'class' => array(),
										'id'    => array(),
										'href'  => array(),
									),
								);
								echo wp_kses( $output, $allowed_html );
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>
<?php
get_footer();
