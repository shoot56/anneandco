<?php 
/*
Template Name: Landing Chocolate Template
*/



get_header('landing-chocolate');


?>




<div class="landing-chocolate-main-section">
	<div class="pattern">
		
	</div>
	<div class="deco1">
		<svg width="772" height="850" viewBox="0 0 772 850" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path opacity="0.7" d="M716.934 211.73C780.959 326.995 784.358 466.172 751.496 586.343C719.2 706.513 651.209 808.903 566.786 838.946C482.363 868.988 382.076 827.91 280.656 778.861C178.669 729.811 75.5483 673.405 29.0876 569.176C-17.9398 464.946 -8.87426 313.507 63.0833 195.789C135.041 78.6842 269.89 -4.69936 399.641 0.205556C528.824 4.49736 653.475 96.4645 716.934 211.73Z" fill="#F4DCAD"/>
		</svg>
	</div>
	<div class="deco2">
		<svg width="850" height="626" viewBox="0 0 850 626" fill="none" xmlns="http://www.w3.org/2000/svg">
			<circle opacity="0.6" cx="425" cy="201" r="425" fill="#F7F9FF"/>
		</svg>
	</div>
	<div class="deco3">
		<svg width="114" height="114" viewBox="0 0 114 114" fill="none" xmlns="http://www.w3.org/2000/svg">
			<circle opacity="0.6" cx="57" cy="57" r="57" fill="#215FE5"/>
		</svg>
	</div>
	<div class="container">
		<div class="landing-chocolate-main-section__wrap">

			<div class="landing-chocolate-main-section__visual" data-aos="fade" data-aos-duration="1500" data-aos-delay="1000">
				<?php $image = get_field( 'image' ); ?>
				<?php if ( $image ) : ?>
					<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
				<?php endif; ?>
			</div>
			<div class="landing-chocolate-main-section__frame">
				<div class="landing-chocolate-main-section__head">
					<div class="landing-chocolate-main-section__title" data-aos="fade" data-aos-duration="1000" data-aos-delay="1500"><?php the_field( 'title' ); ?></div>
					<div class="landing-chocolate-main-section__text h4"  data-aos="fade" data-aos-duration="1000" data-aos-delay="1800"><?php the_field( 'description' ); ?></div>
				</div>
				<div class="landing-chocolate-main-section__desktop-form">
					<div class="landing-chocolate-main-section__form"  data-aos="fade-up" data-aos-duration="1000" data-aos-delay="2200">
						<?php echo do_shortcode( get_field( 'form_shortcode' ) ); ?>
					</div>
				</div>
				<div class="landing-chocolate-main-section__sign" data-aos="fade" data-aos-duration="1000" data-aos-delay="2800">
					<div class="landing-chocolate-main-section__sign-text">Regards</div>
					<div class="landing-chocolate-main-section__sign-img">
						<?php $signature_image = get_field( 'signature_image' ); ?>
						<?php if ( $signature_image ) : ?>
							<img src="<?php echo esc_url( $signature_image['url'] ); ?>" alt="<?php echo esc_attr( $signature_image['alt'] ); ?>" />
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
		<div class="landing-chocolate-main-section__mobile-form">
			<div class="landing-chocolate-main-section__form" data-aos="fade" data-aos-duration="1000" data-aos-delay="800">
				<?php echo do_shortcode( get_field( 'form_shortcode' ) ); ?>
			</div>
		</div>

	</div>
</div>









<?php

get_footer('empty');