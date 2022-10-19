<?php 
/*
Template Name: Copywriting Landing Page Template
*/

get_header('landing-google');
?>
<?php if ( have_rows( 'promo_section' ) ) : ?>
	<?php while ( have_rows( 'promo_section' ) ) : the_row(); ?>
		
		
		
		
		<section class="lp-ggl-promo-section">
			<div class="container">
				<div class="lp-ggl-promo-section__wrap">
					<div class="lp-ggl-promo-section__content">
						<h1 class="lp-ggl-promo-section__title" data-aos="fade" data-aos-delay="100"><?php the_sub_field( 'section_title' ); ?></h1>
						<?php if (get_sub_field( 'section_subtitle' )): ?>
							<h2 class="lp-ggl-promo-section__subtitle h4" data-aos="fade" data-aos-delay="300"><?php the_sub_field( 'section_subtitle' ); ?></h2>
						<?php endif; ?>
						<div class="lp-ggl-promo-section__text">
							<?php if ( have_rows( 'promo_text_list' ) ) : ?>
								<ul class="lp-ggl-promo-list" data-aos="fade" data-aos-delay="400">
									<?php while ( have_rows( 'promo_text_list' ) ) : the_row(); ?>
										<li class="lp-ggl-promo-list__item"><span class="lp-ggl-promo-list__text"><?php the_sub_field( 'text' ); ?></span></li>
									<?php endwhile; ?>
								</ul>
							<?php endif; ?>
						</div>
					</div>
					<div class="lp-ggl-promo-section__form" data-aos="fade-left" data-aos-delay="500">
						<?php 
							$formCode = get_sub_field( 'promo_form_shortcode' ); 
							echo do_shortcode($formCode);
						?>
					</div>
				</div>
			</div>
		</section>
	<?php endwhile; ?>
<?php endif; ?>



<?php if ( have_rows( 'cases_section' ) ) : ?>
	<?php while ( have_rows( 'cases_section' ) ) : the_row(); ?>
		<section class="lp-ggl-cases">
			<div class="container">
				<h2 class="lp-ggl-cases__title h3" data-aos="fade" data-aos-delay="200"><?php the_sub_field( 'section_title' ); ?></h2>
				<?php if ( have_rows( 'cases_list' ) ) : ?>
					<ul class="lp-ggl-cases-list">
						<?php $delay = 200; ?>
						<?php while ( have_rows( 'cases_list' ) ) : the_row(); ?>
							<?php $case_image = get_sub_field( 'case_image' ); ?>
							<?php $case_item = get_sub_field( 'case_item' ); ?>
							
							<li class="lp-ggl-cases-list__item" data-aos="fade-up" data-aos-delay="<? echo $delay;?>">
								<div class="lp-ggl-cases-list__link">
									<div class="lp-ggl-cases-list__visual">
									<?php if ( $case_image ) : ?>
										<img src="<?php echo esc_url( $case_image['url'] ); ?>" alt="<?php echo esc_attr( $case_image['alt'] ); ?>" />
									<?php endif; ?>
									</div>
									<div class="lp-ggl-cases-list__frame">
										<h3 class="lp-ggl-cases-list__title"><?php the_sub_field( 'case_name' ); ?></h3>
										<div class="lp-ggl-cases-list__description"><?php the_sub_field( 'case_description' ); ?></div>
									</div>
								</div>
							</li>
							<?php $delay = $delay + 100; ?>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</div>
		</section>
	<?php endwhile; ?>
<?php endif; ?>

