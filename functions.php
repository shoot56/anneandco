<?php
/**
 * anneco functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package anneco
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.1.10.2' );
}



if ( ! function_exists( 'anneco_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function anneco_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on anneco, use a find and replace
		 * to change 'anneco' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'anneco', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'anneco' ),
				'menu-landing' => esc_html__( 'Landing Nav', 'anneco' ),
				'menu-landing-chocolate' => esc_html__( 'Chocolate Landing', 'anneco' ),
				'menu-main-footer' => esc_html__( 'Footer Main Nav', 'anneco' ),
				'menu-bottom-footer' => esc_html__( 'Footer Bottom Nav', 'anneco' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'anneco_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		add_theme_support( 'align-wide' );
		add_theme_support( 'responsive-embeds' );
		add_image_size( 'anneco-post-image', 1920, 440, true );
		add_image_size( 'anneco-post-sticky', 760, 540, true );
		add_image_size( 'anneco-post-sticky-x2', 1520, 1080, true );
		add_image_size( 'anneco-post-thumbnail', 424, 240, true );
		add_image_size( 'anneco-post-thumbnail-x2', 848, 480, true );
		add_image_size( 'anneco-work-thumbnail', 630, 720, true );
		add_image_size( 'anneco-work-thumbnail-x2', 1260, 1440, true );
	}
endif;
add_action( 'after_setup_theme', 'anneco_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function anneco_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'anneco_content_width', 640 );
}
add_action( 'after_setup_theme', 'anneco_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function anneco_widgets_init() {
	// remove_theme_support( 'widgets-block-editor' );
	
	register_sidebar( 
		array(
			'name'          => 'Footer contacts col 1',
			'id'            => 'footer_widget_1',
			'before_widget' => '<div class="footer-contact-block">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="footer-contact-block__label">',
			'after_title'   => '</div>',
		) 
	);
	register_sidebar( 
		array(
			'name'          => 'Footer contacts col 2',
			'id'            => 'footer_widget_2',
			'before_widget' => '<div class="footer-contact-block">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="footer-contact-block__label">',
			'after_title'   => '</div>',
		) 
	);
	register_sidebar( 
		array(
			'name'          => 'Footer subscribe section',
			'id'            => 'footer_widget_3',
			'before_widget' => '<div class="footer-contact-block">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="footer-contact-block__label">',
			'after_title'   => '</div>',
		) 
	);
}
add_action( 'widgets_init', 'anneco_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function anneco_scripts() {
	wp_enqueue_style( 'anneco-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'aos', get_template_directory_uri() . '/css/aos.css', array(), filemtime(get_template_directory() . '/css/aos.css') );
	wp_enqueue_style( 'image-compare', get_template_directory_uri() . '/css/image-compare-viewer.min.css', array(), filemtime(get_template_directory() . '/css/image-compare-viewer.min.css') );
	wp_enqueue_style( 'owl', get_template_directory_uri() . '/css/owl.carousel.css', array(), filemtime(get_template_directory() . '/css/owl.carousel.css') );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.min.css', array(), filemtime(get_template_directory() . '/css/animate.min.css') );
	wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/css/fancybox.css', array(), filemtime(get_template_directory() . '/css/fancybox.css') );
	
	wp_enqueue_style( 'page-header', get_template_directory_uri() . '/css/page-header.css', array(), filemtime(get_template_directory() . '/css/page-header.css') );
	
	wp_enqueue_style( 'all-style', get_template_directory_uri() . '/css/style.css', array(), filemtime(get_template_directory() . '/css/style.css') );

	if(is_page_template('page-templates/about-us-page.php')) {
		wp_enqueue_style( 'about-us-style', get_template_directory_uri() . '/css/about-page.css', array(), filemtime(get_template_directory() . '/css/about-page.css') );
	}
	if(is_page_template('page-templates/index-page.php')) {
		wp_enqueue_style( 'index-style', get_template_directory_uri() . '/css/critical-index.css', array(), filemtime(get_template_directory() . '/css/critical-index.css') );
	}
	if(is_page_template('page-templates/contact-page.php')) {
		wp_enqueue_style( 'tooltipster', get_template_directory_uri() . '/css/tooltipster.css', array(), filemtime(get_template_directory() . '/css/tooltipster.css') );
		wp_enqueue_style( 'contact-style', get_template_directory_uri() . '/css/contact-page.css', array(), filemtime(get_template_directory() . '/css/contact-page.css') );
	}
	if (is_singular('post')) {
		wp_enqueue_style( 'blog-article', get_template_directory_uri() . '/css/blog-article.css', array(), filemtime(get_template_directory() . '/css/blog-article.css') );
	}
	if (is_singular('service') || is_post_type_archive( 'service' )) {
		wp_enqueue_style( 'services', get_template_directory_uri() . '/css/services.css', array(), filemtime(get_template_directory() . '/css/services.css') );
	}








	wp_enqueue_script( 'typewriter', get_template_directory_uri() . '/js/typewriter.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'image-compare', get_template_directory_uri() . '/js/image-compare-viewer.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'owl', get_template_directory_uri() . '/js/owl.carousel.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/js/fancybox.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'tooltipster', get_template_directory_uri() . '/js/tooltipster.main.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'aos', get_template_directory_uri() . '/js/aos.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/jquery.main.js', array('jquery'), _S_VERSION, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'anneco_scripts' );

function landing_style() {
	
	if(is_page_template('page-templates/landing-linkedin.php')) {
		wp_enqueue_style( 'landing', get_template_directory_uri() . '/css/landing-linkedin.css', array(), filemtime(get_template_directory() . '/css/landing-linkedin.css') );
	}
	if(is_page_template('page-templates/landing-chocolate.php') || is_page_template('page-templates/landing-chocolate-success.php')) {
		wp_enqueue_style( 'landing', get_template_directory_uri() . '/css/landing-chocolate.css', array(), filemtime(get_template_directory() . '/css/landing-chocolate.css') );
	}
}
add_action( 'wp_enqueue_scripts', 'landing_style' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

require_once( get_stylesheet_directory() . '/inc/ajax-request.php' );

require get_template_directory() . '/inc/post-blocks.php';

require get_template_directory() . '/inc/key.php';

require get_template_directory() . '/inc/settings.php';

require get_template_directory() . '/inc/custom-post-type.php';
