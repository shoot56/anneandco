<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package anneco
 */

get_header();
?>

	<section class="error-404">
		<div class="container">
			<div class="error-404__wrap">
				<div class="error-404__frame">
					<div class="error-404__title">404</div>
					<div class="error-404__subtitle h1">Page not found</div>
					<div class="error-404__text">The link you clicked may be broken or the page may have been removed or renamed.</div>
					<div class="error-404__button">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn secondary-btn secondary-btn--blue"><span class="secondary-btn__text">Go Home</span><span class="round-btn__icon"><svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-home"></use></svg></span></a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- .error-404 -->

<?php
get_footer();
