<?php

/**
 * Custom Search
 *
 * @package rocket_base
 */


/* ------------- Show only posts on Search */
function customize_search($query)
{
	if (!is_admin() && $query->is_main_query() && $query->is_search()) {
		$query->set('post_type', array('post'));
	}
}
add_action('pre_get_posts', 'customize_search');
