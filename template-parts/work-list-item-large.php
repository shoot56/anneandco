


<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="work-list-item work-list-item--large work-list-item--<?php the_field( 'color_mode' ); ?>  <?php echo $args['class']; ?>" data-aos="fade-up" data-aos-delay="400" data-aos-duration="800" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="work-list-item__visual">
        <?php if ( has_post_thumbnail()) { ?>
            <?php the_post_thumbnail('anneco-work-thumbnail-x2'); ?>
        <?php } ?>
    </div>

    <div class="work-list-item__frame">
        
        <h3 class="work-list-item__title h4"><?php the_title(); ?></h3>
        <div class="work-list-item__info">
            <?php 
            $terms = get_the_terms($post->ID, 'service');
            ?>
            <?php foreach ($terms as $term): ?>
                <span class="post-category"><?php echo $term->name; ?></span>
                <span class="separator">|</span>
            <?php endforeach ?>
            
        </div>

        
    </div>
</a>