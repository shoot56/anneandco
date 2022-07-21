<?php 
function my_acf_init1() {
	acf_update_setting('google_api_key', 'AIzaSyBlr964IX_l3Q1JI6N7PQ0PmxQyyhSiehY');
}
add_action('acf/init', 'my_acf_init1');