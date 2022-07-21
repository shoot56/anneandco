<?php 

function cptui_register_my_cpts() {

	/**
	 * Post Type: Portfolio.
	 */

	$labels = [
		"name" => __( "Portfolio", "anneco" ),
		"singular_name" => __( "Portfolio", "anneco" ),
	];

	$args = [
		"label" => __( "Portfolio", "anneco" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => true,
		"rewrite" => [ "slug" => "portfolio", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 4,
		"menu_icon" => "dashicons-tagcloud",
		"supports" => [ "title", "thumbnail", "excerpt" ],
		"show_in_graphql" => false,
	];

	register_post_type( "portfolio", $args );

	/**
	 * Post Type: Services.
	 */

	$labels = [
		"name" => __( "Services", "anneco" ),
		"singular_name" => __( "Service", "anneco" ),
	];

	$args = [
		"label" => __( "Services", "anneco" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "services", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-media-interactive",
		"supports" => [ "title", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "service", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );

function cptui_register_my_taxes() {

	/**
	 * Taxonomy: Portfolio Category.
	 */

	$labels = [
		"name" => __( "Portfolio Category", "anneco" ),
		"singular_name" => __( "Category", "anneco" ),
	];

	
	$args = [
		"label" => __( "Portfolio Category", "anneco" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'portfolio_category', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "portfolio_category",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "portfolio_category", [ "portfolio" ], $args );

	/**
	 * Taxonomy: Services.
	 */

	$labels = [
		"name" => __( "Services", "anneco" ),
		"singular_name" => __( "Service", "anneco" ),
	];

	
	$args = [
		"label" => __( "Services", "anneco" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'case_services', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "service",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "service", [ "portfolio" ], $args );

	/**
	 * Taxonomy: Industries.
	 */

	$labels = [
		"name" => __( "Industries", "anneco" ),
		"singular_name" => __( "Industry", "anneco" ),
	];

	
	$args = [
		"label" => __( "Industries", "anneco" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'industry', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "industry",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "industry", [ "portfolio" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes' );
