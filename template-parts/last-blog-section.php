<section class="last-blog-section">
	<div class="container">
		<div class="last-blog-section__wrap">
			<div class="last-blog-section__head">
				<div class="last-blog-section__label">Blog & News</div>
				<h2 class="last-blog-section__title h2">Explore our latest news & blogs.</h2>
				<div class="last-blog-section__button">
					<a href="/blog" class="btn btn--sm-tab secondary-btn secondary-btn--navy">
						<span class="secondary-btn__text">See more posts</span>
						<span class="secondary-btn__icon"><svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
					</a>
				</div>
			</div>
			<div class="last-blog-section__content">
				<?php 

				$myposts = get_posts( [
					'posts_per_page' => 3,
					'post_type' => 'post',
				] );

				foreach( $myposts as $post ){
					setup_postdata( $post );
					get_template_part( 'template-parts/blog-list-item-horizontal', get_post_type() );
				}
				wp_reset_postdata();
				 ?>
			</div>
		</div>
	</div>
</section>