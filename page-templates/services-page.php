<?php 
/*
Template Name: Services Page Template
*/

get_header();
?>

<?php 
// remove this if
if (is_user_logged_in()): 
?>
<section class="services-head-section">
	<div class="container">
		<div class="services-head-section__title">
			<h1 class="services-head-section__h1 tst wow animate__animated animate__fadeIn crit_el" data-wow-delay="0s" data-first-delay="2.8s"  data-wow-duration=".3s">
				<?php if ( have_rows( 'hero_title' ) ) : ?>
					<?php while ( have_rows( 'hero_title' ) ) : the_row(); ?>
						<div class="index-head-title__text">
							<?php if (get_sub_field( 'before_title' )): ?>
								<span class="index-head-title__before"><?php the_sub_field( 'before_title' ); ?>&nbsp;</span>
							<?php endif ?>
							<span id="services-head-title-dynamic" data-words="<?php 
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
							?>" class="index-head-title__dynamic">&nbsp;</span>
							<span class="index-head-title__after"><?php the_sub_field( 'after_title' ); ?></span>
						</div>
					<?php endwhile; ?>
				<?php else: ?>
					<?php the_field( 'page_title' ); ?>
				<?php endif; ?>

			</h1>
			<div class="button">
				<a href="#" class="btn round-btn round-btn--cream round-btn--light">
					<span class="round-btn__text">View Showcase</span>
					<span class="round-btn__icon"><svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
				</a>
			</div>
		</div>
	</div>
</section>
<section class="all-services-section">
	<div class="container">
		<div class="all-services-list">
			<a href="#" class="all-services-item">
				
			</a>
		</div>
	</div>
</section>


<?php 
// remove this endif
endif; 
?>

<?php 
// remove this if
if (!is_user_logged_in()): 
?>

<section class="services-hero-section">
	<div class="container">
		<div class="services-hero-section__wrap">
			<div class="services-hero-section__head">
				<h1 class="services-hero-section__h1 wow animate__animated animate__fadeIn crit_el" data-wow-delay="0s" data-first-delay="2.8s"  data-wow-duration=".3s">
					<?php if ( have_rows( 'hero_title' ) ) : ?>
						<?php while ( have_rows( 'hero_title' ) ) : the_row(); ?>
							<div class="index-head-title__text">
								<?php if (get_sub_field( 'before_title' )): ?>
									<span class="index-head-title__before"><?php the_sub_field( 'before_title' ); ?> </span>
								<?php endif ?>
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
					<?php else: ?>
					<?php the_field( 'page_title' ); ?>
					<?php endif; ?>
						
				</h1>
			</div>
			<div class="services-hero-section__visual wow animate__animated animate__fadeInLeft crit_el" data-wow-delay="0.5s" data-first-delay="3.3s"  data-wow-duration=".8s">
				<?php 
				$visual_type = get_field( 'visual_type' ); 
				?>
				<?php if ($visual_type == "video"): ?>
					<div class="embed-responsive embed-responsive-16by9">
						<?php the_field( 'video_iframe' ); ?>
					</div>
				<?php else: ?>
					<?php $main_image = get_field( 'main_image' ); ?>
					<?php if ( $main_image ) : ?>
						<img src="<?php echo esc_url( $main_image['url'] ); ?>" alt="<?php echo esc_attr( $main_image['alt'] ); ?>" />
					<?php endif; ?>
				<?php endif ?>
			</div>
			<div class="services-hero-section__services">
				<div class="services-hero-section__services-title wow animate__animated animate__fadeInRight" data-wow-duration=".5s">
					<h2><?php the_field( 'service_list_title' ); ?></h2>
				</div>

				<?php if ( have_rows( 'services_list', 'option' ) ) : ?>
					<?php 
					$content_counter = 0;
					 ?>
					<div class="services-grid services-grid--single wow animate__animated animate__fadeIn" data-wow-delay="0.4s" data-wow-duration=".5s">
						<?php while ( have_rows( 'services_list', 'option' ) ) : the_row(); ?>
							<?php $service_icon = get_sub_field( 'service_icon' ); ?>
							<div data-target="#service-<?php echo $content_counter;?>" class="jump-to services-grid__item">
								<div class="services-grid__icon">
									<?php if ( $service_icon ) : ?>
										<img src="<?php echo esc_url( $service_icon['url'] ); ?>" alt="<?php echo esc_attr( $service_icon['alt'] ); ?>" />
									<?php endif; ?>
								</div>
								<h5 class="services-grid__text"><span><?php the_sub_field( 'service_title' ); ?></span></h5>
							</div>
							<?php $content_counter = $content_counter + 1; ?>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<?php 
