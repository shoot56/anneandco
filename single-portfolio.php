<?php

$header_style = get_field( 'header_style' );



get_header( null, [ 'header_class' => 'site-header--work', 'header_color' => 'site-header--' . $header_style ]);
?>


<?php $hero_image = get_field( 'hero_image' ); ?>
<?php if ( $hero_image ) : ?>
    <section class="work-hero-section work-hero-section--<?php echo $header_style;?>">
        <img src="<?php echo esc_url( $hero_image['url'] ); ?>" alt="<?php echo esc_attr( $hero_image['alt'] ); ?>" />
    </section>
<?php endif; ?>


<section class="work-heading" data-aos="fade" data-aos-delay="500" data-aos-duration="600">
    <div class="container">
        <div class="work-heading__category">
            <?php 
            $terms = get_the_terms($post->ID, 'service');
            ?>
            <div class="category-work">
                <?php foreach ($terms as $term): ?>
                    <a class="category-work__link" href="<?php echo get_term_link( $term->term_id, $term->taxonomy ); ?>">
                        <?php echo $term->name; ?>
                    </a>
                    <span class="category-work__separator">|</span>
                <?php endforeach ?>
            </div>
        </div>
        <h1 class="work-heading__title"><?php the_title(); ?></h1>
        <div class="work-heading__excerpt">
            <?php the_excerpt(); ?>
        </div>
    </div>
</section>


<?php if ( have_rows( 'overview_section' ) ) : ?>
    <?php while ( have_rows( 'overview_section' ) ) : the_row(); ?>
        <?php $image = get_sub_field( 'image' ); ?>
        <section class="overview-section">
            <div class="container">
                <div class="overview-section__wrap">
                    <div class="overview-section__visual" data-aos="fade-up" data-aos-delay="100" data-aos-duration="300">
                        <?php if ( $image ) : ?>
                            <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                        <?php endif; ?>
                    </div>
                    <div class="overview-section__frame">
                        <div class="overview-section__text" data-aos="fade" data-aos-delay="0" data-aos-duration="300" >
                            <div class="overview-section__head">
                                <div class="overview-section__num">01</div>
                                <h3 class="overview-section__title">Project Idea</h3>
                            </div>
                            <div class="overview-section__content"><?php the_sub_field( 'project_idea' ); ?></div>
                        </div>
                        <div class="overview-section__text" data-aos="fade" data-aos-delay="200" data-aos-duration="300">
                            <div class="overview-section__head">
                                <div class="overview-section__num">02</div>
                                <h3 class="overview-section__title">Project Description</h3>
                            </div>
                            <div class="overview-section__content"><?php the_sub_field( 'project_description' ); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>

<?php $content_middle_image = get_field( 'content_middle_image' ); ?>
<?php if ( $content_middle_image ) : ?>
    <section class="content-image">
        <div class="container">
            <div class="content-image__wrap" data-aos="fade-right" data-aos-delay="100" data-aos-duration="500">
                <img src="<?php echo esc_url( $content_middle_image['url'] ); ?>" alt="<?php echo esc_attr( $content_middle_image['alt'] ); ?>" />
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if ( have_rows( 'company_information' ) ) : ?>
    <?php while ( have_rows( 'company_information' ) ) : the_row(); ?>
        <section class="company-description">
            <div class="container">
                <div class="company-description__wrap">
                    <div class="company-description__aside" data-aos="fade" data-aos-delay="100" data-aos-duration="300">
                        <?php if (get_sub_field( 'industry' )): ?>
                            <div class="company-info-item">
                                <div class="company-info-item__label">Industry</div>
                                <h5 class="company-info-item__title"><?php the_sub_field( 'industry' ); ?></h5>
                            </div>
                        <?php endif ?>
                        <?php if (get_sub_field( 'sector' )): ?>
                            <div class="company-info-item">
                                <div class="company-info-item__label">Sector</div>
                                <h5 class="company-info-item__title"><?php the_sub_field( 'sector' ); ?></h5>
                            </div>
                        <?php endif ?>
                        <?php if (get_sub_field( 'location' )): ?>
                            <div class="company-info-item">
                                <div class="company-info-item__label">Location</div>
                                <h5 class="company-info-item__title"><?php the_sub_field( 'location' ); ?></h5>
                            </div>
                        <?php endif ?>
                    </div>
                    <div class="company-description__content" data-aos="fade-up" data-aos-delay="100" data-aos-duration="500">
                        <h3 class="company-description__title"><?php the_sub_field( 'content_title' ); ?></h3>
                        <div class="company-description__text"><?php the_sub_field( 'description' ); ?></div>
                        <?php if (get_sub_field( 'company_website' )): ?>
                            <div class="company-description__button">
                                <a target="_blank" href="<?php the_sub_field( 'company_website' ); ?>" class="btn btn--sm-mob round-btn round-btn--white round-btn--light">
                                    <span class="round-btn__text">Visit website</span>
                                    <span class="round-btn__icon"><svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-arrow"></use></svg></span>
                                </a>
                            </div>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>


<?php if ( have_rows( 'testimonial' ) ) : ?>
    <?php while ( have_rows( 'testimonial' ) ) : the_row(); ?>
        <?php if (get_sub_field( 'text' )): ?>
            <section class="testimonial-single">
                <div class="container">
                    <div class="testimonial-single__container">
                        <div class="testimonial-single__text"><?php the_sub_field( 'text' ); ?></div>
                        <div class="testimonial-single__info">
                            <?php if (get_sub_field( 'author_name' )): ?>
                                <div class="testimonial-single__name"><?php the_sub_field( 'author_name' ); ?></div>
                            <?php endif; ?>
                            <?php if (get_sub_field( 'author_company' )): ?>
                                <div class="testimonial-single__company"><?php the_sub_field( 'author_company' ); ?></div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php else: ?>
            <div class="section-divider"><div class="container"><span class="section-divider__item"></span></div></div>
        <?php endif ?>
    <?php endwhile; ?>
