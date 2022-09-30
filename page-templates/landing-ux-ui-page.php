<?php 
/*
Template Name: UX/UI Landing Page Template
*/

get_header('landing-ux-ui');
?>
<?php if ( have_rows( 'promo_section' ) ) : ?>
	
	
	<section class="promo-section">
		<div class="container">
				<?php while ( have_rows( 'promo_section' ) ) : the_row(); ?>
					
					<?php $section_image = get_sub_field( 'section_image' ); ?>
					<div class="promo-section__wrap">
						<div class="promo-section__info">
							<h1 class="promo-section__title"><?php the_sub_field( 'section_title' ); ?></h1>
							<div class="promo-section__text h4"><?php the_sub_field( 'section_description' ); ?></div>
							<div class="promo-section__button">
								<button data-target=".lp-contact-section" class="btn jump-to btn secondary-btn secondary-btn--filled-blue secondary-btn--shadow">
									<span class="secondary-btn__text">Start your project</span>
								</button>
							</div>
						</div>
						<div class="promo-section__visual">
							<?php if ( $section_image ) : ?>
								<img src="<?php echo esc_url( $section_image['url'] ); ?>" width="" alt="<?php echo esc_attr( $section_image['alt'] ); ?>" />
							<?php endif; ?>
						</div>
					</div>
				<?php endwhile; ?>
				<?php if ( have_rows( 'stat_list' ) ) : ?>
					<div class="promo-section__bottom">
						<?php while ( have_rows( 'stat_list' ) ) : the_row(); ?>
							<div class="promo-section__bottom-item">
								<div class="promo-section__bottom-num"><span class="promo-section__bottom-count"><?php the_sub_field( 'number' ); ?></span><?php the_sub_field( 'number_append' ); ?></div>
								<div class="promo-section__bottom-text"><?php the_sub_field( 'text' ); ?></div>
							</div>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
			</div>
			<div class="scroll-deco">
				<div class="scroll-deco__text">Scroll</div>
				<div class="scroll-deco__arrow"></div>
			</div>
		</section>
<?php endif; ?>


<?php if ( have_rows( 'we_do_section' ) ) : ?>
	<section class="we-do-section">
		<div class="container">
			<div class="we-do-section__wrap">
				<?php while ( have_rows( 'we_do_section' ) ) : the_row(); ?>
					<div class="we-do-section__frame">
						<div class="we-do-section__label"><?php the_sub_field( 'section_label' ); ?></div>
						<h2 class="we-do-section__title"><?php the_sub_field( 'section_title' ); ?></h2>
						<div class="we-do-section__text h5"><?php the_sub_field( 'section_description' ); ?></div>
						<div class="we-do-section__btn hide-mob">
							<button data-target=".lp-contact-section" class="btn jump-to btn secondary-btn secondary-btn--filled-blue secondary-btn--shadow">
								<span class="secondary-btn__text">Start your project</span>
							</button>
						</div>
					</div>
				<?php endwhile; ?>
				<?php if ( have_rows( 'we_do_list' ) ) : ?>
					<div class="we-do-section__info">
						<div class="we-do-list">
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
			<div class="we-do-section__btn hide-all show-mob">
				<button data-target=".lp-contact-section" class="btn jump-to btn secondary-btn secondary-btn--filled-blue secondary-btn--shadow">
					<span class="secondary-btn__text">Start your project</span>
				</button>
			</div>
		</div>
	</section>
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
		<section class="testimonial-section">
			<div class="container">
				<div class="testimonial-section__title h6"><?php the_sub_field( 'section_title' ); ?></div>
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
	<?php endwhile; ?>
<?php endif; ?>

<?php if ( have_rows( 'process_section' ) ) : ?>
	<?php while ( have_rows( 'process_section' ) ) : the_row(); ?>
		
		
	<section class="lp-process-section">
		<div class="container">
			<div class="lp-process-section__head">
				<div class="lp-process-section__label h6"><?php the_sub_field( 'section_label' ); ?></div>
				<h2 class="lp-process-section__title"><?php the_sub_field( 'section_title' ); ?></h2>
			</div>
			<div class="lp-process-list">
					<?php if ( have_rows( 'process_list' ) ) : ?>
						<?php while ( have_rows( 'process_list' ) ) : the_row(); ?>
							<?php $icon = get_sub_field( 'icon' ); ?>
							<div class="lp-process-list__item">
								<div class="lp-process-list__icon">
									<?php if ( $icon ) : ?>
										<img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
									<?php endif; ?>
								</div>
								<div class="lp-process-list__title h3"><?php the_sub_field( 'title' ); ?></div>
								<div class="lp-process-list__text"><?php the_sub_field( 'text' ); ?></div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
				<div class="lp-process-section__button">
					<button data-target=".lp-contact-section" class="btn jump-to btn secondary-btn secondary-btn--filled-blue secondary-btn--shadow">
						<span class="secondary-btn__text">Start your project</span>
					</button>
				</div>
			</div>
		</section>
	<?php endwhile; ?>
