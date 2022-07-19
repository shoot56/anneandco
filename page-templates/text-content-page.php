<?php 
/*
Template Name: Text Content Page Template
*/

get_header();
?>




<section class="text-content-section">
	<div class="container">
		<div class="text-content-section__head" data-aos="fade" data-aos-delay="100" data-aos-duration="300">
			<h1 class="text-content-section__title"><?php the_title(); ?></h1>
		</div>
		<div class="text-content-section__content" data-aos="fade" data-aos-delay="300" data-aos-duration="300">
			<div class="grid-row">
				<div class="grid-col grid-col--1">
					
				</div>
				<div class="grid-col grid-col--9 grid-col-lg--12">
					<?php the_content(); ?>
				</div>
			</div>
			
		</div>
	</div>
</section>








<?php 
get_template_part( 'template-parts/cta-section', '', array('color' => 'navy',) );
?>



<?php

get_footer();