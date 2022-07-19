<?php 
/*
Template Name: Landing Chocolate Success
*/



get_header('landing-linkedin');


?>

<?php 
	$portfolio_args = array(
		'posts_per_page' => 4,
		'orderby' => 'date',
		'post_type' => 'portfolio',
		'order' => 'ASK',
		'meta_key' => 'featured',
		'meta_value' => true
	);
?>


<?php if ( have_rows( 'success_section' ) ) : ?>
	<?php while ( have_rows( 'success_section' ) ) : the_row(); ?>
		<section class="lp-success-section">
			<div class="container">
				<div class="lp-success-section__wrap">
					<div class="lp-success-section__label" data-aos="fade" data-aos-delay="400"><?php the_sub_field( 'label' ); ?></div>
					<h1 class="lp-success-section__title" data-aos="fade" data-aos-delay="600"><?php the_sub_field( 'title' ); ?></h1>
					<div class="lp-success-section__text h4" data-aos="fade" data-aos-delay="800"><?php the_sub_field( 'subtitle' ); ?></div>
					<div class="lp-success-section__button" data-aos="fade" data-aos-delay="1000">
						<a href="#" data-target=".landing-work-section" class="btn round-btn round-btn--white round-btn--light jump-to">
							<span class="round-btn__text">Learn More</span>
							<span class="round-btn__icon"><svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-arrow-down"></use></svg></span>
						</a>
					</div>
				</div>
			</div>
		</section>
	<?php endwhile; ?>
<?php endif; ?>

<?php if ( have_rows( 'promo_section1' ) ) : ?>
	<?php while ( have_rows( 'promo_section' ) ) : the_row(); ?>
		<?php $promo_image = get_sub_field( 'promo_image' ); ?>
		<div class="landing-chocolate-promo">
			<div class="landing-chocolate-promo__pattern">
				
			</div>
			<div class="container">
				<div class="landing-chocolate-promo__wrap">
					<div class="landing-chocolate-promo__frame">
						<div class="landing-chocolate-promo__title h1"><?php the_sub_field( 'section_title' ); ?></div>
						<div class="landing-chocolate-promo__text h4"><?php the_sub_field( 'section_description' ); ?></div>
						<div class="landing-chocolate-promo__info"><?php the_sub_field( 'info_text' ); ?> <span class="smile"></span></div>
					</div>
					<div class="landing-chocolate-promo__visual">
						<?php if ( $promo_image ) : ?>
							<img src="<?php echo esc_url( $promo_image['url'] ); ?>" alt="<?php echo esc_attr( $promo_image['alt'] ); ?>" />
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>
<section id="work-section" class="landing-work-section">
	<div class="container">
		<div class="landing-work-section__wrap">
			<div class="landing-work-section__frame">
				<div class="landing-projects">
					<?php
					$query = new WP_Query( $portfolio_args );
					if ( $query->have_posts() ) {
						$counter = 0;
						while ( $query->have_posts() ) {
							$counter = $counter + 1;
							$query->the_post();

							if ($counter < 3) {
								$params = [ 'class' => 'crit_el' ];
							} else {
								$params = ['class' => '' ];
							}

							get_template_part( 'template-parts/work-list-item-success', get_post_type(), $params );
						}
					}
					wp_reset_postdata();
					?>
					<div class="landing-projects__all"  data-aos="fade" data-aos-delay="400">
						<a href="/work" class="btn round-btn round-btn--cream round-btn--light">
							<span class="round-btn__text">View Our Work</span>
							<span class="round-btn__icon"><svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
						</a>
					</div>
				</div>
			</div>
			<aside class="landing-work-section__aside">
				<?php while ( have_rows( 'work_section' ) ) : the_row(); ?>
					<div class="landing-work-section__aside-title h2" data-aos="fade" data-aos-delay="400">
						<?php the_sub_field( 'section_title' ); ?>
					</div>
				<?php endwhile; ?>
				<div class="landing-work-section__aside-pattern" data-aos="fade" data-aos-delay="800"></div>
			</aside>
		</div>
	</div>
</section>

<section id="services-section" class="landing-services-section">
	<section class="services-section">
		<div class="container">
			<div class="grid-row">
				<div class="grid-col grid-col--5  grid-col-sm--12">
					<div class="services-section__label" data-aos="fade" data-aos-delay="300" data-aos-duration="300"><span>Services</span></div>
					<?php while ( have_rows( 'services_section' ) ) : the_row(); ?>
						<h2 class="services-section__title" data-aos="fade" data-aos-delay="600" data-aos-duration="300">
							<?php the_sub_field( 'section_title' ); ?>
						</h2>
					<?php endwhile; ?>
					<div class="services-section__button" data-aos="fade" data-aos-delay="900" data-aos-duration="300">
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
</section>
<section id="reviews-section" class="landing-reviews-section">
	<?php if ( have_rows( 'testimonial_list', 'option' ) ) : ?>
		<section class="testimonial-section">
			<div class="container">
				<div class="testimonial-slider owl-carousel">
					<?php while ( have_rows( 'testimonial_list', 'option' ) ) : the_row(); ?>
						<div class="testimonial-slider__item" data-aos="fade" data-aos-delay="300" data-aos-duration="300">
							<div class="testimonial-slider__container">
								<div class="testimonial-slider__text h3"><?php the_sub_field( 'content' ); ?></div>
								<div class="testimonial-slider__author">
									<?php if (get_sub_field( 'author_name' )): ?>
										<div class="testimonial-slider__author-name"><?php the_sub_field( 'author_name' ); ?></div>
									<?php endif; ?>
									<?php if (get_sub_field( 'author_company' )): ?>
										<div class="testimonial-slider__author-company"><?php the_sub_field( 'author_company' ); ?></div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
		</section>
	<?php endif; ?>

</section>

<?php 
get_template_part( 'template-parts/logos-section');
?>
<?php if ( have_rows( 'schedule_section2' ) ) : ?>
	<?php while ( have_rows( 'schedule_section' ) ) : the_row(); ?>
		<section id="schedule-section" class="schedule-call-section">
			<div class="container">
				<div class="schedule-call-section__wrap">
					<div class="schedule-call-section__frame">
						<div class="schedule-call-section__title h2"><?php the_sub_field( 'section_title' ); ?></div>
					</div>
					<div class="schedule-call-section__block">
						<div class="schedule-call-section__icon">
							<svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-phone"></use></svg>
						</div>
						<div class="schedule-call-section__block-title h3"><?php the_sub_field( 'block_title' ); ?></div>
						<div class="schedule-call-section__block-text"><?php the_sub_field( 'block_text' ); ?></div>
						<div class="schedule-call-section__block-button">
							<a href="#" class="btn secondary-btn secondary-btn--blue">
								<span class="secondary-btn__text"><?php the_sub_field( 'button_text' ); ?></span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php endwhile; ?>
<?php endif; ?>









<?php

get_footer();