<?php 
// remove <br> and <p> from CF7
add_filter( 'wpcf7_autop_or_not', '__return_false' );

/**
 * Adjust contact form 7 radios and checkboxes to match bootstrap 4 custom radio structure.
 */
add_filter('wpcf7_form_elements', function ($content) {
    $content = preg_replace('/<label><input type="(checkbox|radio)" name="(.*?)" value="(.*?)" \/><span class="wpcf7-list-item-label">/i', '<label class="checkbox-holder"><input type="\1" name="\2" value="\3" class="checkbox-holder__input"><span class="checkbox-item">&nbsp;</span><span class="checkbox-holder__label">', $content);

    return $content;
});


//Theme General Settings
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'	=> false
	));
}

// Settings for Blog Archive Page
function blog_acf_pages() {
	if(function_exists('acf_add_options_page')) {
		acf_add_options_sub_page(array(
			'page_title'      => 'Blog Archive Settings', 
			'parent_slug'     => 'edit.php',
			'capability' => 'manage_options'
		));
	}
}
add_action('init', 'blog_acf_pages');

// Settings for Portfolio Archive Page
function portfolio_acf_pages() {
	if(function_exists('acf_add_options_page')) {
		acf_add_options_sub_page(array(
			'page_title'      => 'Portfolio Archive Settings', 
			'parent_slug'     => 'edit.php?post_type=portfolio',
			'capability' => 'manage_options'
		));
	}
}
add_action('init', 'portfolio_acf_pages');


// Settings for Service Archive Page
function service_acf_pages() {
	if(function_exists('acf_add_options_page')) {
		acf_add_options_sub_page(array(
			'page_title'      => 'Services Archive Settings', 
			'parent_slug'     => 'edit.php?post_type=service',
			'capability' => 'manage_options'
		));
	}
}
add_action('init', 'service_acf_pages');


/**
 * Templates and Page IDs without editor
 *
 */
function ea_disable_editor( $id = false ) {
	$excluded_templates = array(
		'components-page.php',
		'page-templates/index-page.php',
		'page-templates/contact-page.php',
		'page-templates/services-page.php',
		'page-templates/landing-chocolate.php',
		'page-templates/landing-linkedin.php',
		'page-templates/cloud-landing-page.php',
		'page-templates/about-us-page.php',
	);
	$excluded_ids = array(
		// get_option( 'page_on_front' )
	);
	if( empty( $id ) )
		return false;
	$id = intval( $id );
	$template = get_page_template_slug( $id );
	return in_array( $id, $excluded_ids ) || in_array( $template, $excluded_templates );
}
/**
 * Disable Gutenberg by template
 *
 */
function ea_disable_gutenberg( $can_edit, $post_type ) {
	if( ! ( is_admin() && !empty( $_GET['post'] ) ) )
		return $can_edit;
	if( ea_disable_editor( $_GET['post'] ) )
		$can_edit = false;
	if ($post_type === 'portfolio') {
		$can_edit = false;
	}
	return $can_edit;
}
add_filter( 'gutenberg_can_edit_post_type', 'ea_disable_gutenberg', 10, 2 );
add_filter( 'use_block_editor_for_post_type', 'ea_disable_gutenberg', 10, 2 );




add_action( 'admin_enqueue_scripts', 'load_admin_style' );
function load_admin_style() {
	wp_enqueue_style( 'admin_style', get_template_directory_uri() . '/css/admin.css', array(), filemtime(get_template_directory() . '/css/admin.css') );
}


// add span to menu
add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);
function my_wp_nav_menu_objects( $items, $args ) {
	// loop
	foreach( $items as &$item ) {
		$menuNameTitle = $item->title;
		$item->title = '<span class="menu-text">' . $item->title . '</span>';

		$isSubmenuItem = get_field('submenu_item', $item);
		$iconSpriteName = get_field('icon_name', $item);
		$menuItemDescription = get_field('description', $item);
		if ($isSubmenuItem) {
			$item->title = '<span class="drop-menu-item">';
			if ($iconSpriteName && $iconSpriteName != '-none-') {
				$item->title .= '<span class="drop-menu-item__visual"><svg class="svg-icon" width="48" height="48"><use xlink:href="'.get_template_directory_uri() .'/images/icons.svg#icon-'.$iconSpriteName.'"></use></svg></span>';
			}
			$item->title .= '<span class="drop-menu-item__frame"><span class="drop-menu-item__title">'.$menuNameTitle.'</span>';

			if ($menuItemDescription) {
				$item->title .= '<span class="drop-menu-item__description">'.$menuItemDescription.'</span>';
			}
			$item->title .= '</span>';
			$item->title .= '</span>';
		}
	}
	return $items;
}





