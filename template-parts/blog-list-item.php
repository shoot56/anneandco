<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package procoders
 */

?>


<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="blog-list-item <?php echo $args['class']; ?>" data-aos="fade-up" data-aos-delay="300" data-aos-duration="300" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="blog-list-item__visual">
        <?php if ( has_post_thumbnail()) { ?>
            <?php the_post_thumbnail('anneco-post-thumbnail'); ?>
            <span class="blog-list-item__visual-bg" style="background-image: url(<?php the_post_thumbnail_url( 'anneco-post-thumbnail' ); ?>);"></span>
        <?php } ?>
    </div>

    <div class="blog-list-item__frame">
        <div class="blog-list-item__info post-tag-list">
            <?php 
            $categoryList = wp_get_post_categories( $post->ID, array('fields' => 'all') );
            $taxonomy_prefix = 'category';
            // shuffle($categoryList);
            $categoryList = array_slice($categoryList, 0, 3);
            ?>
            <?php foreach ($categoryList as $category): ?>
                <?php 
                $term_id = $category->term_id;
                $term_id_prefixed = $taxonomy_prefix .'_'. $term_id;
                ?>
                <span class="post-tag "><?php echo $category->name; ?></span>
            <?php endforeach ?>
            
        </div>
        <h3 class="blog-list-item__title h4"><?php the_title(); ?></h3>
        <div class="blog-list-item__footer">
            <div class="blog-reading-time">
                <span class="text"><?php 
                echo do_shortcode('[rt_reading_time]'); 
                ?> min</span>
            </div>
            <div class="blog-list-item__date">
                <?php the_time('d M Y', '', ''); ?>
            </div>
        </div>

        
    </div>
</a>