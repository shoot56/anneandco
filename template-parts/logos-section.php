<?php if ( have_rows( 'clients_section', 'option' ) ) : ?>
	<?php while ( have_rows( 'clients_section', 'option' ) ) : the_row(); ?>
		<section class="client-logos-section">
			<div class="container">
				<div class="client-logos-section__head">
					<div class="client-logos-section__label" data-aos="fade" data-aos-delay="400"><?php the_sub_field( 'section_label' ); ?></div>
					<h3 class="client-logos-section__title" data-aos="fade" data-aos-delay="600"><?php the_sub_field( 'section_title' ); ?></h3>
				</div>
				<?php if ( have_rows( 'logo_list' ) ) : ?>
					<div class="client-logos-grid">
						<?php $delayCount = 300; ?>
						<?php while ( have_rows( 'logo_list' ) ) : the_row(); ?>
							<?php $logo_image = get_sub_field( 'logo_image' ); ?>
							<?php if ( $logo_image ) : ?>
								<div class="client-logos-grid__wrap" data-aos="fade" data-aos-delay="<?php echo $delayCount; ?>">
									<div class="client-logos-grid__item">
										<img src="<?php echo esc_url( $logo_image['url'] ); ?>" alt="<?php echo esc_attr( $logo_image['alt'] ); ?>" />
									</div>
								</div>
							<?php endif; ?>
							<?php $delayCount = $delayCount + 200; ?>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
			</div>
		</section>
	<?php endwhile; ?>
<?php endif; ?>
