<?php

get_header();
?>
<?php 
$showPricing = false;
if (have_rows( 'price_section' )) {
	while ( have_rows( 'price_section' ) ) : the_row();
		if (get_sub_field( 'show_section' ) == 1) {
			$showPricing = true;
		}
	endwhile;
}

 ?>

<div class="services-sections blog-article__progress">
	<section class="services-head-section ">
	    <div class="container">
	        <div class="services-head-section__title">
	            <h1 class="services-head-section__h1 crit_el"  data-aos="fade" data-aos-delay="600">
	                <div class="index-head-title__text">
	                    <span class="index-head-title__dynamic Typewriter__wrapper"><?php the_title(); ?>,</span>
	                    
	                    
	                    <span class="index-head-title__after">considered.</span>
	                </div>
	                

	            </h1>
	            <div class="button" data-aos="fade" data-aos-delay="900">
	                <a href="#" class="btn btn--sm-tab round-btn round-btn--cream round-btn--light jump-to" data-target=".service-intro-section">
	                    <span class="round-btn__text">Learn More</span>
	                    <span class="round-btn__icon"><svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-arrow-down"></use></svg></span>
	                </a>
	            </div>
	        </div>
	    </div>
	</section>
	<section class="service-intro-section">
		<div class="container">
			<div class="service-intro">
				<div class="service-intro__visual" data-aos="fade-up" data-aos-delay="1300">
					<?php echo get_the_post_thumbnail( $page->ID, 'full', array(
						'alt' => the_title_attribute(
							array(
								'echo' => false,
							)
						),
					)); ?>
				</div>
				<div class="service-intro__frame">
					<div class="service-intro__text" data-aos="fade" data-aos-delay="1500"><?php the_field( 'intro_description' ); ?></div>
				</div>
			</div>
		</div>
	</section>
	


	<?php if ( have_rows( 'when_section' ) ) : ?>
		<?php while ( have_rows( 'when_section' ) ) : the_row(); ?>
			<section class="service-when-section">
				<div class="container">
					<div class="service-when-section__head">
						<div class="service-section-label" data-aos="fade" data-aos-delay="300">When</div>
						<h2 class="service-when-section__title h2" data-aos="fade" data-aos-delay="500"><?php the_sub_field( 'section_title' ); ?></h2>
					</div>
					
					<?php if ( have_rows( 'block_list' ) ) : ?>
						<?php $delayCount = 700; ?>
						<ul class="service-when-block-list">
							<?php while ( have_rows( 'block_list' ) ) : the_row(); ?>
								<li class="service-when-block-list__item" data-aos="fade-up" data-aos-delay="<?php echo $delayCount; ?>">
									<div class="service-when-block-list__icon">
										<?php if ( get_sub_field( 'custom_icon_trigger' ) == 1 ) : ?>
											<?php if ( have_rows( 'custom_icon_group' ) ) : ?>
												<?php while ( have_rows( 'custom_icon_group' ) ) : the_row(); ?>
													<?php if (get_sub_field( 'icon_type' ) == 'image'): ?>
														<?php $image = get_sub_field( 'image' ); ?>
														<?php if ( $image ) : ?>
															<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
														<?php endif; ?>
													<?php else: ?>
														<svg class="svg-icon" width="56" height="56"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#<?php the_sub_field( 'icon_name' ); ?>"></use></svg>
													<?php endif ?>
												<?php endwhile; ?>
											<?php endif; ?>
										<?php else : ?>
											<svg class="svg-icon" width="56" height="56"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#<?php the_field( 'service_icon' ); ?>"></use></svg>
										<?php endif; ?>
									</div>
									<h3 class="service-when-block-list__title h5"><?php the_sub_field( 'title' ); ?></h3>
									<div class="service-when-block-list__text"><?php the_sub_field( 'text' ); ?></div>
								</li>
								<?php $delayCount = $delayCount + 200; ?>
								
							<?php endwhile; ?>
						</ul>
					<?php endif; ?>

				</div>
			</section>
		<?php endwhile; ?>
	<?php endif; ?>

	<?php if ( have_rows( 'why_section' ) ) : ?>
		<?php while ( have_rows( 'why_section' ) ) : the_row(); ?>
			<section class="service-why-section">
				<div class="container">
					<div class="grid-row">
						<div class="grid-col grid-col--5 grid-col-sm--6 grid-col-xs--12 service-why-section__frame">
							<div class="service-section-label" data-aos="fade" data-aos-delay="300">why</div>
							<h2 class="h2 service-why-section__title" data-aos="fade" data-aos-delay="500"><?php the_sub_field( 'section_title' ); ?></h2>
							<div class="service-why-section__text" data-aos="fade" data-aos-delay="700"><?php the_sub_field( 'section_description' ); ?></div>
							<?php if ($showPricing): ?>
								<div class="service-why-section__btn">
									<a href="#" class="btn secondary-btn secondary-btn--blue jump-to" data-target=".service-price-section">
										<span class="secondary-btn__text">See Pricing</span>
									</a>
								</div>
							<?php endif ?>
						</div>
						<div class="grid-col grid-col--7 grid-col-sm--6 grid-col-xs--12 service-why-section__visual" data-aos="fade-left" data-aos-delay="800">
							<?php $section_image = get_sub_field( 'section_image' ); ?>
							<?php if ( $section_image ) : ?>
								<div class="service-why-section__img">
									<img src="<?php echo esc_url( $section_image['url'] ); ?>" alt="<?php echo esc_attr( $section_image['alt'] ); ?>" />
								</div>
							<?php endif; ?>
						</div>
					</div>
					
				</div>
			</section>
		<?php endwhile; ?>
	<?php endif; ?>

	<?php if ( have_rows( 'now_section' ) ) : ?>
		<?php while ( have_rows( 'now_section' ) ) : the_row(); ?>
			<section class="service-how-section">
				<div class="container">
					<div class="service-how-section__header">
						<div class="service-section-label" data-aos="fade" data-aos-delay="300">HOW</div>
						<h2 class="service-how-section__title h2" data-aos="fade" data-aos-delay="500"><?php the_sub_field( 'section_title' ); ?></h2>
					</div>
					<div class="service-how-section__wrap">
						<div class="service-how-section__visual">
							<div class="service-how-section__top">
								<div class="service-section-label" data-aos="fade" data-aos-delay="300">HOW</div>
								<div class="service-how-section__title h2" data-aos="fade" data-aos-delay="500"><?php the_sub_field( 'section_title' ); ?></div>
							</div>
							<div class="service-how-section__svg service-how-section__svg--desktop" data-aos="fade" data-aos-delay="800">
								<?php echo get_sub_field( 'section_svg' ); ?>
							</div>
							<div class="service-how-section__svg service-how-section__svg--tablet" data-aos="fade" data-aos-delay="800">
								<?php echo get_sub_field( 'tablet_svg_code' ); ?>
							</div>
						</div>
						<div class="service-how-section__frame">
							<?php if ( have_rows( 'steps_list' ) ) : ?>
								<?php $counter = 0; ?>
								<div class="process-steps" data-aos="fade-left" data-aos-delay="800">
									<?php while ( have_rows( 'steps_list' ) ) : the_row(); ?>
										<?php $counter = $counter + 1; ?>
										<div class="process-steps__item">
											<div class="process-steps__head">
												<div class="process-steps__num"><?php echo $counter; ?></div>
												<h3 class="process-steps__title"><?php the_sub_field( 'step_name' ); ?></h3>
											</div>
											<div class="process-steps__text">
												<div class="process-steps__content"><?php the_sub_field( 'step_text' ); ?></div>
											</div>
											<span class="process-steps__progress"></span>
										</div>
									<?php endwhile; ?>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</section>
		<?php endwhile; ?>
	<?php endif; ?>


	<?php if ( have_rows( 'projects_section' ) ) : ?>
		<?php while ( have_rows( 'projects_section' ) ) : the_row(); ?>
			<?php $cases_service = get_sub_field( 'cases_service' ); ?>
			<?php $term = get_term_by( 'id', $cases_service, 'service' ); ?>

			<?php if ( get_sub_field( 'show_section' ) == 1 ) : ?>
				<section class="service-projects-section">
					<div class="container">
						<div class="service-projects-section__head">
							<h2 class="service-projects-section__title h3" data-aos="fade" data-aos-delay="300">Our <?php the_title(); ?> Projects</h2>
							<div class="service-projects-section__button" data-aos="fade" data-aos-delay="400">
								<?php if ( $term ) : ?>
									<a href="<?php echo esc_url( get_term_link( $term ) ); ?>" class="btn teritiary-btn teritiary-btn--blue">
									<span class="teritiary-btn__text">View more</span>
									<span class="teritiary-btn__icon"><svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
								</a>
								<?php endif; ?>
							</div>
						</div>

						<div class="service-projects-list">
							<?php
							global $post;
							$tmp_post = $post;
							$args = array( 
								'post_type'   => 'portfolio',
								'numberposts' => 3,
								'orderby'     => 'date',
								'order'       => 'DESC',
								'tax_query'   => array(
									array(
										'taxonomy' => 'service',
										'field' => 'slug',
										'terms' => $term->slug,
									),
								),
							);
							$myposts = get_posts( $args );
							foreach( $myposts as $post ){ setup_postdata($post);
								?>
								<a href="<?php the_permalink(); ?>" class="service-projects-item" data-aos="fade-up" data-aos-delay="700">
									<div class="service-projects-item__visual">
										<?php echo get_the_post_thumbnail( $page->ID, 'anneco-work-thumbnail-x2', array(
											'alt' => the_title_attribute(
												array(
													'echo' => false,
												)
											),
										)); ?>
									</div>
									<div class="service-projects-item__frame">
										<?php if ( have_rows( 'company_information' ) ) : ?>
											<?php while ( have_rows( 'company_information' ) ) : the_row(); ?>
												<div class="service-projects-item__tags">
													<?php if (get_sub_field( 'industry' )): ?>
														<div class="service-projects-item__tag service-projects-item__tag--blue"><?php the_sub_field( 'industry' ); ?></div>
													<?php endif ?>
													<?php if (get_sub_field( 'sector' )): ?>
														<div class="service-projects-item__tag service-projects-item__tag--orange"><?php the_sub_field( 'sector' ); ?></div>
													<?php endif ?>
												</div>
											<?php endwhile; ?>
										<?php endif; ?>
										<h4 class="service-projects-item__name h3"><?php the_title(); ?></h4>
										<div class="service-projects-item__text"><?php the_excerpt(); ?></div>
									</div>
								</a>
								
								<?php
							}

							$post = $tmp_post;
							?>
							
						</div>
					</div>
				</section>
			<?php endif; ?>
			
		<?php endwhile; ?>
	<?php endif; ?>


	<?php if (get_field( 'work_actions_type' ) == 'ba'): ?>
		<?php if ( have_rows( 'beforeafter_section' ) ) : ?>
			<?php while ( have_rows( 'beforeafter_section' ) ) : the_row(); ?>
				<?php $image_before = get_sub_field( 'image_before' ); ?>
				<?php $image_after = get_sub_field( 'image_after' ); ?>
				<?php $image_mobile_before = get_sub_field( 'image_mobile_before' ); ?>
				<?php $image_mobile_after = get_sub_field( 'image_mobile_after' ); ?>
				<?php if ($image_before || $image_after): ?>
					<section class="service-ba-section">
						<div class="service-ba-section__bg" data-aos="fade-up" data-aos-delay="400"></div>
						<div class="container">
							<div class="service-ba-section__head">
								<div class="service-ba-section__title h2" data-aos="fade" data-aos-delay="900"><?php the_sub_field( 'section_title' ); ?></div>
								<div class="service-ba-section__description" data-aos="fade" data-aos-delay="1100"><?php the_sub_field( 'section_description' ); ?></div>
							</div>
							<div class="ba-block-head">
								&nbsp;
							</div>
							<div class="ba-block ba-block--desktop image-compare-viewer" data-aos="fade-up" data-aos-delay="1400">
								<?php if ( $image_before ) : ?>
									<img src="<?php echo esc_url( $image_before['url'] ); ?>" alt="<?php echo esc_attr( $image_before['alt'] ); ?>" />
								<?php endif; ?>
								<?php if ( $image_after ) : ?>
									<img class="after-image" src="<?php echo esc_url( $image_after['url'] ); ?>" alt="<?php echo esc_attr( $image_after['alt'] ); ?>" />
								<?php endif; ?>
							</div>

							<div class="ba-block ba-block--mobile image-compare-viewer" data-aos="fade-up" data-aos-delay="1400">
								<?php if ( $image_mobile_before ) : ?>
									<img src="<?php echo esc_url( $image_mobile_before['url'] ); ?>" alt="<?php echo esc_attr( $image_mobile_before['alt'] ); ?>" />
								<?php endif; ?>
								<?php if ( $image_mobile_after ) : ?>
									<img class="after-image" src="<?php echo esc_url( $image_mobile_after['url'] ); ?>" alt="<?php echo esc_attr( $image_mobile_after['alt'] ); ?>" />
								<?php endif; ?>
							</div>
						</div>
					</section>
				<?php endif ?>
			<?php endwhile; ?>
		<?php endif; ?>
	<?php endif ?>






	<?php if (get_field( 'work_actions_type' ) == 'tabs'): ?>
		<?php if ( have_rows( 'text_tabs' ) ) : ?>
			<?php while ( have_rows( 'text_tabs' ) ) : the_row(); ?>
				<section class="offer-tabs-section">
					<div class="container">
						<div class="offer-tabs-section__title h2" data-aos="fade" data-aos-delay="500"><?php the_sub_field( 'section_title' ); ?></div>
						<?php if ( have_rows( 'list_items' ) ) : ?>
							<div class="offer-tabs" data-aos="fade-up" data-aos-delay="800">
								<div class="offer-tabs__control">
									<?php $slideCount = 0; ?>

									<?php while ( have_rows( 'list_items' ) ) : the_row(); ?>
										<?php $item_icon = get_sub_field( 'item_icon' ); ?>
										<div class="offer-tabs__control-item <?php if ($slideCount == 0): ?>active<?php endif; ?>" data-slide="<?php echo $slideCount; ?>">
											<div class="offer-tabs__control-icon">
												<?php if ( $item_icon ) : ?>
													<img src="<?php echo esc_url( $item_icon['url'] ); ?>" alt="<?php echo esc_attr( $item_icon['alt'] ); ?>" />
												<?php endif; ?>
											</div>
											<div class="offer-tabs__control-title h5"><?php the_sub_field( 'item_title' ); ?></div>
										</div>
										<?php $slideCount = $slideCount + 1; ?>
									<?php endwhile; ?>
								</div>
								<div class="offer-tabs__wrap">
									<div class="offer-tabs__slider owl-carousel">
										<?php while ( have_rows( 'list_items' ) ) : the_row(); ?>
											<div class="offer-tabs__slide-item">
												<div class="offer-tabs__slide-frame">
													<h3 class="offer-tabs__slide-title h3"><?php the_sub_field( 'item_title' ); ?></h3>
													<div class="offer-tabs__slide-text"><?php the_sub_field( 'item_text' ); ?></div>
												</div>
											</div>
										<?php endwhile; ?>
									</div>
								</div>
							</div>
						<?php endif; ?>
						<?php if ( have_rows( 'list_items' ) ) : ?>
							<div class="offer-mobile-list">
								<?php while ( have_rows( 'list_items' ) ) : the_row(); ?>
									<?php $item_icon = get_sub_field( 'item_icon' ); ?>
									<div class="offer-mobile-list__item">
										<div class="offer-mobile-list__header">
											<div class="offer-mobile-list__icon">
												<?php if ( $item_icon ) : ?>
													<img src="<?php echo esc_url( $item_icon['url'] ); ?>" alt="<?php echo esc_attr( $item_icon['alt'] ); ?>" />
												<?php endif; ?>
											</div>
											<div class="offer-mobile-list__title h5"><?php the_sub_field( 'item_title' ); ?></div>
										</div>
										<div class="offer-mobile-list__frame"><?php the_sub_field( 'item_text' ); ?></div>
									</div>
								<?php endwhile; ?>
							</div>
						<?php endif; ?>
					</div>
				</section>
			<?php endwhile; ?>
		<?php endif; ?>
	<?php endif ?>


	<?php if (get_field( 'work_actions_type' ) == 'image-grid'): ?>

		<?php if ( have_rows( 'image_grid' ) ) : ?>
			<?php while ( have_rows( 'image_grid' ) ) : the_row(); ?>
				<?php $images_images = get_sub_field( 'images' ); ?>
				<section class="service-image-grid-section">
					<div class="container">
						<div class="service-image-grid-section__wrap">
							<div class="service-image-grid-section__head">
								<h3 class="service-image-grid-section__title h2" data-aos="fade" data-aos-delay="400"><?php the_sub_field( 'section_title' ); ?></h3>
								<div class="service-image-grid-section__description" data-aos="fade" data-aos-delay="600"><?php the_sub_field( 'section_description' ); ?></div>
							</div>
							<?php if ( $images_images ) :  ?>
								<div class="service-image-grid">
									<?php $countDelay = 600; ?>
									<?php foreach ( $images_images as $images_image ): ?>
										<a data-fancybox="grid" class="service-image-grid__item" data-aos="zoom-in" data-aos-delay="<?php echo $countDelay;?>" data-src="<?php echo esc_url( $images_image['url'] ); ?>">
											<span class="link-text-description"><?php echo esc_url( $images_image['url'] ); ?></span>
											<img src="<?php echo esc_url( $images_image['sizes']['anneco-work-thumbnail'] ); ?>" alt="<?php echo esc_attr( $images_image['alt'] ); ?>" />
										</a>
										<?php $countDelay = $countDelay + 100; ?>
									<?php endforeach; ?>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</section>
			<?php endwhile; ?>
		<?php endif; ?>
	<?php endif ?>





	<?php if ( have_rows( 'offer_section' ) ) : ?>
		<?php while ( have_rows( 'offer_section' ) ) : the_row(); ?>
			<section class="service-offer-section">
				<div class="container">
					<?php if (get_sub_field( 'section_title' )): ?>
						<h2 class="service-offer-section__title h3" data-aos="fade" data-aos-delay="400"><?php the_sub_field( 'section_title' ); ?></h2>
					<?php endif ?>
					<?php if ( have_rows( 'section_group' ) ) : ?>
						<?php $delayCount = 600; ?>
						<div class="service-offer-grid">
							<?php while ( have_rows( 'section_group' ) ) : the_row(); ?>
								<div class="service-offer-grid__item" data-aos="fade" data-aos-delay="<?php echo $delayCount; ?>">
									<?php if (get_sub_field( 'group_title' )): ?>
										<h3 class="service-offer-grid__title h4"><?php the_sub_field( 'group_title' ); ?></h3>
									<?php endif ?>
									<?php if ( have_rows( 'offer_list' ) ) : ?>
										<div class="service-offer-grid__list">
											<?php while ( have_rows( 'offer_list' ) ) : the_row(); ?>
												<div class="service-offer-grid__list-item"><?php the_sub_field( 'text' ); ?></div>
											<?php endwhile; ?>
										</div>
									<?php endif; ?>
								</div>
								<?php $delayCount = $delayCount + 200; ?>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>
				</div>
			</section>
		<?php endwhile; ?>
	<?php endif; ?>

	<?php if ( have_rows( 'tools_section' ) ) : ?>
		<?php while ( have_rows( 'tools_section' ) ) : the_row(); ?>
			<section class="service-tools-section">
				<div class="container">
					<h2 class="service-tools-section__title h3" data-aos="fade" data-aos-delay="300"><?php the_sub_field( 'section_title' ); ?></h2>
					<?php if ( have_rows( 'icon_group' ) ) : ?>
						<div class="service-tools-info">
							<?php while ( have_rows( 'icon_group' ) ) : the_row(); ?>
								<div class="service-tools-info__item">
									<div class="service-tools-info__title h4" data-aos="fade" data-aos-delay="500"><?php the_sub_field( 'icon_group_title' ); ?></div>
									<?php if ( have_rows( 'icon_list' ) ) : ?>
										<div class="service-tools-list">
											<?php $delayCount = 600; ?>
											<?php while ( have_rows( 'icon_list' ) ) : the_row(); ?>
												<?php $image = get_sub_field( 'image' ); ?>
												<div class="service-tools-list__item" data-aos="fade-up" data-aos-delay="<?php echo $delayCount; ?>">
													<div class="service-tools-list__icon">
														<?php if ( $image ) : ?>
															<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
														<?php endif; ?>
													</div>
													<div class="service-tools-list__text h6"><?php the_sub_field( 'text' ); ?></div>
												</div>
												<?php $delayCount = $delayCount + 200; ?>
											<?php endwhile; ?>
										</div>
									<?php endif; ?>
								</div>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>
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
							<h2 class="service-price-section__title h2" data-aos="fade" data-aos-delay="300"><?php the_sub_field( 'section_title' ); ?></h2>
							<div class="service-price-section__description" data-aos="fade" data-aos-delay="500"><?php the_sub_field( 'section_description' ); ?></div>
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
									<div class="price-item" data-aos="fade-up" data-aos-duration="600" data-aos-delay="800">
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
									<div class="price-item price-item--business" data-aos="fade-up" data-aos-duration="600" data-aos-delay="1100">
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


	<?php if ( have_rows( 'testimonial_list' ) ) : ?>
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
	<?php else : ?>
		<?php 
		get_template_part( 'template-parts/testimonial-section');
		?>
	<?php endif; ?>


