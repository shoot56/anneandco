<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package anneco
 */

?>

<section class="no-results not-found">
	<div class="container">
		<header class="page-header">
			<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'anneco' ); ?></h1>
		</header>
		<div class="page-content">
			<?php
			if ( is_search() ) :
				?>
				<div class="no-results__text"><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'anneco' ); ?></div>
				<?php
				get_search_form();
			else :
				?>
				<div class="no-results__text"><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'anneco' ); ?></div>
				<?php
				get_search_form();
			endif;
			?>
		</div>
	</div>
</section><!-- .no-results -->

