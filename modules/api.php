<?php
function sirp_get_related_posts_id($display_num = '') {
	if ( $display_num == '' ) {
		$option = get_option('sirp_options');
		$display_num = $option['display_num'];
	}
	
	global $simple_related_posts;
	return $simple_related_posts->get_data($display_num);
}