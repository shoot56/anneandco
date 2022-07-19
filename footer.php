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

	<footer class="page-footer">
		<div class="container">
			<div class="page-footer__frame">
				<div class="page-footer__info">
					<div class="page-footer__logo">
						<strong class="logo logo--orange"><a href='<?php echo esc_url( home_url( '/' ) ); ?>' rel="home"><?php bloginfo( 'name' ); ?></a></strong>
					</div>
					<?php if (get_field( 'footer_slogan', 'option' )): ?>
						<div class="page-footer__slogan"><?php the_field( 'footer_slogan', 'option' ); ?></div>
					<?php endif ?>
					<?php $shortcode = get_field( 'footer_subscribe_shortcode_form', 'option' ); ?>
					<?php if ($shortcode): ?>
						<div class="page-footer__subscribe">
							<div class="page-footer__subscribe-title">Subscribe to our newsletter</div>
							<?php 
							echo do_shortcode( $shortcode )
							?>
						</div>
					<?php endif ?>
				</div>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-main-footer',
						'container'       => false,
						'menu_id'        => '',
						'menu_class'      => 'page-footer__nav',
						'walker' => new Header_Walker_Nav_Menu(),
					)
				);
				?>
			</div>
			<div class="page-footer__bottom">
				<div class="page-footer__copy-wrap">
					<span class="copy">Copyright &copy; anne+co. 1994 - <?php echo date('Y'); ?></span>
					<span class="rights">All rights reserved.</span>
				</div>
				<div class="page-footer__bottom-info">
					<?php if ( have_rows( 'header_contact_blocks', 'option' ) ) : ?>
						<?php while ( have_rows( 'header_contact_blocks', 'option' ) ) : the_row(); ?>
							<?php if (get_sub_field( 'block_content' ) == 'social list'): ?>
								<?php if ( have_rows( 'social_links' ) ) : ?>
									<ul class="social-list">
										<?php while ( have_rows( 'social_links' ) ) : the_row(); ?>
											<?php $social_logo = get_sub_field( 'social_logo' ); ?>
											<li class="social-list__item">
												<?php if ( $social_logo ) : ?>
													<a target="_blank" href="<?php the_sub_field( 'social_link' ); ?>" class="social-list__link">
														<span class="social-list__text"><?php the_sub_field( 'social_link' ); ?></span>
														<img src="<?php echo esc_url( $social_logo['url'] ); ?>" alt="<?php echo esc_attr( $social_logo['alt'] ); ?>" />
													</a>
												<?php endif; ?>
											</li>
										<?php endwhile; ?>
									</ul>
								<?php endif; ?>
							<?php endif; ?>
						<?php endwhile; ?>
					<?php endif; ?>
					
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-bottom-footer',
							'container'       => false,
							'menu_id'        => '',
							'menu_class'      => 'page-footer__bottom-nav',
							'walker' => new Header_Walker_Nav_Menu(),
						)
					);
					?>
					
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