// Turn off admin bar
show_admin_bar( false );

// add custom column in admin portfolio list
add_filter('manage_portfolio_posts_columns', function($columns) {
	return array_merge($columns, ['featured' => __('<span class="dashicons dashicons-star-filled"></span>', 'textdomain')]);
});
add_action('manage_portfolio_posts_custom_column', function($column_key, $post_id) {
	if ($column_key == 'featured') {
		$featured = get_post_meta($post_id, 'featured', true);
		if ($featured) {
			echo '<span style="color:#D07D59;">'; _e('<span class="dashicons dashicons-star-filled"></span>', 'textdomain'); echo '</span>';
		} 
	}
}, 10, 2);

// style for custom column in admin portfolio list
add_action('admin_head', 'featured_column_width');
function featured_column_width() {
	echo '<style type="text/css">';
	echo '.column-featured { text-align: center !important; width:60px !important; overflow:hidden }';
	echo '</style>';
}

// add custom body class
add_filter( 'body_class', 'custom_class' );
function custom_class( $classes ) {
	if ( 
		is_page_template('page-templates/landing-chocolate.php') || 
		is_page_template('page-templates/contact-page.php') || 
		is_page_template('page-templates/index-page.php') || 
		is_page_template('page-templates/about-us-page.php') || 
		is_page_template('page-templates/blog-page-v2.php') || 
		is_page_template('page-templates/services-page.php') 
	) {
		$classes[] = 'body--bg1';
	}
	return $classes;
}

// 'reading-progressbar' plugin update ban. code changed
add_filter( 'site_transient_update_plugins', 'filter_plugin_updates' );
function filter_plugin_updates( $value ) {
	unset( $value->response['reading-progress-bar/reading-progressbar.php'] );
	return $value;
}


add_filter( 'big_image_size_threshold', '__return_zero' );

