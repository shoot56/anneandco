<?php
	$cta_style = $args['color'];
?>

<section class="cta-section cta-section--<?php echo $cta_style; ?>">
	<div class="container" data-aos="fade" data-aos-delay="300" data-aos-duration="300">
		<div class="cta-section__title h6">Got a project? We’d love to hear from you.</div>
		<div class="cta-section__mail h2"><a href="mailto:hello@anneandco.ie">hello@anneandco.ie</a></div>
		<div class="cta-section__button">
			<?php if ($cta_style == 'white' || $cta_style == 'nude' || $cta_style == 'cream'): ?>
				<a href="/contact" class="btn secondary-btn secondary-btn--navy">
					<span class="secondary-btn__text">Contact Us</span>
					<span class="secondary-btn__icon"><svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-arrow-up-right"></use></svg></span>
				</a>
			<?php  elseif ($cta_style == 'fullwhite'): ?>
				<a href="/contact" class="btn secondary-btn secondary-btn--navy">
					<span class="secondary-btn__text">Contact Us</span>
					<span class="secondary-btn__icon"><svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-arrow-up-right"></use></svg></span>
				</a>
			<?php else: ?>
				<a href="/contact" class="btn secondary-btn secondary-btn--white">
					<span class="secondary-btn__text">Contact Us</span>
					<span class="secondary-btn__icon"><svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-arrow-up-right"></use></svg></span>
				</a>
			<?php endif; ?>
		</div>
	</div>
</section>