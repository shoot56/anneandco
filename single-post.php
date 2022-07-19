<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package anneco
 */

get_header();
?>

<article class="blog-article">
	<div class="container">
		<div class="blog-article__header">
			<?php 
			$post_categories = wp_get_post_categories( $post->ID, array('fields' => 'all') );
			?>
			<div class="blog-article__tags article-tag-list article-tag-list--single" data-aos="fade" data-aos-delay="300" data-aos-duration="300">
				<?php foreach ($post_categories as $category): ?>
					<a href="<?php echo get_category_link( $category->term_id);?>" class="article-tag-list__item article-tag-list__item--link"><?php echo $category->name; ?></a>
				<?php endforeach ?>
				
			</div>
			<h1 class="blog-article__title" data-aos="fade" data-aos-delay="0" data-aos-duration="300">
				<?php the_title(); ?>
			</h1>
			<div class="blog-article__info" data-aos="fade" data-aos-delay="300" data-aos-duration="300">
				<div class="blog-article__read-time"><?php echo do_shortcode('[rt_reading_time]'); ?> min read</div>
				<span class="sep"></span>
				<div class="blog-article__date"><?php echo get_the_date('j M Y'); ?></div>
			</div>
		</div>
	</div>
	<div class="blog-article__image" data-aos="fade-up" data-aos-delay="500" data-aos-duration="600">
		<?php $custom_post_head_image = get_field( 'custom_post_head_image' ); ?>
		<?php if ( $custom_post_head_image ) : ?>
			<img src="<?php echo esc_url( $custom_post_head_image['url'] ); ?>" alt="<?php echo esc_attr( $custom_post_head_image['alt'] ); ?>" />
		<?php else: ?>
			<?php echo get_the_post_thumbnail( $page->ID, 'full', array(
				'alt' => the_title_attribute(
					array(
						'echo' => false,
					)
				),
			)); ?>
		<?php endif; ?>
	</div>
	<div class="blog-article__section blog-article__progress" data-aos="fade" data-aos-delay="1000" data-aos-duration="300">
		<div class="container">
			<div class="blog-article__main">
				<div class="blog-article__share">
					<ul class="share-list">
						<li class="share-list__item">
							<a target="_new" href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink());?>&amp;text=<?php echo urlencode(get_the_title());?>" class="share-list__link">
								<svg class="svg-icon" width="20" height="20" >
									<use xlink:href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-twitter"></use>
								</svg>
							</a>
						</li>
						<li class="share-list__item">
							<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore share-list__link">
								<svg class="svg-icon" width="20" height="20" >
									<use xlink:href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-facebook"></use>
								</svg>
							</a>
						</li>
						<li class="share-list__item">
							<a target="_new" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" class="share-list__link">
								<svg class="svg-icon" width="20" height="20" >
									<use xlink:href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-linkedin"></use>
								</svg>
							</a>
						</li>
					</ul>

				</div>
				<div class="blog-article__content">
					<?php the_content(); ?>
				</div>
				<div class="blog-article__aside">
					<?php $case_study_id = get_field( 'case_study' ); ?>
					<?php if ( $case_study_id ) : ?>
						<?php if ( have_rows( 'cta_settings', $case_study_id ) ) : ?>
							<?php while ( have_rows( 'cta_settings', $case_study_id ) ) : the_row(); ?>
								<?php $background_image = get_sub_field( 'background_image' ); ?>
								<div class="aside-cta">
									<?php if ( $background_image ) : ?>
										<img class="aside-cta__img" src="<?php echo esc_url( $background_image['url'] ); ?>" alt="<?php echo esc_attr( $background_image['alt'] ); ?>" />
									<?php endif; ?>
									<div class="aside-cta__frame">
										<div class="aside-cta__title aside-cta__title--<?php the_sub_field( 'text_color' ); ?> h4">Check out our latest work</div>
										<div class="aside-cta__button">
											<a href="<?php echo get_permalink( $case_study_id ); ?>" class="btn secondary-btn secondary-btn--<?php the_sub_field( 'button_color' ); ?>">
												<span class="secondary-btn__text">Explore</span>
											</a>
										</div>
									</div>
								</div>
							<?php endwhile; ?>
							<div class="share-device">
								<ul class="share-list">
									<li class="share-list__item">
										<a target="_new" href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink());?>&amp;text=<?php echo urlencode(get_the_title());?>" class="share-list__link">
											<svg class="svg-icon" width="20" height="20" >
												<use xlink:href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-twitter"></use>
											</svg>
										</a>
									</li>
									<li class="share-list__item">
										<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore share-list__link">
											<svg class="svg-icon" width="20" height="20" >
												<use xlink:href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-facebook"></use>
											</svg>
										</a>
									</li>
									<li class="share-list__item">
										<a target="_new" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" class="share-list__link">
											<svg class="svg-icon" width="20" height="20" >
												<use xlink:href="<?php echo get_template_directory_uri(); ?>/images/icons.svg#icon-linkedin"></use>
											</svg>
										</a>
									</li>
								</ul>
							</div>
						<?php endif; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</article>




<section class="subscribe-section subscribe-section--cream">
	<div class="container">
		<div class="subscribe-section__wrap">
			<div class="subscribe-section__frame" data-aos="fade" data-aos-delay="300" data-aos-duration="300">
				<div class="subscribe-section__title h2">Want to see more?</div>
				<div class="subscribe-section__description">Sign up to our newsletter to receive updates on our newest design stories, case studies and tips.</div>
			</div>
			<div class="subscribe-section__form subsctibe-form-holder" data-aos="fade-up" data-aos-delay="200" data-aos-duration="300">
				<?php echo do_shortcode('[contact-form-7 id="11" title="Subscribe form" html_class="mailchimp_subsctibe-form"]'); ?>

			</div>
		</div>
	</div>
</section>


<?php 
$relatedCategoryList = wp_get_post_categories( $post->ID );


$temp_query2 = $wp_query;
$relatedPosts = query_posts( [
	'post_type' => 'post', 
	'posts_per_page' => 9, 
	'post__not_in' => array( $post->ID), 
	'order'=> 'DESC', 
	'nopaging=true',
	'tax_query'=> array(
		'relation' => 'OR',
		array(
			'taxonomy' => 'category',
			'field'    => 'id',
			'terms'    => $relatedCategoryList,
		)
	)
]);

if ($relatedPosts): 
	?>
	<section class="related-section" data-aos="fade" data-aos-delay="300" data-aos-duration="300">
		<div class="container">
			<h3 class="related-section__title">More blog posts</h3>
			<div class="work-list-related owl-carousel">
				<?php
				foreach( $relatedPosts as $post ){ 
					setup_postdata($post);
					the_post();
					?>
					<div class="work-list-related__item">
						<?php
						get_template_part( 'template-parts/blog-list-item-more-v2', get_post_type() );
						?>
					</div>
					<?php
				}
				wp_reset_postdata();
				$wp_query = $temp_query2;
				?>
			</div>
		</div>
	</section>
<?php endif ?>





<?php 
get_template_part( 'template-parts/cta-section', '', array('color' => 'navy',) );
?>


<?php
get_footer();
