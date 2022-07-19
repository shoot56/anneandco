<?php 
/*
Template Name: Index Page Template
*/

get_header();
?>



<section class="projects-section">
	<div class="container">
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
		<h1 class="index-head-title" data-aos="fade-right" data-aos-delay="0">
			<?php if ( have_rows( 'hero_title' ) ) : ?>
				<?php while ( have_rows( 'hero_title' ) ) : the_row(); ?>
					<div class="index-head-title__text">
						<span class="index-head-title__before"><?php the_sub_field( 'before_title' ); ?> </span>
						<span id="index-head-title-dynamic" data-words="<?php 
							if (have_rows( 'dynamic_phrase' )) {
								$counter = 0;
								while (have_rows( 'dynamic_phrase' )) {
									the_row();
									if ($counter > 0) {
										echo '; ';
									}
									the_sub_field( 'text_item' );
									$counter = $counter + 1;
								}
							} 
							?>" class="index-head-title__dynamic"></span>
						<span class="index-head-title__after"><?php the_sub_field( 'after_title' ); ?></span>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</h1>
		<div class="index-head-mobile-btn">
			<a href="/work" class="btn btn--sm round-btn round-btn--cream">
				<span class="round-btn__text">View Our Work</span>
				<span class="round-btn__icon"><svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
			</a>
		</div>
		<div class="index-projects">
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

						get_template_part( 'template-parts/work-list-item-large', get_post_type(), $params );
					}
				}
				wp_reset_postdata();
			?>
			<div class="index-projects__all" data-aos="fade" data-aos-delay="0">
				<a href="/work" class="btn round-btn round-btn--cream round-btn--light">
					<span class="round-btn__text">View Our Work</span>
					<span class="round-btn__icon"><svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
				</a>
			</div>
		</div>
	</div>
</section>

<section class="section-services">
	<div class="container">
		<div class="section-services__head">
			<div class="section-services__label" data-aos="fade" data-aos-delay="200"><span>Services</span></div>
			<h2 class="section-services__title" data-aos="fade" data-aos-delay="400">
				<?php if ( have_rows( 'services_section' ) ) : ?>
					<?php while ( have_rows( 'services_section' ) ) : the_row(); ?>
						<?php the_sub_field( 'section_title' ); ?>
					<?php endwhile; ?>
				<?php endif; ?>

			</h2>
			<div class="section-services__button" data-aos="fade" data-aos-delay="600">
				<a href="/services" class="btn btn--sm-mob teritiary-btn teritiary-btn--blue">
					<span class="teritiary-btn__text">Learn More</span>
					<span class="teritiary-btn__icon"><svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
				</a>
			</div>
		</div>

		<div class="grid-services">
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
				<a href="<?php the_permalink(); ?>" class="grid-services__item" data-aos="fade-up" data-aos-delay="<?php echo $delayCount; ?>">
					<div class="grid-services__head">
						<div class="grid-services__icon">
							<svg class="svg-icon" width="32" height="32"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#<?php the_field( 'service_icon', $post->ID ); ?>"></use></svg>
						</div>
						<h5 class="grid-services__title"><span><?php the_title(); ?></span></h5>
					</div>
					<div class="grid-services__frame"><?php the_field( 'service_excerpt', $post->ID ); ?></div>
				</a>
				<?php $delayCount = $delayCount + 200; ?>
				<?php
			}
			$post = $tmp_post;
			?>
		</div>
	</div>
</section>
<?php if ( have_rows( 'team_section' ) ) : ?>
	<?php while ( have_rows( 'team_section' ) ) : the_row(); ?>
		<section class="team-section">
			<div class="team-section__bg"></div>
			<div class="container">
				<?php $video_preview_image = get_sub_field( 'video_preview_image' ); ?>
				<?php if ( $video_preview_image ) : ?>
					<div class="team-section__video" data-aos="fade-up" data-aos-delay="400" data-aos-duration="600">
						<a class="team-section__play" data-fancybox="video-gallery" href="<?php the_sub_field( 'video_link' ); ?>">
							<span class="team-section__play-text">Play Video</span>
							<img src="<?php echo esc_url( $video_preview_image['url'] ); ?>" alt="<?php echo esc_attr( $video_preview_image['alt'] ); ?>" />
						</a>
					</div>
				<?php endif; ?>
				<div class="team-section__frame">
					<div class="team-section__header">
						<h3 class="ttle" data-aos="fade" data-aos-delay="400" data-aos-duration="500"><?php the_sub_field( 'section_title' ); ?></h3>
						
						<div class="team-section__btn">
							<span class="team-section__btn-arrow" data-aos="fade-right" data-aos-delay="1200" data-aos-duration="800"></span>
							<div class="wrp" data-aos="fade" data-aos-delay="800" data-aos-duration="500" >
								<a href="/about-us" class="btn  btn--sm-mob secondary-btn secondary-btn--navy">
									<span class="round-btn__text">About Us</span>
									<span class="round-btn__icon"><svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
								</a>
							</div>
						</div>
					</div>
					<?php if ( have_rows( 'our_members' ) ) : ?>
						<?php $delay_count = 0; ?>
						<ul class="our-team-list">
							<?php while ( have_rows( 'our_members' ) ) : the_row(); ?>
								<?php $delay_count = $delay_count + 200; ?>
								<?php $image = get_sub_field( 'image' ); ?>
								<li class="our-team-list__item" data-aos="fade-up" data-aos-delay="<?php echo $delay_count; ?>" data-aos-duration="400" >
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
	<?php endwhile; ?>
<?php endif; ?>






<?php 
get_template_part( 'template-parts/logos-section');
?>



<?php 
get_template_part( 'template-parts/testimonial-section');
?>



<?php 
get_template_part( 'template-parts/last-blog-section');
?>



<?php 
get_template_part( 'template-parts/cta-section', '', array('color' => 'nude',) );
?>






<?php

get_footer();