<?php 
if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_62d5730d227a8',
		'title' => 'Block Service CTA',
		'fields' => array(
			array(
				'key' => 'field_62d57320658af',
				'label' => 'Colour Scheme',
				'name' => 'colour_scheme',
				'type' => 'radio',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
					'nude' => '<span style="width: 40px; height: 20px; background: #F4B9A4; color: #1E293A; padding: 5px; display: inline-block;">Nude</span>',
					'cream' => '<span style="width: 40px; height: 20px; background: #F4DCAD; color: #6666FF; padding: 5px; display: inline-block;">Cream</span>',
					'orange' => '<span style="width: 40px; height: 20px; background: #D07D59; color: #F2F2F2; padding: 5px; display: inline-block;">Orange</span>',
					'blue' => '<span style="width: 40px; height: 20px; background: #6666FF; color: #F4DCAD; padding: 5px; display: inline-block;">Blue</span>',
					'navy' => '<span style="width: 40px; height: 20px; background: #1E293A; color: #D07D59; padding: 5px; display: inline-block;">Navy</span>',
					'white' => '<span style="width: 40px; height: 20px; background: #F2F2F2; color: #1E293A; padding: 5px; display: inline-block;">White</span>',
				),
				'allow_null' => 0,
				'other_choice' => 0,
				'default_value' => '',
				'layout' => 'vertical',
				'return_format' => 'value',
				'save_other_choice' => 0,
			),
			array(
				'key' => 'field_62d5745f658b0',
				'label' => 'Service',
				'name' => 'service',
				'type' => 'post_object',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'post_type' => array(
					0 => 'service',
				),
				'taxonomy' => '',
				'allow_null' => 0,
				'multiple' => 0,
				'return_format' => 'id',
				'ui' => 1,
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/service-cta',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
		'show_in_rest' => 0,
	));

endif;