// remove this endif
endif; 
?>






<?php if ( have_rows( 'services_information' ) ) : ?>
	
	<?php 
	$image_counter = 0;
	$content_counter = 0;
	 ?>

	<div class="gsap-sections">
		<div class="gsap-sections__images">
			<?php while ( have_rows( 'services_information' ) ) : the_row(); ?>
				<?php $service_background_image = get_sub_field( 'service_background_image' ); ?>
				<?php if ( $service_background_image ) : ?>
					<div data-id="<?php echo $image_counter;?>" class="gsap-sections__image">
						<img src="<?php echo esc_url( $service_background_image['url'] ); ?>" alt="<?php echo esc_attr( $service_background_image['alt'] ); ?>" />
						<span class="gsap-sections__deco" style="background-color: <?php the_sub_field( 'decoration_color' ); ?>;"></span>
					</div>
				<?php endif; ?>

				<?php $image_counter = $image_counter + 1; ?>
			<?php endwhile; ?>
		</div>

		<div class="gsap-sections__content">
			<?php while ( have_rows( 'services_information' ) ) : the_row(); ?>
				<?php $service_icon = get_sub_field( 'service_icon' ); ?>
				<div id="service-<?php echo $content_counter;?>" data-anchor-id="<?php echo $content_counter;?>" class="gsap-item">
					<?php $service_background_image = get_sub_field( 'service_background_image' ); ?>
					<?php if ($service_background_image): ?>
						<div class="gsap-item__visual">
							<img src="<?php echo esc_url( $service_background_image['url'] ); ?>" alt="<?php echo esc_attr( $service_background_image['alt'] ); ?>" />
						</div>
					<?php endif ?>
					<div class="container">
						<div class="gsap-item__wrap">
							<div class="gsap-item__frame">
								<div class="gsap-item__info">
									<div class="gsap-item__icon">
										<?php if ( $service_icon ) : ?>
											<img src="<?php echo esc_url( $service_icon['url'] ); ?>" alt="<?php echo esc_attr( $service_icon['alt'] ); ?>" />
										<?php endif; ?>
									</div>
									<div class="gsap-item__title"><?php the_sub_field( 'service_title' ); ?></div>
									<div class="gsap-item__content">
										<?php the_sub_field( 'service_content' ); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php $content_counter = $content_counter + 1; ?>
			<?php endwhile; ?>
			
			
			
			
		</div>
		
		

	</div>
<?php endif; ?>


<?php if ( have_rows( 'process_section' ) ) : ?>
	<?php while ( have_rows( 'process_section' ) ) : the_row(); ?>
		
		
		<section class="process-section">
			<div class="container">
				<h2 class="process-section__title"><span><?php the_sub_field( 'section_title' ); ?></span></h2>
				<?php if ( have_rows( 'process_list' ) ) : ?>
					<?php 
					$counter = 0;
					?>
					<div class="process-slider">
						<?php while ( have_rows( 'process_list' ) ) : the_row(); ?>
							<?php 
							$counter = $counter + 1; 
							?>
							<div class="process-slider__item">
								<div class="process-item">
									<?php if ($counter <= 9): ?>
										<div class="process-item__num">0<?php echo $counter; ?></div>
									<?php else: ?>
										<div class="process-item__num"><?php echo $counter; ?></div>
									<?php endif ?>
									<h5 class="process-item__title"><?php the_sub_field( 'title' ); ?></h5>
									<div class="process-item__text"><?php the_sub_field( 'text' ); ?></div>
								</div>
							</div>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
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
get_template_part( 'template-parts/cta-section', '', array('color' => 'navy',) );
?>

<?php
get_footer();