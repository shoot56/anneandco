<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package anneco
 */

get_header();
?>


		<?php if ( have_posts() ) : ?>
			<section class="blog-section blog-section--search">
				<div class="container">
					<div class="blog-section__search-head" data-aos="fade" data-aos-delay="300" data-aos-duration="300">
						<div class="blog-section__search-label">Search Results for:</div>
						<h1 class="blog-section__search-query"><?php echo get_search_query(); ?></h1>
						<div class="blog-section__search-form"><?php get_search_form(); ?></div>
					</div>
					<div class="blog-wrap">
						<div class="blog-article-list">
							<?php
							while ( have_posts() ) :
								the_post();
								get_template_part( 'template-parts/blog-list-item-v2', get_post_type() );
							endwhile;
							?>
						</div>
						<div  class="blog-paging" data-aos="fade" data-aos-delay="300" data-aos-duration="300">
							<?php 
							$navargs = array(
								'show_all'     => false,
								'end_size'     => 1,
								'mid_size'     => 3,
								'prev_next'    => false,
								'prev_text'    => __('«'),
								'next_text'    => __('»'),
								'add_args'     => false,
								'screen_reader_text' => __( 'Posts navigation' ),
							);
							the_posts_pagination($navargs); 
							?>
						</div>
					</div>
				</div>
			</section>
			<?php 
			get_template_part( 'template-parts/cta-section', '', array('color' => 'nude',) );
			?>

			<?php
		else :

			get_template_part( 'template-parts/content', 'none' );
			get_template_part( 'template-parts/cta-section', '', array('color' => 'nude',) );

		endif;
		?>


<?php

get_footer();
