<?php
/**
 * Block template file: template-parts/blocks/service-cta.php
 *
 * Service Cta Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'service-cta-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
	$id = $block['anchor'];
}
$colourScheme = get_field( 'colour_scheme' );
$buttonColor = '';
switch ($colourScheme) {
	case "nude":
		$buttonColor = 'navy';
		break;
	case "cream":
		$buttonColor = 'blue';
		break;
	case "orange":
		$buttonColor = 'navy';
		break;
	case "blue":
		$buttonColor = 'white';
		break;
	case "navy":
		$buttonColor = 'white';
		break;
	case "white":
		$buttonColor = 'navy';
		break;
	default:
		$buttonColor = 'blue';
}
// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-service-cta';

$classes .= ' block-service-cta--'.$colourScheme;

if ( ! empty( $block['className'] ) ) {
	$classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
	$classes .= ' align' . $block['align'];
}
?>
<?php if ($is_preview): ?>
	<style type="text/css">
		<?php echo '#' . $id; ?> {
			max-width: 760px;
		}
	</style>
<?php endif ?>
<div id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?>">
	<?php  ?>
	<?php $service = get_field( 'service' ); ?>
	
	<div class="block-service-cta__visual">
		<?php echo get_the_post_thumbnail( $service, 'anneco-post-sticky', array(
			'alt' => the_title_attribute(
				array(
					'echo' => false,
				)
			),
		)); ?>
	</div>
	<div class="block-service-cta__frame">
		<div class="block-service-cta__title h4">Learn how <?php echo get_the_title( $service ); ?> can transform your business.</div>
		<div class="block-service-cta__button">
			<a href="<?php echo get_permalink( $service ); ?>" class="btn secondary-btn secondary-btn--<?php echo $buttonColor;?>">
				<span class="secondary-btn__text">Learn More</span>
				<span class="secondary-btn__icon"><svg class="svg-icon" width="16" height="16"><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons.svg#icon-arrow"></use></svg></span>
			</a>
		</div>
	</div>
</div>