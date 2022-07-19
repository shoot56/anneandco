<?php 
/*
Template Name: Work Page Template
*/

get_header();
?>


<div class="page-head">
	<div class="container">
		<h1 class="page-head__title" data-aos="fade" data-aos-delay="100" data-aos-duration="300"><?php the_field( 'portfolio_page_title', 'option' ); ?></h1>
	</div>
</div>
<section class="work-section">
	<div class="container">
		<?php 
			$resourcesPPP = 12;
			$args = array(
				'posts_per_page' => $resourcesPPP,
				'orderby' => 'date',
				'post_type' => 'portfolio',
				'order' => 'DESK',
			);
		?>
		<div class="blog-section__head">
			<form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">
				<div class="blog-section__tools" data-aos="fade-up" data-aos-delay="300" data-aos-duration="500">
					<div class="blog-section__filter tabset">
						<div class="tabset__head h4">
							<div class="tabset__label">Filter by:</div>
							<div class="tabset__switcher">
								<div class="tabset__opener">Service</div>
								<div class="tabset__drop">
									<ul class="tab-control h5">
										<li><a class="tab-opener active" href="#">Service</a></li>
										<li><a class="tab-opener" href="#">Industry</a></li>
									</ul>
								</div>
							</div>
						</div>
						

						<div class="tabs-list">
							<div class="tab-item active">
								<div class="blog-filter-buttons">
									<div class="blog-filter-buttons__item"><label class="blog-filter-button-wrap"> <input class="form-element category-checkbox select-all" checked data-tax-id="" data-tax-name="" type="checkbox" name="" value="" /><span class="btn teritiary-btn teritiary-btn--navy"><span class="teritiary-btn__text">All Services</span></span></label></div>
									<?php
									if( $terms = get_terms( array( 'taxonomy' => 'service', 'orderby' => 'id' ) ) ) : 
										$taxonomy_prefix = 'service';

										foreach ( $terms as $term ) :
											$term_id = $term->term_id;
											$term_id_prefixed = $taxonomy_prefix .'_'. $term_id;
											echo '<div class="blog-filter-buttons__item"><label class="blog-filter-button-wrap"> <input class="form-element category-checkbox" data-tax-id="'.$term_id.'" data-tax-name="'.$taxonomy_prefix.'" type="checkbox" name="category_'.$taxonomy_prefix.'[' . $term->slug . ']" value="' . $term->term_id . '" /><span class="btn teritiary-btn teritiary-btn--navy"><span class="teritiary-btn__text">' . $term->name . '</span></span></label></div>'; 
										endforeach;
									endif;
									?>

								</div>
							</div>
							<div class="tab-item">
								<div class="blog-filter-buttons">
									<div class="blog-filter-buttons__item"><label class="blog-filter-button-wrap"> <input class="form-element category-checkbox select-all" checked data-tax-id="" data-tax-name="" type="checkbox" name="" value="" /><span class="btn teritiary-btn teritiary-btn--navy"><span class="teritiary-btn__text">All Industries</span></span></label></div>
									<?php
									if( $terms = get_terms( array( 'taxonomy' => 'industry', 'orderby' => 'id' ) ) ) : 
										$taxonomy_prefix = 'industry';

										foreach ( $terms as $term ) :
											$term_id = $term->term_id;
											$term_id_prefixed = $taxonomy_prefix .'_'. $term_id;
											echo '<div class="blog-filter-buttons__item"><label class="blog-filter-button-wrap"> <input class="form-element category-checkbox" data-tax-id="'.$term_id.'" data-tax-name="'.$taxonomy_prefix.'" type="checkbox" name="category_'.$taxonomy_prefix.'[' . $term->slug . ']" value="' . $term->term_id . '" /><span class="btn teritiary-btn teritiary-btn--navy"><span class="teritiary-btn__text">' . $term->name . '</span></span></label></div>'; 
										endforeach;
									endif;
									?>

								</div>
							</div>
						</div>
						
						
					</div>
					
				</div>
				<input type="hidden" name="action" value="myfilter">
				<input type="hidden" name="post-per-page" value="<?php echo	$resourcesPPP; ?>">
			</form>
		</div>
		<div class="work-wrap">
			<div id="ajax_posts_wrap" class="work-list">
				
				<?php
				$query = new WP_Query( $args );
				if ( $query->have_posts() ) {
					$counter = 0;
					while ( $query->have_posts() ) {
						$query->the_post();
						$counter = $counter + 1;

						if ($counter < 4) {
							$params = [ 'class' => 'crit_el' ];
						} else {
							$params = ['class' => '' ];
						}
						
						get_template_part( 'template-parts/work-list-item', get_post_type(), $params );
					}
				}
				wp_reset_postdata();
				?>
			</div>
			<?php 
			if (  $query->max_num_pages > 1 ) :
				?>
				<div  class="work-wrap__button" data-aos="fade" data-aos-delay="100" data-aos-duration="300">
					

					<a href="#" data-per-page="<?php echo $resourcesPPP; ?>" data-post-type="portfolio" data-max-pages="<?php echo $query->max_num_pages; ?>" data-sort="DESK" data-taxonomy="" id="ajax_loadmore_resources"  class="btn secondary-btn secondary-btn--blue">
						<span class="secondary-btn__text">Load More</span>
						<span class="secondary-btn__icon"><svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
					</a>
					
				</div>
				<?php
			endif;
			?>
			
		</div>
	</div>
	
</section>


<?php 
get_template_part( 'template-parts/cta-section', '', array('color' => 'cream',) );
?>














<?php

get_footer();