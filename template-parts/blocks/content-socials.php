<?php
/**
 * Block template file: template-parts/blocks/content-socials.php
 *
 * Socials Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'socials-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-socials';
if ( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>


<div id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?>">
	<?php if ( have_rows( 'icons' ) ) : ?>
		<ul class="social-list">
			<?php while ( have_rows( 'icons' ) ) : the_row(); ?>
				<?php $icon = get_sub_field( 'icon' ); ?>
				<?php if ( $icon ) : ?>
					<li class="social-list__item">
						<a target="_blank" href="<?php the_sub_field( 'link' ); ?>" class="social-list__link">
							<span class="link-text-description"><?php the_sub_field( 'link' ); ?></span>
							<img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
						</a>
					</li>
				<?php endif; ?>
			<?php endwhile; ?>
		</ul>
	<?php endif; ?>
</div>