<?php endif; ?>




<?php if ( have_rows( 'price_section' ) ) : ?>
	<?php while ( have_rows( 'price_section' ) ) : the_row(); ?>
		<?php if ( get_sub_field( 'show_section' ) == 1 ) : ?>
			<section class="service-price-section">
				<div class="container">
					<div class="service-price-section__head">
						<h2 class="service-price-section__title h2" data-aos="fade" data-aos-delay="200"><?php the_sub_field( 'section_title' ); ?></h2>
						<div class="service-price-section__description" data-aos="fade" data-aos-delay="400"><?php the_sub_field( 'section_description' ); ?></div>
					</div>

					<div class="prices-switcher ">
						<?php if (have_rows( 'starter' )): ?>
							<?php while ( have_rows( 'starter' ) ) : the_row(); ?>
								<div class="prices-switcher__item owl-dot">
									<div class="prices-switcher__name"><?php the_sub_field( 'name' ); ?></div>
									<div class="prices-switcher__price"><?php the_sub_field( 'price' ); ?></div>
								</div>
							<?php endwhile; ?>
						<?php endif ?>
						<?php if (have_rows( 'business' )): ?>
							<?php while ( have_rows( 'business' ) ) : the_row(); ?>
								<div class="prices-switcher__item owl-dot">
									<div class="prices-switcher__name"><?php the_sub_field( 'name' ); ?></div>
									<div class="prices-switcher__price"><?php the_sub_field( 'price' ); ?></div>
								</div>
							<?php endwhile; ?>
						<?php endif ?>
						<?php if (have_rows( 'custom' )): ?>
							<?php while ( have_rows( 'custom' ) ) : the_row(); ?>
								<div class="prices-switcher__item owl-dot">
									<div class="prices-switcher__name"><?php the_sub_field( 'name' ); ?></div>
									<div class="prices-switcher__price"><?php the_sub_field( 'price' ); ?></div>
								</div>
							<?php endwhile; ?>
						<?php endif ?>
					</div>

					<?php $contactModalForm = get_sub_field( 'contact_modal_form_shortcode' ); ?>
					<div class="prices-wrap">
						<?php if ( have_rows( 'starter' ) ) : ?>
							<?php while ( have_rows( 'starter' ) ) : the_row(); ?>
								<?php $starter_icon = get_sub_field( 'starter_icon' ); ?>
								<div class="price-item" data-aos="fade-up" data-aos-duration="600" data-aos-delay="500">
									<div class="price-item__wrap">
										<div class="price-item__head">
											<div class="price-item__icon">
												<?php if ( $starter_icon ) : ?>
													<img src="<?php echo esc_url( $starter_icon['url'] ); ?>" alt="<?php echo esc_attr( $starter_icon['alt'] ); ?>" />
												<?php endif; ?>
											</div>
											<h4 class="price-item__name"><?php the_sub_field( 'name' ); ?></h4>
											<div class="price-item__price-label"><?php the_sub_field( 'price_label' ); ?></div>
											<div class="price-item__price-val"><?php the_sub_field( 'price' ); ?></div>
											<div class="price-item__price-text"><?php the_sub_field( 'price_description' ); ?></div>
										</div>
										<div class="price-item__divider"></div>
										<div class="price-item__frame">
											<?php if ( have_rows( 'starter_included_text_list' ) ) : ?>
												<div class="price-item__included-title">What’s included:</div>
												<ul class="price-item__included-list">
													<?php while ( have_rows( 'starter_included_text_list' ) ) : the_row(); ?>
														<li class="price-item__included-item price-item__included-item--<?php the_sub_field( 'icon' ); ?>"><?php the_sub_field( 'text' ); ?></li>
													<?php endwhile; ?>
												</ul>
											<?php endif; ?>
											<div class="price-item__button">
												<a data-fancybox="starter-modal" data-pricing-plan="<?php the_sub_field( 'name' ); ?> Plan" data-src="#starter-modal" href="#" class="btn secondary-btn btn--sm-tab secondary-btn--navy">
													<span class="secondary-btn__text"><?php the_sub_field( 'button_text' ); ?></span>
													<span class="secondary-btn__icon"><svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-arrow-up-right"></use></svg></span>
												</a>
											</div>
										</div>
									</div>
									<?php if ( have_rows( 'modal_information_starter' ) ) : ?>
										<?php while ( have_rows( 'modal_information_starter' ) ) : the_row(); ?>
											<?php $starter_modal_icon = get_sub_field( 'starter_modal_icon' ); ?>
											<div id="starter-modal" class="price-modal modal-block">
												<div class="price-modal__wrap">
													<div class="price-modal__form">
														<?php echo do_shortcode($contactModalForm); ?>
													</div>
													<div class="price-modal__frame">
														<?php if ( $starter_modal_icon ) : ?>
															<div class="price-modal__icon">
																<img src="<?php echo esc_url( $starter_modal_icon['url'] ); ?>" alt="<?php echo esc_attr( $starter_modal_icon['alt'] ); ?>" />
															</div>
														<?php endif; ?>
														<div class="price-modal__title"><?php the_sub_field( 'modal_title' ); ?></div>
														<?php if ( have_rows( 'starter_plan_benefits' ) ) : ?>
															<ul class="price-modal__text-list">
																<?php while ( have_rows( 'starter_plan_benefits' ) ) : the_row(); ?>
																	<li class="price-modal__text-list-item"><?php the_sub_field( 'text_item' ); ?></li>
																<?php endwhile; ?>
															</ul>
														<?php endif; ?>
														<?php if (get_sub_field( 'modal_description' )): ?>
															<div class="price-modal__description"><?php the_sub_field( 'modal_description' ); ?></div>
														<?php endif ?>
													</div>
												</div>
											</div>
										<?php endwhile; ?>
									<?php endif; ?>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>

						<?php if ( have_rows( 'business' ) ) : ?>
							<?php while ( have_rows( 'business' ) ) : the_row(); ?>
								<?php $business_icon = get_sub_field( 'business_icon' ); ?>
								<div class="price-item price-item--business" data-aos="fade-up" data-aos-duration="600" data-aos-delay="800">
									<div class="price-item__wrap">
										<div class="price-item__head">
											<div class="price-item__icon">
												<?php if ( $business_icon ) : ?>
													<img src="<?php echo esc_url( $business_icon['url'] ); ?>" alt="<?php echo esc_attr( $business_icon['alt'] ); ?>" />
												<?php endif; ?>
											</div>
											<h4 class="price-item__name"><?php the_sub_field( 'name' ); ?></h4>
											<div class="price-item__price-label"><?php the_sub_field( 'price_label' ); ?></div>
											<div class="price-item__price-val"><?php the_sub_field( 'price' ); ?></div>
											<div class="price-item__price-text"><?php the_sub_field( 'price_description' ); ?></div>
										</div>
										<div class="price-item__divider"></div>
										<div class="price-item__frame">
											<?php if ( have_rows( 'business_included_text_list' ) ) : ?>
												<div class="price-item__included-title">What’s included:</div>
												<ul class="price-item__included-list">
													<?php while ( have_rows( 'business_included_text_list' ) ) : the_row(); ?>
														<li class="price-item__included-item price-item__included-item--<?php the_sub_field( 'icon' ); ?>"><?php the_sub_field( 'text' ); ?></li>
													<?php endwhile; ?>
												</ul>
											<?php endif; ?>
											<div class="price-item__button">
												<a data-fancybox="business-modal" data-pricing-plan="<?php the_sub_field( 'name' ); ?> Plan" data-src="#business-modal" href="#" class="btn secondary-btn btn--sm-tab secondary-btn--filled-white">
													<span class="secondary-btn__text"><?php the_sub_field( 'button_text' ); ?></span>
													<span class="secondary-btn__icon"><svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-arrow-up-right"></use></svg></span>
												</a>
											</div>
										</div>
									</div>
									<?php if ( have_rows( 'modal_information_business' ) ) : ?>
										<?php while ( have_rows( 'modal_information_business' ) ) : the_row(); ?>
											<?php $business_modal_icon = get_sub_field( 'business_modal_icon' ); ?>
											<div id="business-modal" class="price-modal modal-block">
												<div class="price-modal__wrap">
													<div class="price-modal__form">
														<?php echo do_shortcode($contactModalForm); ?>
													</div>
													<div class="price-modal__frame">
														<?php if ( $business_modal_icon ) : ?>
															<div class="price-modal__icon">
																<img src="<?php echo esc_url( $business_modal_icon['url'] ); ?>" alt="<?php echo esc_attr( $business_modal_icon['alt'] ); ?>" />
															</div>
														<?php endif; ?>
														<div class="price-modal__title"><?php the_sub_field( 'modal_title' ); ?></div>
														<?php if ( have_rows( 'business_plan_benefits' ) ) : ?>
															<ul class="price-modal__text-list">
																<?php while ( have_rows( 'business_plan_benefits' ) ) : the_row(); ?>
																	<li class="price-modal__text-list-item"><?php the_sub_field( 'text_item' ); ?></li>
																<?php endwhile; ?>
															</ul>
														<?php endif; ?>
														<?php if (get_sub_field( 'modal_description' )): ?>
															<div class="price-modal__description"><?php the_sub_field( 'modal_description' ); ?></div>
														<?php endif ?>
													</div>
												</div>
											</div>
										<?php endwhile; ?>
									<?php endif; ?>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
						<?php if ( have_rows( 'custom' ) ) : ?>
							<?php while ( have_rows( 'custom' ) ) : the_row(); ?>
								<?php $custom_icon = get_sub_field( 'custom_icon' ); ?>
								<div class="price-item price-item--custom" data-aos="fade-up" data-aos-duration="600" data-aos-delay="1100">
									<div class="price-item__wrap">
										<div class="price-item__head">
											<div class="price-item__icon">
												<?php if ( $custom_icon ) : ?>
													<img src="<?php echo esc_url( $custom_icon['url'] ); ?>" alt="<?php echo esc_attr( $custom_icon['alt'] ); ?>" />
												<?php endif; ?>
											</div>
											<h4 class="price-item__name"><?php the_sub_field( 'name' ); ?></h4>
											<div class="price-item__price-label"><?php the_sub_field( 'price_label' ); ?></div>
											<div class="price-item__price-val"><?php the_sub_field( 'price' ); ?></div>
											<div class="price-item__price-text"><?php the_sub_field( 'price_description' ); ?></div>
										</div>
										<div class="price-item__divider"></div>
										<div class="price-item__frame">
											<?php if ( have_rows( 'custom_included_text_list' ) ) : ?>
												<div class="price-item__included-title">What’s included:</div>
												<ul class="price-item__included-list">
													<?php while ( have_rows( 'custom_included_text_list' ) ) : the_row(); ?>
														<li class="price-item__included-item price-item__included-item--<?php the_sub_field( 'icon' ); ?>"><?php the_sub_field( 'text' ); ?></li>
													<?php endwhile; ?>
												</ul>
											<?php endif; ?>
											<div class="price-item__button">
												<a data-fancybox="custom-modal" data-pricing-plan="<?php the_sub_field( 'name' ); ?> Plan" data-src="#custom-modal" href="#" class="btn secondary-btn btn--sm-tab secondary-btn--navy">
													<span class="secondary-btn__text"><?php the_sub_field( 'button_text' ); ?></span>
													<span class="secondary-btn__icon"><svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-arrow-up-right"></use></svg></span>
												</a>
											</div>
										</div>
									</div>
									<?php if ( have_rows( 'modal_information_custom' ) ) : ?>
										<?php while ( have_rows( 'modal_information_custom' ) ) : the_row(); ?>
											<?php $custom_modal_icon = get_sub_field( 'custom_modal_icon' ); ?>
											<div id="custom-modal" class="price-modal modal-block">
												<div class="price-modal__wrap">
													<div class="price-modal__form">
														<?php echo do_shortcode($contactModalForm); ?>
													</div>
													<div class="price-modal__frame">
														<?php if ( $custom_modal_icon ) : ?>
															<div class="price-modal__icon">
																<img src="<?php echo esc_url( $custom_modal_icon['url'] ); ?>" alt="<?php echo esc_attr( $custom_modal_icon['alt'] ); ?>" />
															</div>
														<?php endif; ?>
														<div class="price-modal__title"><?php the_sub_field( 'modal_title' ); ?></div>
														<?php if ( have_rows( 'custom_plan_benefits' ) ) : ?>
															<ul class="price-modal__text-list">
																<?php while ( have_rows( 'custom_plan_benefits' ) ) : the_row(); ?>
																	<li class="price-modal__text-list-item"><?php the_sub_field( 'text_item' ); ?></li>
																<?php endwhile; ?>
															</ul>
														<?php endif; ?>
														<?php if (get_sub_field( 'modal_description' )): ?>
															<div class="price-modal__description"><?php the_sub_field( 'modal_description' ); ?></div>
														<?php endif ?>
													</div>
												</div>
											</div>
										<?php endwhile; ?>
									<?php endif; ?>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
			</section>
		<?php endif; ?>
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