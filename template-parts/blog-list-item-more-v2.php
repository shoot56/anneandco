<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package procoders
 */

?>


<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="article-list-item <?php echo $args['class']; ?>" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="article-list-item__visual">
        <?php if ( has_post_thumbnail()) { ?>
            <?php the_post_thumbnail('anneco-post-thumbnail'); ?>
            <span class="article-list-item__visual-bg" style="background-image: url(<?php the_post_thumbnail_url( 'anneco-post-thumbnail' ); ?>);"></span>
        <?php } ?>
    </div>

    <div class="article-list-item__frame">
        <div class="article-list-item__info article-tag-list">
            <?php 
            $categoryList = wp_get_post_categories( $post->ID, array('fields' => 'all') );
            $taxonomy_prefix = 'category';
            $limitItem = 3;

            $arrLength = count($categoryList);

            
            $categoryList = array_slice($categoryList, 0, $limitItem);
            ?>
            <?php foreach ($categoryList as $category): ?>
                <?php 
                $term_id = $category->term_id;
                $term_id_prefixed = $taxonomy_prefix .'_'. $term_id;
                ?>
                <span class="article-tag-list__item"><?php echo $category->name; ?></span>
            <?php endforeach ?>
            <?php 
            if ($arrLength > $limitItem) {
                $numItem = $arrLength - $limitItem; 
                echo "<span class='article-tag-list__text'>+" . $numItem . "</span>";
            }
            ?>
            
        </div>
        <h2 class="article-list-item__title"><?php the_title(); ?></h2>
        
        <div class="article-list-item__footer">
            <div class="article-list-item__time">
                <?php 
                echo do_shortcode('[rt_reading_time]'); 
                ?> min read
            </div>
            <span class="article-list-item__footer-sep"></span>
            <div class="article-list-item__date">
                <?php the_time('d M Y', '', ''); ?>
            </div>
        </div>

        
    </div>
</a>