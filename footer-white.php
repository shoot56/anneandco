<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package anneco
 */

?>
	</div><!-- .site-main -->

	<footer class="site-footer site-footer--white">
		<div class="container">
			<div class="site-footer__frame">
				<div class="site-footer__info">
					<div class="site-footer__logo">
						<strong class="logo"><a href='<?php echo esc_url( home_url( '/' ) ); ?>' rel="home"><?php bloginfo( 'name' ); ?></a></strong>
					</div>
					<?php if (get_field( 'footer_slogan', 'option' )): ?>
						<div class="site-footer__slogan"><?php the_field( 'footer_slogan', 'option' ); ?></div>
					<?php endif ?>
				</div>
				<div class="site-footer__wrap">
					<div class="site-footer__contacts">
						<?php if ( is_active_sidebar( 'footer_widget_1' ) ) : ?>
							<div class="site-footer__contacts-col">
								<?php dynamic_sidebar( 'footer_widget_1' ); ?>
							</div>
						<?php endif; ?>
						<?php if ( is_active_sidebar( 'footer_widget_2' ) ) : ?>
							<div class="site-footer__contacts-col site-footer__contacts-col--wide">
								<?php dynamic_sidebar( 'footer_widget_2' ); ?>
							</div>
						<?php endif; ?>
					</div>
					<?php if ( is_active_sidebar( 'footer_widget_3' ) ) : ?>
						<div class="footer-subsctibe subsctibe-form-holder">
							<?php dynamic_sidebar( 'footer_widget_3' ); ?>
						</div>
					<?php endif; ?>
					
				</div>
				<div class="site-footer__bottom">
					<div class="site-footer__privacy"><a href="/privacy-policy">Privacy Policy</a></div>
					<div class="site-footer__copy">&copy; anne+co. 1994 - <?php echo date('Y'); ?></div>
				</div>
			</div>
		</div>
		<a href="#" class="to-up">
			
		</a>

	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
