<?php 




add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {
	// Check function exists.
	if( function_exists('acf_register_block_type') ) {
		// register a testimonial block.
		// acf_register_block_type(array(
		//     'name'              => 'howto',
		//     'title'             => __('How To'),
		//     'description'       => __('A custom howto block.'),
		//     'render_template'   => 'template-parts/blocks/howto/howto.php',
		//     'category'          => 'formatting',
		//     'icon'              => 'admin-comments',
		//     'keywords'          => array( 'howto', 'list' ),
		// ));

		acf_register_block_type(array(
			'name'              => 'socials',
			'title'             => __('Social List Icons'),
			'description'       => __('A custom Contact Information.'),
			'render_template'   => 'template-parts/blocks/content-socials.php',
			'category'          => 'formatting',
			'icon'              => 'admin-comments',
			'keywords'          => array( 'icons', 'socials' ), 
		));
		acf_register_block_type(array(
			'name'              => 'cta',
			'title'             => __('Simple CTA Block'),
			'description'       => __('A custom CTA Block.'),
			'render_template'   => 'template-parts/blocks/content-cta.php',
			'category'          => 'formatting',
			'icon'              => 'admin-comments',
			'keywords'          => array( 'cta', 'custom' ), 
		));
		acf_register_block_type(array(
            'name'              => 'service-cta',
            'title'             => __('Service CTA'),
            'description'       => __('Service CTA block with title and button'),
            'render_template'   => 'template-parts/blocks/service-cta.php',
            'category'          => 'formatting',
            'icon'              => 'id',
            'keywords'          => array( 'CTA', 'Call to action', 'Service' ),
        ));
	}
}