<?php if ( have_rows( 'copywriting_section' ) ) : ?>
	<?php while ( have_rows( 'copywriting_section' ) ) : the_row(); ?>
		<section class="copywriting-section">
			<div class="container">
				<div class="copywriting-section__head" data-aos="fade" data-aos-delay="200">
					<h2 class="copywriting-section__title h3"><?php the_sub_field( 'section_title' ); ?></h2>
					<div class="copywriting-section__subtitle h6"><?php the_sub_field( 'section_description' ); ?></div>
				</div>
				<?php if ( have_rows( 'copywriting_services_list' ) ) : ?>
					<ul class="copywriting-list">
						<?php while ( have_rows( 'copywriting_services_list' ) ) : the_row(); ?>
							<?php $service_icon = get_sub_field( 'service_icon' ); ?>
							<li class="copywriting-list__item" data-aos="fade-left" data-aos-delay="200">
								<div class="copywriting-list__head">
								<?php if ( $service_icon ) : ?>
									<div class="copywriting-list__icon"><img src="<?php echo esc_url( $service_icon['url'] ); ?>" alt="<?php echo esc_attr( $service_icon['alt'] ); ?>" /></div>
									<?php endif; ?>
									<h3 class="copywriting-list__title h3"><?php the_sub_field( 'service_name' ); ?></h3>
								</div>
								<?php if ( have_rows( 'text_list' ) ) : ?>
									<ul class="copywriting-list-items">
										<?php while ( have_rows( 'text_list' ) ) : the_row(); ?>
											<li><?php the_sub_field( 'text' ); ?></li>
										<?php endwhile; ?>
									</ul>
								<?php endif; ?>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</div>
		</section>
	<?php endwhile; ?>
<?php endif; ?>


<?php if ( have_rows( 'we_do_section' ) ) : ?>
	<?php while ( have_rows( 'we_do_section' ) ) : the_row(); ?>
		<section class="we-do-section">
			<div class="container">
				<?php if (get_sub_field( 'section_label' )): ?>
					<div class="we-do-section__head">
						<div class="we-do-section__head-title h3"><?php the_sub_field( 'section_label' ); ?></div>
					</div>
				<?php endif; ?>
				<div class="we-do-section__wrap">
					<div class="we-do-section__frame" data-aos="fade" data-aos-delay="200">
						<?php if (get_sub_field( 'section_title' )): ?>
							<h2 class="we-do-section__title"><?php the_sub_field( 'section_title' ); ?></h2>
						<?php endif; ?>
						<?php if (get_sub_field( 'section_description' )): ?>
							<div class="we-do-section__text h5"><?php the_sub_field( 'section_description' ); ?></div>
						<?php endif; ?>
						
					</div>
					<?php if ( have_rows( 'we_do_list' ) ) : ?>
						<div class="we-do-section__info">
							<div class="we-do-list" data-aos="fade" data-aos-delay="400">
								<?php while ( have_rows( 'we_do_list' ) ) : the_row(); ?>
									<?php $icon = get_sub_field( 'icon' ); ?>
									<div class="we-do-list__item">
										<div class="we-do-list__icon">
											<?php if ( $icon ) : ?>
												<img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
											<?php endif; ?>
										</div>
										<div class="we-do-list__text"><?php the_sub_field( 'text' ); ?></div>
									</div>
								<?php endwhile; ?>
							</div>
						</div>
					<?php endif; ?>
				</div>
				
			</div>
		</section>
	<?php endwhile; ?>
<?php endif; ?>





<?php if ( have_rows( 'process_section' ) ) : ?>
	<?php while ( have_rows( 'process_section' ) ) : the_row(); ?>
		<section class="lp-ggl-process-section service-how-section">
			<div class="container">
				<div class="lp-ggl-process-section__wrap">
					<div class="lp-ggl-process-section__head" data-aos="fade" data-aos-delay="200">
						<?php if (get_sub_field( 'section_label' )): ?>
							<div class="lp-ggl-process-section__label"><?php the_sub_field( 'section_label' ); ?></div>
						<?php endif; ?>
						<h2 class="lp-ggl-process-section__title h3"><?php the_sub_field( 'section_title' ); ?></h2>
					</div>
					<?php if ( have_rows( 'process' ) ) : ?>
						<div class="process-svg"></div>
						<div class="process-steps" data-aos="fade" data-aos-delay="400">
							<?php $counter = 0; ?>
							<?php while ( have_rows( 'process' ) ) : the_row(); ?>
								<?php $counter = $counter + 1; ?>
								<div class="process-steps__item">
									<div class="process-steps__head">
										<div class="process-steps__num"><?php echo $counter; ?></div>
										<h3 class="process-steps__title"><?php the_sub_field( 'process_title' ); ?></h3>
									</div>
									<div class="process-steps__text">
										<div class="process-steps__content"><?php the_sub_field( 'process_text' ); ?></div>
									</div>
									<span class="process-steps__progress"></span>
								</div>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</section>
	<?php endwhile; ?>
