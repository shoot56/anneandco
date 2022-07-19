<?php 
add_action( 'wp_enqueue_scripts', 'ajax_script_and_styles');
function ajax_script_and_styles() {
	global $wp_query;
	wp_register_script( 'ajax_scripts', get_stylesheet_directory_uri() . '/js/post-ajax.js', array('jquery') );
	wp_localize_script( 'ajax_scripts', 'ajax_loadmore_params', array(
		'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
		'posts' => json_encode( $wp_query->query_vars ), // everything about your loop is here
		'current_page' => $wp_query->query_vars['paged'] ? $wp_query->query_vars['paged'] : 1,
		'max_page' => $wp_query->max_num_pages,
		'category_name' => $_POST['taxonomy'],
	));
	wp_localize_script( 'ajax_scripts', 'ajax_loadmore_resources', array(
		'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
		'posts' => json_encode( $wp_query->query_vars ), // everything about your loop is here
		'current_page' => $wp_query->query_vars['paged'] ? $wp_query->query_vars['paged'] : 1,
		'max_page' => $wp_query->max_num_pages,
	) );
	wp_enqueue_script( 'ajax_scripts' );
}
function resources_loadmore_ajax_handler(){
	$queryTaxonomy = $_POST['taxonomy'];
	$queryTermId = $_POST['tax-term-id'];

	// if category is set
	if ( $queryTaxonomy && $queryTermId ) {
		$args = array(
			'posts_per_page' => $_POST['post-per-page'],
			'orderby' => 'date',
			'paged' => $_POST['current-page'] + 1,
			'post_type'   => $_POST['post-type'],
			'order' => $_POST['sort'],
			'post_status' => 'publish',
			'post__not_in' => get_option("sticky_posts"),
			'tax_query'=> array(
				'relation' => 'OR',
				array(
					'taxonomy' => $_POST['taxonomy'],
					'field'    => 'id',
					'terms'    => $_POST['tax-term-id'],
				)
			)
		);
	} else {
		$args = array(
			'posts_per_page' => $_POST['post-per-page'],
			'orderby' => 'date',
			'paged' => $_POST['page'] + 1,
			'post_type'   => $_POST['post-type'],
			'order' => $_POST['sort'],
			'post_status' => 'publish',
			'post__not_in' => get_option("sticky_posts"),
		);
	}
	query_posts( $args );
	if( have_posts() ) :
		while( have_posts() ): the_post();
			get_template_part( 'template-parts/work-list-item', get_post_type() );
		endwhile;
	endif;
	die; 
}
add_action('wp_ajax_loadmoreresources', 'resources_loadmore_ajax_handler');
add_action('wp_ajax_nopriv_loadmoreresources', 'resources_loadmore_ajax_handler');




add_action('wp_ajax_myfilter', 'blog_filter_function'); 
add_action('wp_ajax_nopriv_myfilter', 'blog_filter_function');
function blog_filter_function(){
	$args = array(
		'posts_per_page' => $_POST['post-per-page'],
		'orderby' => 'date',
		'order'	=> $_POST['date'], 
		'post_status' => 'publish',
		'post_type'   => 'portfolio',
		'post__not_in' => get_option("sticky_posts"),
	);
	if( isset( $_POST['category'] ) )
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'portfolio_category',
				'field' => 'id',
				'terms' => $_POST['category']
			)
		);
	if( isset( $_POST['category_service'] ) )
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'service',
				'field' => 'id',
				'terms' => $_POST['category_service']
			)
		);
	if( isset( $_POST['category_industry'] ) )
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'industry',
				'field' => 'id',
				'terms' => $_POST['category_industry']
			)
		);
	query_posts( $args );
	global $wp_query;
	if( have_posts() ) :
 		ob_start(); 
		while( have_posts() ): the_post();
			get_template_part( 'template-parts/work-list-item', get_post_format() );
		endwhile;
 		$posts_html = ob_get_contents(); // we pass the posts to variable
   		ob_end_clean(); // clear the buffer
	else:
		$posts_html = '<p>Nothing found for your criteria.</p>';
	endif;
	// needed for AJAX dataType : 'json',
 	echo json_encode( array(
		'posts' => json_encode( $wp_query->query_vars ),
		'max_page' => $wp_query->max_num_pages,
		'found_posts' => $wp_query->found_posts,
		'content' => $posts_html
	) );
	die();
}
