<?php

/*our display functions for outputting information*/

function mfwp_add_content($content) {

	if(is_single()) {
		$extra_content = ' This is my extra content';
		$content .= $extra_content;
	}
	return $content;
}
add_filter('the_content', 'mfwp_add_content');