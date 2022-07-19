<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package anneco
 */

get_header();
?>


<?php if ( have_posts() ) : ?>
<div class="page-head">
	<div class="container">
		<?php
		$current_term_id = get_queried_object()->term_id;

		print_r(get_queried_object());

		the_archive_title( '<h1 class="page-head__title">', '</h1>' );
		the_archive_description( '<div class="archive-description">', '</div>' );
		?>
	</div>
</div>
<section class="blog-section">
	<div class="container">
		<div class="blog-section__head">
			<div class="blog-section__filter">
				<?php
					$terms = get_terms( 'category' );

					if( $terms && ! is_wp_error($terms) ){
						echo '<ul class="blog-filter-list">';
						echo '<li class="blog-filter-list__item"><a href="/blog/" class="btn teritiary-btn teritiary-btn--navy"><span class="teritiary-btn__text">All Articles</span></a></li>';
						foreach( $terms as $term ){
							echo '<li class="blog-filter-list__item"><a href="'. get_term_link( $term->term_id, $term->taxonomy ) .'" class="btn teritiary-btn teritiary-btn--navy'.(($term->term_id == $current_term_id)?' active':"").'"><span class="teritiary-btn__text">'. $term->name .'</span></a></li>';
						}
						echo '</ul>';
					}
				?>
			</div>
			<div class="blog-section__search">
				<?php get_search_form(); ?>
			</div>
		</div>


		<div class="blog-wrap">
			<div class="blog-list">
				<?php
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/blog-list-item', get_post_type() );
				endwhile;
				?>
			</div>
			<div  class="blog-paging">
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
else :

	get_template_part( 'template-parts/content', 'none' );

endif;
?>


	



<?php 
get_template_part( 'template-parts/cta-section', '', array('color' => 'cream',) );
?>

<?php
get_footer();
