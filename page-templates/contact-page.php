<?php 
/*
Template Name: Contact Page Template
*/

get_header();
?>


<section class="contacts-section">
	<div class="container">
		<div class="contacts-section__wrap">
			<div class="contacts-section__info" data-aos="fade" data-aos-delay="300">
				<h1 class="contacts-section__title"><?php the_field( 'title' ); ?></h1>
				<div class="contacts-section__description"><?php the_field( 'description' ); ?></div>
				<div class="contacts-section__list">
					<?php if ( have_rows( 'contact_information' ) ) : ?>
						<div class="contacts-list">
							<?php while ( have_rows( 'contact_information' ) ) : the_row(); ?>
								<div class="contacts-list__item">
									<?php $icon = get_sub_field( 'icon' ); ?>
									<a href="<?php the_sub_field( 'link' ); ?>" target="_blank" class="contacts-list__link contact-item contact-item--sm">
										<div class="contact-item__visual">
											<?php if ( $icon ) : ?>
												<img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
											<?php endif; ?>
										</div>
										<div class="contact-item__frame">
											<div class="contact-item__label"><?php the_sub_field( 'label' ); ?></div>
											<div class="contact-item__text"><?php the_sub_field( 'text' ); ?></div>
										</div>
									</a>
								</div>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
			<div class="contacts-section__form" data-aos="fade" data-aos-delay="600">
				<?php 
				$form_shortcode = get_field( 'form_shortcode' );
				echo do_shortcode($form_shortcode); 
				?>
			</div>
		</div>
		
	</div>
</section>

<?php if ( have_rows( 'steps_section' ) ) : ?>
	<?php while ( have_rows( 'steps_section' ) ) : the_row(); ?>
		<section class="steps-section">
			<div class="steps-section__frame">
				<div class="container">
					<div class="steps-section__head">
						<div class="steps-section__label" data-aos="fade" data-aos-delay="100" data-aos-duration="300"><?php the_sub_field( 'label' ); ?></div>
						<div class="steps-section__title h3" data-aos="fade" data-aos-delay="200" data-aos-duration="300"><span><?php the_sub_field( 'title' ); ?></span></div>
					</div>
					<?php if ( have_rows( 'step_list' ) ) : ?>
						<div class="steps-list">
							<?php 
							$counter = 0;
							$delay = 200;
							 ?>
							<?php while ( have_rows( 'step_list' ) ) : the_row(); ?>
								<div class="steps-list__item" data-aos="fade" data-aos-delay="<?php echo $delay; ?>" data-aos-duration="300" >
									<div class="steps-list__item-wrap">
										<div class="steps-list__item-head">
											<?php 
											$delay = $delay + 300;
											$counter = $counter + 1; 
											?>
											<?php if ($counter <= 9): ?>
												<div class="steps-list__num">0<?php echo $counter; ?></div>
											<?php else: ?>
												<div class="steps-list__num"><?php echo $counter; ?></div>
											<?php endif ?>
											<div class="steps-list__item-title"><?php the_sub_field( 'step_title' ); ?></div>
										</div>
										<div class="steps-list__item-text"><?php the_sub_field( 'step_text' ); ?></div>
									</div>

								</div>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</section>
	<?php endwhile; ?>
<?php endif; ?>


<?php if ( have_rows( 'faq_section' ) ) : ?>
	<?php while ( have_rows( 'faq_section' ) ) : the_row(); ?>
		<?php $section_icon = get_sub_field( 'section_icon' ); ?>
		<section class="faq-section">
			<div class="container">
				<div class="grid-row">
					<div class="grid-col grid-col--3 grid-col-sm--12">
						<div class="faq-title" data-aos="fade" data-aos-duration="300">
							<div class="faq-title__icon">
								<?php if ( $section_icon ) : ?>
									<img src="<?php echo esc_url( $section_icon['url'] ); ?>" alt="<?php echo esc_attr( $section_icon['alt'] ); ?>" />
								<?php endif; ?>
							</div>
							<div class="faq-title__text h3"><?php the_sub_field( 'section_title' ); ?></div>
						</div>
					</div>
					<div class="grid-col grid-col--9 grid-col-sm--12">
						<?php if ( have_rows( 'faq_list' ) ) : ?>
							<div class="accordion" data-aos="fade-up" data-aos-delay="200" data-aos-duration="500">
								<?php while ( have_rows( 'faq_list' ) ) : the_row(); ?>
									<div class="accordion__item">
										<div class="accordion__heading h6">
											<span><?php the_sub_field( 'item_title' ); ?></span>
										</div>
										<div class="accordion__expanded">
											<div class="accordion__content">
												<?php the_sub_field( 'item_content' ); ?>
											</div>
										</div>
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














<?php 
get_template_part( 'template-parts/cta-section', '', array('color' => 'navy',) );
?>


<?php
get_footer();