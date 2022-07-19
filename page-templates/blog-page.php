<?php 
/*
Template Name: Blog Page Template
*/

get_header();
?>


<div class="page-head">
	<div class="container">
		<h1 class="page-head__title wow animate__animated animate__fadeIn crit_el" data-wow-delay="0s" data-first-delay="2.8s"  data-wow-duration=".3s"><?php the_field( 'blog_archive_title', 'option' ); ?></h1>
	</div>
</div>
<section class="blog-section">
	<div class="container">
		<?php 
		global $wp_query; 
		$resourcesPPP = 12;
		$sticky = get_option( 'sticky_posts' );
		$wp_query = new WP_Query(array(
			'post_type' => 'post',
			'posts_per_page' => $resourcesPPP,
			// 'post__not_in' => $sticky,
			'ignore_sticky_posts' => true,
			'paged' => get_query_var('paged') ?: 1 
		));
		?>
		<div class="blog-section__head wow animate__animated animate__fadeInUp crit_el"  data-wow-delay="0.3s" data-first-delay="3.1s"  data-wow-duration=".3s">
			<div class="blog-section__filter">
				<?php
					$terms = get_terms( 'category' );

					if( $terms && ! is_wp_error($terms) ){
						echo '<ul class="blog-filter-list">';
						echo '<li class="blog-filter-list__item"><a href="/blog/" class="btn teritiary-btn teritiary-btn--navy active"><span class="teritiary-btn__text">All Articles</span></a></li>';
						foreach( $terms as $term ){
							echo '<li class="blog-filter-list__item"><a href="'. get_term_link( $term->term_id, $term->taxonomy ) .'" class="btn teritiary-btn teritiary-btn--navy"><span class="teritiary-btn__text">'. $term->name .'</span></a></li>';
						}
						echo '</ul>';
					}
				?>
			</div>
			<div class="blog-section__search">
				<?php get_search_form(); ?>
			</div>
		</div>
		<?php if ( have_posts() ) : ?>

			<div class="blog-wrap">
				<div class="blog-list">
					<?php
					$counter = 0;
					while ( have_posts() ) :
						the_post();
						$counter = $counter + 1;
						if ($counter < 4) {
							$params = [ 'class' => 'crit_el' ];
						} else {
							$params = ['class' => '' ];
						}
						get_template_part( 'template-parts/blog-list-item', get_post_type(), $params );
					endwhile;
					?>
				</div>
				<div  class="blog-paging wow animate__animated animate__fadeIn" data-wow-duration=".3s">
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






		<?php
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>
		
	</div>
</section>
<?php 
get_template_part( 'template-parts/cta-section', '', array('color' => 'nude',) );
?>



<?php

get_footer();