<?php
/**
 * Set up Options Page
 *
 * @package rocket_base
 */

/* ------------- Setup options page */

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Rocket - Ajustes',
		'menu_title'	=> 'Rocket - Ajustes',
		'menu_slug' 	=> 'rocket-ajustes-generales',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
		'icon_url' 		=> 'dashicons-yes-alt',
		'position' 		=> 4
	));

}
