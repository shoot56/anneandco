<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package anneco
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses anneco_header_style()
 */
function anneco_custom_header_setup() {
	add_theme_support(
		'custom-header',
		apply_filters(
			'anneco_custom_header_args',
			array(
				'default-image'      => '',
				'default-text-color' => '000000',
				'width'              => 1000,
				'height'             => 250,
				'flex-height'        => true,
				'wp-head-callback'   => 'anneco_header_style',
			)
		)
	);
}
add_action( 'after_setup_theme', 'anneco_custom_header_setup' );

if ( ! function_exists( 'anneco_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog.
	 *
	 * @see anneco_custom_header_setup().
	 */
	function anneco_header_style() {
		$header_text_color = get_header_textcolor();

		/*
		 * If no custom options for text are set, let's bail.
		 * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
		 */
		if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
			return;
		}

		// If we get this far, we have custom styles. Let's do this.
		?>
		<style type="text/css">
		<?php
		// Has the text been hidden?
		if ( ! display_header_text() ) :
			?>
			.site-title,
			.site-description {
				position: absolute;
				clip: rect(1px, 1px, 1px, 1px);
				}
			<?php
			// If the user has set a custom color for the text use that.
		else :
			?>
			.site-title a,
			.site-description {
				color: #<?php echo esc_attr( $header_text_color ); ?>;
			}
		<?php endif; ?>
		</style>
		<?php
	}
endif;



class Header_Walker_Nav_Menu extends Walker_Nav_Menu {
    private $_after = null;

    
    public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        // Backup the original "after", if any.
        if ( null === $this->_after ) {
            $this->_after = $args->after;
        }
        // Now add the wrapper div, if applicable.
        if ( $args->walker->has_children  ) {
            $args->after = '<div class="sub-menu-wrapper">' . $this->_after;
        } else {
            $args->after = $this->_after;
        }

        // if (get_field( 'isnt_link', $item->ID ) == 1) {
        // 	$item_output = '<div class="footer__list-title">';
        // 	$item_output .= $args->link_before . $title . $args->link_after;
        // 	$item_output .= '</div>';
        // }

        

        // Then let the parent walker does the output generation.
        // parent::start_el( $output, $item, $depth, $args, $id );


        $indent = ( $depth ) ? str_repeat( $t, $depth ) : '';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;

		$args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args, $depth );
		$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

		// создаем HTML код элемента меню
		$output .= $indent . '<li' . $id . $class_names .'>';

		$atts = array();
		$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
		$atts['target'] = ! empty( $item->target )     ? $item->target     : '';
		$atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
		$atts['href']   = ! empty( $item->url )        ? $item->url        : '';

		$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

		$attributes = '';
		foreach ( $atts as $attr => $value ) {
			if ( ! empty( $value ) ) {
				$value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
				$attributes .= ' ' . $attr . '="' . $value . '"';
			}
		}

		$title = apply_filters( 'the_title', $item->title, $item->ID );
		$title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );

		$item_output = $args->before;

		// check title item
		if (get_field( 'isnt_link', $item->ID ) == 1) {
			$item_output .= '<div class="menu-item__link">';
			$item_output .= $args->link_before . $title . $args->link_after;
			$item_output .= '</div>';
			$item_output .= $args->after;
		} else if (get_field( 'not_link', $item->ID ) == 1) {
			$item_output .= '<div class="menu-item__title">';
			$item_output .= $args->link_before . $title . $args->link_after;
			$item_output .= '</div>';
			$item_output .= $args->after;
		} else {
			$item_output .= '<a'. $attributes .' class="menu-item__link">';
			$item_output .= $args->link_before . $title . $args->link_after;
			$item_output .= '</a>';
			$item_output .= $args->after;
		}

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
    public function end_el( &$output, $item, $depth = 0, $args = array() ) {
        // Close the wrapper div, if applicable.
        if ( $args->walker->has_children ) {
            $output .= "</div><!-- .sub-menu-wrapper -->";
        }
        $output .= "</li>\n";
    }
}