</div>
<?php if ( have_rows( 'seo_section' ) ) : ?>
	<section class="seo-service-section">
		<div class="container">
			<div class="seo-service-section__tabs tabset">
				<?php $counterControl = 0; ?>
				<?php $counteritem = 0; ?>
				<ul class="seo-service-section__tab-control tab-control" data-aos="fade" data-aos-duration="300" data-aos-delay="300">
					<?php while ( have_rows( 'seo_section' ) ) : the_row(); ?>
						<li class="tab-control__item"><a href="#" class="seo-service-section__tab-opener tab-opener h5 <?php if ($counterControl == 0): ?>active<?php endif; ?>"><span><?php the_sub_field( 'tab_title' ); ?></span></a></li>
						<?php $counterControl = $counterControl + 1; ?>
					<?php endwhile; ?>
				</ul>
				<div class="seo-service-section__tab-items tab-items" data-aos="zoom-in" data-aos-duration="300" data-aos-delay="500">
					<?php while ( have_rows( 'seo_section' ) ) : the_row(); ?>
						<div class="tab-item <?php if ($counteritem == 0): ?>active<?php endif; ?>">
							<div class="category-seo">
								<div class="category-seo__wrap">
									<?php the_sub_field( 'tab_content' ); ?>
								</div>
							</div>
						</div>
						<?php $counteritem = $counteritem + 1; ?>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</section>
	
