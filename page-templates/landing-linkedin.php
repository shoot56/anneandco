<?php 
/*
Template Name: Landing Linkedin Template
*/



get_header('landing-linkedin');


?>
<?php if ( have_rows( 'promo_section' ) ) : ?>
	<?php while ( have_rows( 'promo_section' ) ) : the_row(); ?>
		<?php $button = get_sub_field( 'button' ); ?>
		<section class="linedin-landing-promo">
			<div class="container">
				<div class="linedin-landing-promo__wrap">
					<div class="linedin-landing-promo__label landing-section-label"  data-aos="fade" data-aos-delay="400"><?php the_sub_field( 'label' ); ?></div>
					<h1 class="linedin-landing-promo__title" data-aos="fade-up" data-aos-delay="700"><?php the_sub_field( 'title' ); ?></h1>
					<?php if ( $button ) : ?>
						<div class="linedin-landing-promo__button" data-aos="fade" data-aos-delay="1000">
							<a href="#" data-target=".lp-work-section" class="btn round-btn round-btn--white round-btn--light jump-to">
								<span class="round-btn__text">Learn More</span>
								<span class="round-btn__icon"><svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-arrow-down"></use></svg></span>
							</a>
						</div>
					<?php endif; ?>
				</div>
			</div>
			<?php $image_1 = get_sub_field( 'image_1' ); ?>
			<?php $image_2 = get_sub_field( 'image_2' ); ?>
			<div class="linedin-landing-promo__visual">
				<?php if ( $image_2 ) : ?>
					<div class="linedin-landing-promo__image-wrap" data-aos="fade-custom-left" data-aos-duration="2000" data-aos-delay="1000">
						<div class="linedin-landing-promo__image linedin-landing-promo__image--right">
							<img src="<?php echo esc_url( $image_2['url'] ); ?>" alt="<?php echo esc_attr( $image_2['alt'] ); ?>" />
						</div>
					</div>
				<?php endif; ?>
				<?php if ( $image_1 ) : ?>
					<div class="linedin-landing-promo__image-wrap" data-aos="fade-custom-right" data-aos-duration="2000" data-aos-delay="1000">
						<div class="linedin-landing-promo__image linedin-landing-promo__image--left">
							<img src="<?php echo esc_url( $image_1['url'] ); ?>" alt="<?php echo esc_attr( $image_1['alt'] ); ?>" />
						</div>
					</div>
				<?php endif; ?>
			</div>
		</section>
	<?php endwhile; ?>
<?php endif; ?>
<?php if ( have_rows( 'work_section' ) ) : ?>
	<?php while ( have_rows( 'work_section' ) ) : the_row(); ?>
		<section class="lp-work-section">
			<div class="container">
				<div class="lp-work-section__head">
					<div class="lp-work-section__label landing-section-label" data-aos="fade" data-aos-delay="300">
						<?php the_sub_field( 'label' ); ?>
					</div>
					<h2 class="lp-work-section__title h3" data-aos="fade" data-aos-delay="600"><?php the_sub_field( 'title' ); ?></h2>
				</div>
				<?php if ( have_rows( 'work_items' ) ) : ?>
					<div class="lp-work-section__items">
						<?php if ( have_rows( 'work_items' ) ) : ?>
							<?php $initCount = 700; ?>
							<?php while ( have_rows( 'work_items' ) ) : the_row(); ?>
								<?php $item_image = get_sub_field( 'item_image' ); ?>
								<?php $item_link = get_sub_field( 'item_link' ); ?>
								<a href="<?php echo esc_url( $item_link) ; ?>" class="landing-work-item"  data-aos="fade-up" data-aos-delay="<?php echo $initCount;?>">
									<div class="landing-work-item__visual">
										<?php if ( $item_image ) : ?>
											<img src="<?php echo esc_url( $item_image['url'] ); ?>" alt="<?php echo esc_attr( $item_image['alt'] ); ?>" />
										<?php endif; ?>
									</div>
									<div class="landing-work-item__frame">
										<div class="landing-work-item__name"><?php the_sub_field( 'item_title' ); ?></div>
										<div class="landing-work-item__text"><?php the_sub_field( 'item_description' ); ?></div>
									</div>
								</a>
								<?php $initCount = $initCount + 200; ?>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				<?php endif; ?>
			</div>
		</section>
	<?php endwhile; ?>
<?php endif; ?>
<?php if ( have_rows( 'we_do_section' ) ) : ?>
	<?php while ( have_rows( 'we_do_section' ) ) : the_row(); ?>
		<section class="lp-we-do-section">
			<div class="container">
				<div class="lp-we-do-section__header">
					<div class="lp-we-do-section__label landing-section-label" data-aos="fade" data-aos-delay="400"><?php the_sub_field( 'label' ); ?></div>
					<h2 class="lp-we-do-section__title" data-aos="fade" data-aos-delay="600"><?php the_sub_field( 'title' ); ?></h2>
				</div>
				<?php if ( have_rows( 'we_do_items' ) ) : ?>
					<?php $initCount = 700; ?>
					<div class="lp-we-do-list">
						<?php while ( have_rows( 'we_do_items' ) ) : the_row(); ?>
							<?php $icon = get_sub_field( 'icon' ); ?>
							<div class="lp-we-do-list__item" data-aos="fade-up" data-aos-delay="<?php echo $initCount;?>">
								<?php if ( $icon ) : ?>
									<div class="lp-we-do-list__visual">
										<div class="lp-we-do-list__icon">
											<img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
										</div>
									</div>
								<?php endif; ?>
								<div class="lp-we-do-list__text h4"><?php the_sub_field( 'text' ); ?></div>
							</div>
							<?php $initCount = $initCount + 200; ?>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
			</div>
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

get_footer();