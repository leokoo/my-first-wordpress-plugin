<?php
/*
Plugin Name: My First plugin
Plugin URI: https://pippinsplugins.com/how-to-begin-writing-your-first-wordpress-plugin
Description: This is my first WordPress Plugin
Author: Pippin Williamson
Author URI: https://pippinsplugins.com
Version: 1.0
*/
 
function my_plugin_test() {
	echo 'Hello World'; exit;
}
add_action('admin_head', 'my_plugin_test');