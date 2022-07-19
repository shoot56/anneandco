<?php 
/*
Template Name: About Page Template
*/

get_header();
?>


<?php if ( have_rows( 'promo_section' ) ) : ?>
	<?php while ( have_rows( 'promo_section' ) ) : the_row(); ?>
		<?php $promo_image = get_sub_field( 'promo_image' ); ?>
		<section class="about-us-hero-section">
			<div class="container">
				<div class="about-us-hero-section__wrap grid-row">
					<div class="about-us-hero-section__frame grid-col--4 grid-col-md--12">
						<h1 class="about-us-hero-section__title" data-aos="fade" data-aos-delay="800"><?php the_sub_field( 'page_title' ); ?></h1>
						<div class="about-us-hero-section__button"  data-aos="fade" data-aos-delay="1000">
							<a href="#" class="btn btn--sm-tab round-btn round-btn--cream round-btn--light jump-to" data-target=".our-info-section">
			                    <span class="round-btn__text">Learn More</span>
			                    <span class="round-btn__icon"><svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-arrow-down"></use></svg></span>
			                </a>
						</div>
					</div>
					<div class="about-us-hero-section__visual grid-col--8 grid-col-md--12">
						<?php if ( $promo_image ) : ?>
							<div class="about-us-hero-section__img" data-aos="zoom-in" data-aos-delay="1200">
								<img src="<?php echo esc_url( $promo_image['url'] ); ?>" alt="<?php echo esc_attr( $promo_image['alt'] ); ?>" />
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</section>
	<?php endwhile; ?>
<?php endif; ?>

<?php if ( have_rows( 'info_section' ) ) : ?>
	<?php while ( have_rows( 'info_section' ) ) : the_row(); ?>
		<section class="our-info-section">
			<div class="container">
				<div class="our-info-section__wrap grid-row">
					<div class="our-info-section__frame grid-col--4 grid-col-md--12">
						<div class="our-info-section__aside" data-aos="fade" data-aos-delay="600">
							<h2 class="our-info-section__title h2"><?php the_sub_field( 'section_title' ); ?></h2>
							<?php if (get_sub_field( 'section_description' )): ?>
								<div class="our-info-section__description"><?php the_sub_field( 'section_description' ); ?></div>
							<?php endif ?>
						</div>
					</div>
					<?php if ( have_rows( 'info_columns' ) ) : ?>
						<div class="our-info-list grid-col--8 grid-col-md--12">
							<?php $delayCount = 500; ?>
							<?php while ( have_rows( 'info_columns' ) ) : the_row(); ?>
								<?php $icon = get_sub_field( 'icon' ); ?>
								<div class="our-info-list__item" data-aos="fade-left" data-aos-delay="<?php echo $delayCount; ?>">
									<?php if ( $icon ) : ?>
										<div class="our-info-list__icon">
											<img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
										</div>
									<?php endif; ?>
									<h5 class="our-info-list__name"><?php the_sub_field( 'title' ); ?></h5>
									<div class="our-info-list__text"><?php the_sub_field( 'text' ); ?></div>
								</div>
								<?php $delayCount = $delayCount + 200; ?>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</section>
	<?php endwhile; ?>
<?php endif; ?>


<?php if ( have_rows( 'location_section' ) ) : ?>
	<?php while ( have_rows( 'location_section' ) ) : the_row(); ?>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBlr964IX_l3Q1JI6N7PQ0PmxQyyhSiehY"></script>
		
		
		<?php $button = get_sub_field( 'button' ); ?>
		
		<?php $map = get_sub_field( 'map' ); ?>
		<div class="location-section-wrap">
			<section class="location-section">
				<span class="location-section__bg" data-aos="slide-right" data-aos-delay="100"></span>
				<div class="container">
					<div class="location-section__wrap grid-row">
						<div class="location-section__frame grid-col--4 grid-col-lg--5 grid-col-md--4  grid-col-sm--12">
							<div class="location-section__block">
								<h2 class="location-section__title" data-aos="fade" data-aos-delay="400"><?php the_sub_field( 'section_title' ); ?></h2>
								<div class="location-section__text" data-aos="fade" data-aos-delay="600"><?php the_sub_field( 'section_description' ); ?></div>
								<div class="location-section__button" data-aos="fade" data-aos-delay="800">
									<?php if ( $button ) : ?>
										<a></a>
										<a href="<?php echo esc_url( $button['url'] ); ?>" target="<?php echo esc_attr( $button['target'] ); ?>" class="btn secondary-btn secondary-btn--navy">
											<span class="secondary-btn__text"><?php echo esc_html( $button['title'] ); ?></span>
											<span class="secondary-btn__icon"><svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-arrow-up-right"></use></svg></span>
										</a>
									<?php endif; ?>
								</div>
							</div>
						</div>
						<div class="location-section__map grid-col--8 grid-col-lg--7 grid-col-md--8 grid-col-sm--12">
							<?php if ( $map ) : ?>
								<div class="acf-map" data-aos="zoom-in" data-aos-delay="1000" data-zoom="<?php echo $map['zoom']; ?>">
									<div class="marker" data-lat="<?php echo esc_attr($map['lat']); ?>" data-lng="<?php echo esc_attr($map['lng']); ?>">
										<h4>anne+co</h4>
										<p><?php echo esc_html( $map['address'] ); ?></p>
									</div>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</section>
		</div>
	<?php endwhile; ?>