<?php endif; ?>

<section class="other-services">
	<div class="container">
		<div class="other-services__title h2" data-aos="fade-up" data-aos-delay="300">Other Services</div>
		<div class="other-services-grid">
			<?php $delayCount = 500; ?>
			<?php
			global $post;
			$tmp_post = $post;
			$otherServicesArgs = array( 
				'post_type'   => 'service',
				'numberposts' => -1,
				'orderby'     => 'date',
				'order'       => 'DESC',
				'exclude'     => $tmp_post->ID,
				
			);
			$otherServices = get_posts( $otherServicesArgs );
			foreach( $otherServices as $post ){ setup_postdata($post);
				?>
				<div class="other-services-grid__item" data-aos="fade" data-aos-delay="<?php echo $delayCount; ?>">
					<a href="<?php the_permalink(); ?>" class="other-services-item">
						<div class="other-services-item__icon">
							<svg class="svg-icon" width="64" height="64"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#<?php the_field( 'service_icon', $post->ID ); ?>"></use></svg>
						</div>
						<div class="other-services-item__name h5"><?php the_title(); ?></div>
					</a>
				</div>
				<?php $delayCount = $delayCount + 200; ?>
				<?php
			}
			$post = $tmp_post;
			?>
			
		</div>
	</div>
</section>

<?php 
get_template_part( 'template-parts/cta-section', '', array('color' => 'nude',) );
?>



<?php
get_footer();
