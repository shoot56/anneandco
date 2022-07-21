<?php 
$gApiKey = get_field( 'google_api_key', 'option' );

function my_acf_init1() {
	acf_update_setting('google_api_key', $gApiKey);
}
add_action('acf/init', 'my_acf_init1');