<?php endif; ?>

<?php if ( have_rows( 'clients_section' ) ) : ?>
	<?php while ( have_rows( 'clients_section' ) ) : the_row(); ?>
		
		<?php $logo_list_images = get_sub_field( 'logo_list' ); ?>
		<section class="lp-ggl-logos-section">
			<div class="container">
				<div class="lp-ggl-logos-section__title h3" data-aos="fade" data-aos-delay="200"><?php the_sub_field( 'section_title' ); ?></div>
				<?php if ( $logo_list_images ) :  ?>
					<ul class="lp-ggl-logos-list">
					<?php $delay = 200; ?>
						<?php foreach ( $logo_list_images as $logo_list_image ): ?>
							<li  data-aos="fade-up" data-aos-delay="<? echo $delay;?>"><img src="<?php echo esc_url( $logo_list_image['sizes']['thumbnail'] ); ?>" alt="<?php echo esc_attr( $logo_list_image['alt'] ); ?>" /></li>
							<?php $delay = $delay + 100; ?>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
			</div>
		</section>
	<?php endwhile; ?>
<?php endif; ?>

<?php if ( have_rows( 'testimonial_section' ) ) : ?>
	<?php while ( have_rows( 'testimonial_section' ) ) : the_row(); ?>
		<section class="lp-ggl-testimonial-section" data-aos="fade" data-aos-delay="200">
			<div class="container">
				<div class="lp-ggl-testimonial-section__title h3"><?php the_sub_field( 'section_title' ); ?></div>
			</div>
			<section class="testimonial-section">
				<div class="container">
					<div class="testimonial-slider owl-carousel">
						<?php while ( have_rows( 'testimonial_list' ) ) : the_row(); ?>
							<div class="testimonial-slider__item">
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
		</section>
		
		
	<?php endwhile; ?>
<?php endif; ?>



<?php if ( have_rows( 'contact_section' ) ) : ?>
	<?php while ( have_rows( 'contact_section' ) ) : the_row(); ?>
		<section class="lp-contact-section">
			<div class="container">
				<div class="lp-contact-section__wrap">
					<div class="lp-contact-section__frame">
						<div class="lp-contact-section__label landing-section-label" data-aos="fade" data-aos-delay="400"><?php the_sub_field( 'label' ); ?></div>
						<h2 class="lp-contact-section__title h2" data-aos="fade" data-aos-delay="600"><?php the_sub_field( 'title' ); ?></h2>
						<?php if ( have_rows( 'contact_information' ) ) : ?>

							<div class="contact-info__list contacts-list" data-aos="fade-right" data-aos-delay="800">

								<?php while ( have_rows( 'contact_information' ) ) : the_row(); ?>
									<?php $icon = get_sub_field( 'item_icon' ); ?>
									<a href="<?php the_sub_field( 'item_link' ); ?>" target="_blank" class="contact-info__list-item contact-item">
										<div class="contact-item__visual">
											<?php if ( $icon ) : ?>
												<img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
											<?php endif; ?>
										</div>
										<div class="contact-item__frame">
											<div class="contact-item__label"><?php the_sub_field( 'item_label' ); ?></div>
											<div class="contact-item__text"><?php the_sub_field( 'item_text' ); ?></div>
										</div>
									</a>
								<?php endwhile; ?>
							</div>
						<?php endif; ?>
					</div>
					<div class="lp-contact-section__divider"></div>
					<div class="lp-contact-section__form">
						<div class="contact-form" data-aos="fade-up" data-aos-delay="1000">
							<?php 
							$form_shortcode = get_sub_field( 'form_shortcode' );
							echo do_shortcode($form_shortcode); 
							?>
						</div>
					</div>
				</div>
			</div>	
		</section>
	<?php endwhile; ?>
<?php endif; ?>




<?php

get_footer('empty');