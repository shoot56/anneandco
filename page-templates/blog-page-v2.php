<?php 
/*
Template Name: Blog Page v2 Template
*/

get_header();
?>


<div class="blog-page-head">
	<div class="container">
		<h1 class="blog-page-head__title "><?php the_field( 'blog_archive_title', 'option' ); ?></h1>
	</div>
</div>

<?php
global $post;

$page = (get_query_var('paged')) ? get_query_var('paged') : 1;

if ($page == 1) {
	$stickyposts = get_posts( [
		'post_type' => 'post',
		'posts_per_page'      => 1,
		'post__in'            => get_option( 'sticky_posts' ),
		'ignore_sticky_posts' => 1
	]);

	foreach( $stickyposts as $post ){
		setup_postdata( $post );
		?>
		<section class="sticky-post-section">
			<div class="container">
				<?php get_template_part( 'template-parts/blog-list-item-sticky', get_post_type(), $params ); ?>


			</div>
		</section>
		<?php
	}
	wp_reset_postdata();
}
?>





<section class="article-section">
	<div class="container">
		<?php 
		global $wp_query; 
		$resourcesPPP = 12;
		$sticky = get_option( 'sticky_posts' );
		$wp_query = new WP_Query(array(
			'post_type' => 'post',
			'posts_per_page' => $resourcesPPP,
			'post__not_in' => $sticky,
			'ignore_sticky_posts' => true,
			'paged' => get_query_var('paged') ?: 1 
		));
		?>
		<div class="article-section__head " >
			<div class="article-section__filter" data-aos="fade" data-aos-delay="1000">
				<?php
					$terms = get_terms( 'category' );

					if( $terms && ! is_wp_error($terms) ){
						echo '<ul class="blog-filter-list">';
						echo '<li class="blog-filter-list__item"><a href="/blog/" class="blog-filter-list__btn btn teritiary-btn teritiary-btn--navy active"><span class="teritiary-btn__text">All Articles</span></a></li>';
						foreach( $terms as $term ){
							echo '<li class="blog-filter-list__item"><a href="'. get_term_link( $term->term_id, $term->taxonomy ) .'" class="blog-filter-list__btn btn teritiary-btn teritiary-btn--navy"><span class="teritiary-btn__text">'. $term->name .'</span></a></li>';
						}
						echo '</ul>';
					}
				?>
			</div>
			<div class="article-section__search" data-aos="fade" data-aos-delay="1100">
				<?php get_search_form(); ?>
			</div>
		</div>
		<?php if ( have_posts() ) : ?>

			<div class="blog-wrap">
				<div class="blog-article-list">
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
						?> <div class="blog-article-list__item" data-aos="fade-up" data-aos-delay="1200"> <?php 
							get_template_part( 'template-parts/blog-list-item-v2', get_post_type(), $params );
						?> </div> <?php
					endwhile;
					?>
				</div>
				<div  class="blog-paging" data-aos="fade" data-aos-delay="500">
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