<section class="services-section">
	<div class="container">
		<div class="grid-row">
			<div class="grid-col grid-col--5  grid-col-sm--12">
				<div class="services-section__label" data-aos="fade" data-aos-delay="300" data-aos-duration="300"><span>Services</span></div>
				<h2 class="services-section__title" data-aos="fade" data-aos-delay="600" data-aos-duration="300">
					<?php if ( have_rows( 'services_section' ) ) : ?>
						<?php while ( have_rows( 'services_section' ) ) : the_row(); ?>
							<?php the_sub_field( 'section_title' ); ?>
						<?php endwhile; ?>
					<?php endif; ?>

				</h2>
				<div class="services-section__button"  data-aos="fade" data-aos-delay="900" data-aos-duration="300">
					<a href="/services" class="btn btn--sm-mob teritiary-btn teritiary-btn--blue">
						<span class="teritiary-btn__text">Learn More</span>
						<span class="teritiary-btn__icon"><svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
					</a>
				</div>
			</div>
			<div class="grid-col grid-col--7 grid-col-sm--12">
				<?php if ( have_rows( 'services_list', 'option' ) ) : ?>
					<div class="services-grid">
						<?php $delay_count = 0; ?>
						<?php 
						$content_counter = 0;
						?>
						<?php while ( have_rows( 'services_list', 'option' ) ) : the_row(); ?>
							<?php $service_icon = get_sub_field( 'service_icon' ); ?>
							<?php $delay_count = $delay_count + 150; ?>

							<a href="/services#service-<?php echo $content_counter;?>" class="services-grid__item" data-aos="fade-left" data-aos-delay="<?php echo $delay_count; ?>" data-aos-duration="300">
								<div class="services-grid__icon">
									<?php if ( $service_icon ) : ?>
										<img src="<?php echo esc_url( $service_icon['url'] ); ?>" alt="<?php echo esc_attr( $service_icon['alt'] ); ?>" />
									<?php endif; ?>
								</div>
								<h5 class="services-grid__text"><span><?php the_sub_field( 'service_title' ); ?></span></h5>
							</a>
							<?php $content_counter = $content_counter + 1; ?>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>