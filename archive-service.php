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

<section class="services-head-section">
    <div class="container">
        <div class="services-head-section__title">
            <h1 class="services-head-section__h1 " data-aos="fade" data-aos-delay="600">
                <?php if ( have_rows( 'hero_title', 'option' ) ) : ?>
                    <?php while ( have_rows( 'hero_title', 'option' ) ) : the_row(); ?>
                        <div class="index-head-title__text">
                            <?php if (get_sub_field( 'before_title' )): ?>
                                <span class="index-head-title__before"><?php the_sub_field( 'before_title' ); ?>&nbsp;</span>
                            <?php endif ?>
                            <span id="services-head-title-dynamic" data-words="<?php 
                            if (have_rows( 'dynamic_phrase' )) {
                                $counter = 0;
                                while (have_rows( 'dynamic_phrase' )) {
                                    the_row();
                                    if ($counter > 0) {
                                        echo '; ';
                                    }
                                    the_sub_field( 'text_item' );
                                    $counter = $counter + 1;
                                }
                            } 
                            ?>" class="index-head-title__dynamic">&nbsp;</span>
                            <span class="index-head-title__after"><?php the_sub_field( 'after_title' ); ?></span>
                        </div>
                    <?php endwhile; ?>
                <?php else: ?>
                    <?php the_field( 'page_title' ); ?>
                <?php endif; ?>

            </h1>
            <div class="button" data-aos="fade" data-aos-delay="900">
                <a href="<?php the_field( 'video_url', 'option' ); ?>" data-fancybox="video-gallery" class="btn btn--sm-tab round-btn round-btn--cream round-btn--light">
                    <span class="round-btn__text">View Showcase</span>
                    <span class="round-btn__icon"><svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-plus"></use></svg></span>
                </a>
            </div>
        </div>
    </div>
</section>

<?php if ( have_posts() ) : ?>
<section class="all-services-section">
    <div class="container">
        <div class="all-services-list">
            <?php $dalayCount = 100; ?>
            <?php
            while ( have_posts() ) :
                the_post();
             ?>
             <?php $itemID = get_the_ID(); ?>
             <div class="all-services-list__item" data-aos="fade-up " data-aos-delay="<?php echo $dalayCount;?>" >
                 
                <a href="<?php the_permalink(); ?>" class="all-services-item">
                    <div class="all-services-item__head">
                        <div class="all-services-item__icon">
                            <svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#<?php the_field( 'service_icon', $itemID)?>"></use></svg>
                        </div>
                        <h2 class="all-services-item__name h5"><?php the_title(); ?></h2>
                    </div>
                    <div class="all-services-item__text"><?php the_field( 'service_excerpt', $itemID ); ?></div>
                    <div class="all-services-item__button">
                        <span class="btn btn--sm-tab secondary-btn secondary-btn--blue">
                            <span class="secondary-btn__text">Learn More</span>
                            <span class="secondary-btn__icon"><svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-arrow"></use></svg></span>
                        </span>
                    </div>
                </a>
             </div>




            <?php 
            $dalayCount = $dalayCount + 200;
            endwhile;
            ?>
        </div>
    </div>
</section>


<?php endif; ?>







<?php if ( have_rows( 'services_information', 'option' ) ) : ?>
    
    <?php 
    $image_counter = 0;
    $content_counter = 0;
     ?>

    <div class="gsap-sections">
        <div class="gsap-sections__progress"></div>
        <div class="gsap-sections__images">
            <?php while ( have_rows( 'services_information', 'option' ) ) : the_row(); ?>
                <?php $service_background_image = get_sub_field( 'service_background_image' ); ?>
                <?php if ( $service_background_image ) : ?>
                    <div data-id="<?php echo $image_counter;?>" class="gsap-sections__image">
                        <img src="<?php echo esc_url( $service_background_image['url'] ); ?>" alt="<?php echo esc_attr( $service_background_image['alt'] ); ?>" />
                        <span class="gsap-sections__deco" style="background-color: <?php the_sub_field( 'decoration_color' ); ?>;"></span>
                    </div>
                <?php endif; ?>

                <?php $image_counter = $image_counter + 1; ?>
            <?php endwhile; ?>
        </div>

        <div class="gsap-sections__content">

            <?php while ( have_rows( 'services_information', 'option' ) ) : the_row(); ?>
                <?php $service_icon = get_sub_field( 'service_icon' ); ?>
                <?php $service = get_sub_field( 'service' ); ?>
        

                <div id="service-<?php echo $content_counter;?>" data-anchor-id="<?php echo $content_counter;?>" class="gsap-item">
                    <?php $service_background_image = get_sub_field( 'service_background_image' ); ?>
                    <?php if ($service_background_image): ?>
                        <div class="gsap-item__visual">
                            <img src="<?php echo esc_url( $service_background_image['url'] ); ?>" alt="<?php echo esc_attr( $service_background_image['alt'] ); ?>" />
                        </div>
                    <?php endif ?>
                    <div class="container">
                        <div class="gsap-item__wrap">
                            <div class="gsap-item__frame">
                                <div class="gsap-item__info">
                                    <div class="gsap-item__head">
                                        <div class="gsap-item__head-icon">
                                            <svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#<?php the_field( 'service_icon', $service)?>"></use></svg>
                                        </div>
                                        <div class="gsap-item__title"><?php echo get_the_title( $service ); ?></div>
                                    </div>
                                    <div class="gsap-item__title"></div>
                                    <div class="gsap-item__content">
                                        <?php the_sub_field( 'service_content' ); ?>
                                    </div>
                                    <?php if ( $service ) : ?>
                                        <div class="gsap-item__button">
                                            <a href="<?php echo get_permalink( $service ); ?>" class="btn secondary-btn secondary-btn--navy">
                                                <span class="secondary-btn__text">Learn More</span>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $content_counter = $content_counter + 1; ?>
            <?php endwhile; ?>
        </div>
        
    </div>
<?php endif; ?>




<?php if ( have_rows( 'process_section', 'option' ) ) : ?>
    <?php while ( have_rows( 'process_section', 'option' ) ) : the_row(); ?>
        <section class="process-section">
            <div class="container">
                <h2 class="process-section__title" data-aos="fade" data-aos-delay="400"><span><?php the_sub_field( 'section_title' ); ?></span></h2>
                <?php if ( have_rows( 'process_list' ) ) : ?>
                    <?php 
                    $counter = 0;
                    ?>
                    <?php $dalayCount = 400; ?>
                    <div class="process-slider">
                        <?php while ( have_rows( 'process_list' ) ) : the_row(); ?>
                            <?php 
                            $counter = $counter + 1; 
                            ?>
                            <div class="process-slider__item" data-aos="fade-up" data-aos-delay="<?php echo $dalayCount;?>">
                                <div class="process-item">
                                    <?php if ($counter <= 9): ?>
                                        <div class="process-item__num">0<?php echo $counter; ?></div>
                                    <?php else: ?>
                                        <div class="process-item__num"><?php echo $counter; ?></div>
                                    <?php endif ?>
                                    <h5 class="process-item__title"><?php the_sub_field( 'title' ); ?></h5>
                                    <div class="process-item__text"><?php the_sub_field( 'text' ); ?></div>
                                </div>
                            </div>
                            <?php $dalayCount = $dalayCount + 200; ?>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>



<?php 
get_template_part( 'template-parts/cta-section', '', array('color' => 'cream',) );
?>



<?php
get_footer();