<?php endif; ?>

<?php if ( have_rows( 'clients_section' ) ) : ?>
	<?php while ( have_rows( 'clients_section' ) ) : the_row(); ?>
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
								<div class="client-logos-grid__item" data-aos="fade" data-aos-delay="<?php echo $delayCount; ?>">
									<img src="<?php echo esc_url( $logo_image['url'] ); ?>" alt="<?php echo esc_attr( $logo_image['alt'] ); ?>" />
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
<?php 
$frontpage_id = get_option( 'page_on_front' );
 ?>
<?php if ( have_rows( 'team_section', $frontpage_id ) ) : ?>
	<?php while ( have_rows( 'team_section', $frontpage_id ) ) : the_row(); ?>
		<div class="team-section-wrap">
			<section class="team-section">
				<div class="team-section__bg"></div>
				<div class="container">
					<?php $video_preview_image = get_sub_field( 'video_preview_image' ); ?>
					<?php if ( $video_preview_image ) : ?>
						<div class="team-section__video"  data-aos="fade-up" data-aos-delay="400">
							<a class="team-section__play" data-fancybox="video-gallery" href="<?php the_sub_field( 'video_link' ); ?>">
								<span class="team-section__play-text">Play Video</span>
								<img src="<?php echo esc_url( $video_preview_image['url'] ); ?>" alt="<?php echo esc_attr( $video_preview_image['alt'] ); ?>" />
							</a>
						</div>
					<?php endif; ?>
					<div class="team-section__frame">
						<div class="team-section__header team-section__header--center">
							<h3 class="" data-aos="fade" data-aos-delay="600"><?php the_sub_field( 'section_title' ); ?></h3>
							
						</div>
						<?php if ( have_rows( 'our_members' ) ) : ?>
							<?php $delay_count = 0; ?>
							<ul class="our-team-list">
								<?php while ( have_rows( 'our_members' ) ) : the_row(); ?>
									<?php $delay_count = $delay_count + 200; ?>
									<?php $image = get_sub_field( 'image' ); ?>
									<li class="our-team-list__item " data-aos="fade-up" data-aos-delay="<?php echo $delay_count; ?>">
										<div class="member-item">
											<div class="member-item__visual">
												<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
											</div>
											<div class="member-item__frame">
												<div class="member-item__name"><?php the_sub_field( 'name' ); ?></div>
												<div class="member-item__post"><?php the_sub_field( 'post' ); ?></div>
												<div class="member-item__socials">
													<?php if (get_sub_field( 'linkedin' )): ?>
														<a target="_blank" href="<?php the_sub_field( 'linkedin' ); ?>" class="member-item__social-link">
															<span class="link-text-description">linkedin</span>
															<svg class="svg-icon" width="14" height="14"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-linkedin"></use></svg>
														</a>
													<?php endif ?>
													<?php if (get_sub_field( 'email' )): ?>
														<a href="mailto:<?php the_sub_field( 'email' ); ?>" class="member-item__social-link">
															<span class="link-text-description">email</span>
															<svg class="svg-icon" width="14" height="14"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-mail"></use></svg>
														</a>
													<?php endif ?>
												</div>
											</div>
										</div>
									</li>
								<?php endwhile; ?>
							</ul>
						<?php endif; ?>
					</div>
				</div>
			</section>
		</div>
	<?php endwhile; ?>
<?php endif; ?>

<?php if ( have_rows( 'offer_section' ) ) : ?>
	<?php while ( have_rows( 'offer_section' ) ) : the_row(); ?>
		<section class="offer-section">
			<div class="container">
				<div class="offer-section__wrap  grid-row">
					<div class="offer-section__aside grid-col--5 grid-col-xl--4 grid-col-md--12">
						<div class="offer-section__head">
							<h3 class="offer-section__title" data-aos="fade" data-aos-delay="600"><?php the_sub_field( 'section_title' ); ?></h3>
							<div class="offer-section__text" data-aos="fade" data-aos-delay="800"><?php the_sub_field( 'section_description' ); ?></div>
						</div>
					</div>
					<div class="offer-section__frame grid-col--7 grid-col-xl--8 grid-col-md--12">
						<?php if ( have_rows( 'offer_items' ) ) : ?>
							<?php $delayCount = 1000; ?>
							<div class="offer-items-grid">
								<?php while ( have_rows( 'offer_items' ) ) : the_row(); ?>
									<?php $icon = get_sub_field( 'icon' ); ?>
									<div class="offer-items-grid__frame" data-aos="zoom-in" data-aos-delay="<?php echo $delayCount; ?>">
										<div class="offer-items-grid__item">
											<?php if ( $icon ) : ?>
												<div class="offer-items-grid__icon">
													<img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
												</div>
											<?php endif; ?>
											<h5 class="offer-items-grid__title h5"><?php the_sub_field( 'title' ); ?></h5>
											<div class="offer-items-grid__text"><?php the_sub_field( 'text' ); ?></div>
										</div>
									</div>
									<?php $delayCount = $delayCount + 200; ?>
								<?php endwhile; ?>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</section>
	<?php endwhile; ?>
<?php endif; ?>







<?php 
get_template_part( 'template-parts/testimonial-section');
?>

<?php 
get_template_part( 'template-parts/last-blog-section');
?>

<?php 
get_template_part( 'template-parts/cta-section', '', array('color' => 'cream',) );
?>


<?php

get_footer();