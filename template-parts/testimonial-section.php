<?php if ( have_rows( 'testimonial_list', 'option' ) ) : ?>
	<section class="reviews-section">
		<div class="container">
			<div class="wrap" data-aos="zoom-in" data-aos-delay="400">
				<div class="reviews-slider owl-carousel" >
					<?php while ( have_rows( 'testimonial_list', 'option' ) ) : the_row(); ?>
						<div class="reviews-slider__item">
							<div class="reviews-item">
								<div class="reviews-item__frame">
									<div class="reviews-item__text"><?php the_sub_field( 'content' ); ?></div>
									<div class="reviews-item__info">
										<?php if (get_sub_field( 'author_name' )): ?>
											<div class="reviews-item__name"><?php the_sub_field( 'author_name' ); ?></div>
										<?php endif ?>
										<?php if (get_sub_field( 'author_company' )): ?>
											<div class="reviews-item__company"><?php the_sub_field( 'author_company' ); ?></div>
										<?php endif ?>
									</div>
								</div>
								<?php $company_logo = get_sub_field( 'company_logo' ); ?>
								<div class="reviews-item__visual">
									<?php if ( $company_logo ) : ?>
										<img class="owl-lazy" data-src="<?php echo esc_url( $company_logo['url'] ); ?>" alt="<?php echo esc_attr( $company_logo['alt'] ); ?>" />
									<?php endif; ?>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>