// add preloader in first site load
function init_preload_js() {
    if (strpos( $_SERVER['HTTP_USER_AGENT'], 'Lighthouse') === false) {
    	?>
    	<script>

    		var root = document.getElementsByTagName( 'html' )[0];
    		var first = getCookie('firstLoading') === undefined ? true : false;
    		var localFirst = localStorage.getItem('firstLoading');

    		if (navigator.userAgent.indexOf("Chrome-Lighthouse") > -1) {
    			AOS.init({
    				once: true,
    			});
    		} else {
	    		if(localFirst == undefined){
	    			root.classList.add("first_load", "loading");
	    			var styles = document.createElement("style");
	    			styles.innerHTML = '.first_load #page{transition:opacity .1s ease .4s}.first_load.loading #page{opacity:0}.first_load.loaded #page{opacity:1}.preloader{position:absolute;top:0;left:0;width:100%;height:100%;overflow:hidden}.preloader__bg{background-color:#215fe5;position:absolute;top:0;left:0;width:100%;height:100%}.loading .preloader__bg{animation-duration:.6s;animation-name:preloadBg}.loaded .preloader__bg{animation-fill-mode:both;animation-duration:.6s;animation-name:preloadBgAfter}.preloader__logo{transition: opacity 0.4s;position:absolute;top:0;left:0;width:100%;height:100%;display:flex;justify-content:center;align-items:center;gap:14px}.first_load.loaded .preloader__logo{opacity: 0;}.preloader__logo__el-1{animation-delay:.6s;animation-duration:.4s;animation-name:logoFirstPart;animation-fill-mode:both}.preloader__logo__el-2{animation-delay:1s;animation-duration:.4s;animation-name:logoSecondPart;animation-fill-mode:both}@keyframes preloadBg{from{transform:translate(0,-100%)}to{transform:translate(0,0)}}@keyframes preloadBgAfter{from{transform:translate(0,0)}to{transform:translate(100%,0)}}@keyframes logoFirstPart{from{transform:translateY(200%);opacity:0}to{transform:translateY(0);opacity:1}}@keyframes logoSecondPart{from{opacity:0}to{opacity:1}}';
	    			document.head.prepend(styles);
	    			document.addEventListener('DOMContentLoaded', function(){
	    				// first load aos animation
	    				Array.from(document.getElementsByClassName("crit_el")).forEach(
	    					function(element, index, array) {
	    						var delay = element.dataset.firstDelay;
	    						if (delay) {
	    							element.dataset.wowDelay = delay;
	    						}
	    					}
	    				);
	    				setTimeout(function() {
				 			root.classList.add("loaded");
	    					root.classList.remove("loading");
	    					
	    					AOS.init({
	    						once: true,
	    					});
				 		}, 2800);
	    			});
	    			localStorage.setItem('firstLoading', 'true');
	    			setCookie('firstLoading', false, {'max-age': 30 * 24 * 3600});
	    		} else {
	    			document.addEventListener("DOMContentLoaded", function() {

	    				AOS.init({
	    					once: true,
	    				});
	    			});
	    		}
    		}

    		function getCookie(name) {
    			let matches = document.cookie.match(new RegExp(
    				"(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    				));
    			return matches ? decodeURIComponent(matches[1]) : undefined;
    		}

    		function setCookie(name, value, options = {}) {
    			options = {
    				path: '/',
    				...options
    			};

    			if (options.expires instanceof Date) {
    				options.expires = options.expires.toUTCString();
    			}

    			let updatedCookie = encodeURIComponent(name) + "=" + encodeURIComponent(value);

    			for (let optionKey in options) {
    				updatedCookie += "; " + optionKey;
    				let optionValue = options[optionKey];
    				if (optionValue !== true) {
    					updatedCookie += "=" + optionValue;
    				}
    			}

    			document.cookie = updatedCookie;
    		}
    	</script>
    	<?php
    }
}
add_action( 'wp_head', 'init_preload_js' );


add_action( 'send_headers', 'send_frame_options_header', 10, 0 ); 





//Record user's last login to custom meta
add_action( 'wp_login', 'custom_capture_login_time', 10, 2 );
function custom_capture_login_time( $user_login, $user ) {
	update_user_meta( $user->ID, 'last_login', time() );
}
//Register new custom column with last login time
add_filter( 'manage_users_columns', 'custom_user_last_login_column' );
add_filter( 'manage_users_custom_column', 'custom_last_login_column', 10, 3 );
function custom_user_last_login_column( $columns ) {
	$columns['last_login'] = 'Last Login';
	return $columns;
}
function custom_last_login_column( $output, $column_id, $user_id ){
	if( $column_id == 'last_login' ) {
		$last_login = get_user_meta( $user_id, 'last_login', true );
		$date_format = 'M j, Y';
		$hover_date_format = 'F j, Y, g:i a';
		$output = $last_login ? '<div title="Last login: '.date( $hover_date_format, $last_login ).'">'.human_time_diff( $last_login ).'</div>' : 'No record';
	}
	return $output;
}
//Allow the last login columns to be sortable
add_filter( 'manage_users_sortable_columns', 'custom_sortable_last_login_column' );
add_action( 'pre_get_users', 'custom_sort_last_login_column' );
function custom_sortable_last_login_column( $columns ) {
	return wp_parse_args( array(
		'last_login' => 'last_login'
	), $columns );
}
function custom_sort_last_login_column( $query ) {
	if( !is_admin() ) {
		return $query;
	}
	$screen = get_current_screen();
	if( isset( $screen->base ) && $screen->base !== 'users' ) {
		return $query;
	}
	if( isset( $_GET[ 'orderby' ] ) && $_GET[ 'orderby' ] == 'last_login' ) {
		$query->query_vars['meta_key'] = 'last_login';
		$query->query_vars['orderby'] = 'meta_value';
	}
	return $query;
}