<?php endif; ?>





<?php if ( have_rows( 'result' ) ) : ?>
    <?php while ( have_rows( 'result' ) ) : the_row(); ?>
        
        <section class="result-section">
            <div class="container">
                <div class="result-section__wrap">
                    <div class="result-section__info">
                        <h3 class="result-section__title" data-aos="fade" data-aos-delay="0" data-aos-duration="300">The Result</h3>
                        <div class="result-section__text" data-aos="fade" data-aos-delay="200" data-aos-duration="300"><?php the_sub_field( 'result_text_content' ); ?></div>
                    </div>
                    <div class="result-image-grid">
                        <?php 
                        $delay = 0;
                         ?>
                        <?php while ( have_rows( 'result_images' ) ) : the_row(); ?>
                            <?php $image = get_sub_field( 'image' ); ?>
                            <div class="result-image-grid__item result-image-grid__item--<?php the_sub_field( 'image_size' ); ?>" data-aos="zoom-in" data-aos-delay="<?php echo $delay; ?>" data-aos-duration="500">
                                <?php if ( $image ) : ?>
                                    <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                                <?php endif; ?>
                            </div>
                            <?php $delay = $delay + 300; ?>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </section>
        <?php if (get_sub_field( 'video_iframe' )): ?>
            <section class="portfolio-video-section">
                <div class="container" data-aos="fade" data-aos-delay="0" data-aos-duration="500">
                    <div class="embed-responsive embed-responsive-16by9">
                        <?php the_sub_field( 'video_iframe' ); ?>
                    </div>
                </div>
            </section>
        <?php endif ?>
        <?php if ( have_rows( 'wide_slider' ) ) : ?>
            <div class="full-slider owl-carousel" data-aos="fade" data-aos-delay="0" data-aos-duration="300">
                <?php while ( have_rows( 'wide_slider' ) ) : the_row(); ?>
                    <?php $image = get_sub_field( 'image' ); ?>
                    <div class="full-slider__item">
                        <?php if ( $image ) : ?>
                            <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>


<?php if ( have_rows( 'scope_of_work' ) ) : ?>
    <section class="scope-section">
        <div class="container">
            <h3 class="scope-section__title" data-aos="fade" data-aos-delay="300" data-aos-duration="500">Scope of work</h3>
            <div class="scope-grid">
                <?php while ( have_rows( 'scope_of_work' ) ) : the_row(); ?>
                    <div class="scope-grid__item" data-aos="zoom-in" data-aos-delay="600" data-aos-duration="600">
                        <?php $titleContent = get_sub_field( 'title_content' ); ?>
                        <?php $title_link = get_sub_field( 'title_link' ); ?>

                        <?php if ($titleContent == 'link'): ?>
                            <h4 class="scope-grid__title">
                                <?php if ( $title_link ) : ?>
                                    <a href="<?php echo esc_url( $title_link['url'] ); ?>" target="<?php echo esc_attr( $title_link['target'] ); ?>"><?php echo esc_html( $title_link['title'] ); ?></a>
                                <?php else: ?>
                                    <?php the_sub_field( 'title' ); ?>
                                <?php endif; ?>
                            </h4>
                        <?php else: ?>
                            <h4 class="scope-grid__title"><?php the_sub_field( 'title' ); ?></h4>
                        <?php endif ?>
                        <div class="scope-grid__content">
                            <?php the_sub_field( 'content' ); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php if ( have_rows( 'output' ) ) : ?>
                    <?php while ( have_rows( 'output' ) ) : the_row(); ?>
                        <div class="scope-grid__item scope-grid__item--output" data-aos="zoom-in" data-aos-delay="600" data-aos-duration="600">
                            <h4 class="scope-grid__title"><?php the_sub_field( 'title' ); ?></h4>
                            <div class="scope-grid__content">
                                <?php the_sub_field( 'content' ); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>






<?php 
    $relatedCategoryList = wp_get_object_terms( $post->ID, 'service', 'string' );
    $term_ids = wp_list_pluck($relatedCategoryList,'term_id');
    $temp_query2 = $wp_query;
    $relatedPosts = query_posts( [
        'post_type' => 'portfolio', 
        'posts_per_page' => 9, 
        'post__not_in' => array( $post->ID), 
        'order'=> 'DESC', 
        'nopaging=true',
        'tax_query'=> array(
            'relation' => 'OR',
            array(
                'taxonomy' => 'service',
                'field'    => 'id',
                'terms'    => $term_ids,
            )
        )
    ]);

    if ($relatedPosts): 
    ?>
    <section class="related-section" data-aos="fade" data-aos-delay="0" data-aos-duration="300">
        <div class="container">
            <h3 class="related-section__title">Check out more work</h3>
            <div class="work-list-related owl-carousel">
                <?php
                foreach( $relatedPosts as $post ){ 
                    setup_postdata($post);
                    the_post();
                    ?>
                    <div class="work-list-related__item">
                    <?php
                    get_template_part( 'template-parts/work-list-item', get_post_type() );
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
get_template_part( 'template-parts/cta-section', '', array('color' => 'nude',) );
?>


<?php
get_footer();
