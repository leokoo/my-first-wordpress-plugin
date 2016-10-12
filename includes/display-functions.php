<?php

/*our display functions for outputting information*/

function mfwp_add_content($content) {

	if(is_singular()) {
		$extra_content = '<p class="twitter-message">Follow me on <a href="http://twitter.com/pippinsplugins">Twitter</a></p>';
		$content .= $extra_content;
	}
	return $content;
}
add_filter('the_content', 'mfwp_add_content');