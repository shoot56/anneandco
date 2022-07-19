<?php
/**
 * Block template file: template-parts/blocks/content-cta.php
 *
 * Cta Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'cta-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-cta';
if ( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>

<style type="text/css">
    <?php echo '#' . $id; ?> {
        padding: 48px 64px;
    }
    <?php echo '#' . $id; ?> a{
        white-space: nowrap;
    }
    .post-content-cta--white-color {
        background-color: #F2F2F2;
        color: #1E293A;
    }
    .post-content-cta--navy-color {
        background-color: #1E293A;
        color: #D07D59;
    }
    .post-content-cta--blue-color {
        background-color: #215FE5;
        color: #F4DCAD;
    }
    .post-content-cta--orange-color {
        background-color: #D07D59;
        color: #FFF;
    }
    .post-content-cta--cream-color {
        background-color: #F4DCAD;
        color: #215FE5;
    }
    .post-content-cta--nude-color {
        background-color: #F4B9A4;
        color: #1E293A;
    }
    .post-content-cta__text {
        -webkit-box-flex:1 1 auto;
        -moz-box-flex: 1 1 auto;
        -webkit-flex: 1 1 auto;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        min-width: 0;
    }
    .post-content-cta__wrap {
        display: -webkit-box;
        display: -moz-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        align-items: center;
        gap: 64px;
    }
    <?php echo '#' . $id; ?> .post-content-cta__text {
        margin: 0;
    }
    @media only screen and (max-width: 1400px) {
        <?php echo '#' . $id; ?> {
            padding: 40px 40px;
        }
        .post-content-cta__wrap {
            gap: 32px;
        }
    }
    @media only screen and (max-width: 1199px) {
        <?php echo '#' . $id; ?> {
            padding: 32px 32px;
        }
        .post-content-cta__wrap {
            gap: 24px;
        }
    }
    @media only screen and (max-width: 991px) {
        <?php echo '#' . $id; ?> {
            padding: 24px 24px;
        }
        .post-content-cta__wrap {
            gap: 16px;
        }
    }
    @media only screen and (max-width: 767px) {
        <?php echo '#' . $id; ?> {
            padding: 24px;
        }
        .post-content-cta__wrap {
            gap: 16px;
        }
    }
    @media only screen and (max-width: 575px) {
        <?php echo '#' . $id; ?> {
            padding: 32px;
        }
        .post-content-cta__wrap {
            gap: 32px;
            flex-direction: column;
            text-align: center;
        }
    }
</style>
<?php $cta_button = get_field( 'cta_button' ); ?>
<div id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?> post-content-cta post-content-cta--<?php the_field( 'cta_background_color' ); ?>">
    <div class="post-content-cta__wrap">
        <div class="post-content-cta__text h4"><?php the_field( 'cta_title_text' ); ?></div>
        <?php if ( $cta_button ) : ?>
            <div class="post-content-cta__button">
                <a href="<?php echo esc_url( $cta_button['url'] ); ?>" target="<?php echo esc_attr( $cta_button['target'] ); ?>" class="btn secondary-btn secondary-btn--<?php the_field( 'cta_button_color' ); ?>">
                    <span class="secondary-btn__text"><?php echo esc_html( $cta_button['title'] ); ?></span>
                    <span class="secondary-btn__icon"><svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-arrow"></use></svg></span>
                </a>
            </div>
        <?php endif; ?>
    </div>
</div>