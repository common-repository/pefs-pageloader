<?php

/**
 * @package PageLoader
 * @version 1.1
 */
/*
Plugin Name: PageLoader
Plugin URI: http://http://wordpress.org/plugins/pefs-pageloader/
Description: This plugin meassures the rendertime between the header and footer and then uses the shortcode [pageloader] to show the loadtime.
Author: Peter Frank
Version: 1.0
Author URI: http://twitter.com/pefman
*/


add_action('wp_head', 'start_pageloader');
add_action('wp_footer', 'result_pageloader');

function start_pageloader() {
$start_time = microtime();
}

function result_pageloader() {
$end_time = microtime();
return "Page generated in ".round(($end_time - $start_time), 4)." seconds";
}


//lets add the shortcode
add_shortcode('pageloader', 'result_pageloader');


?>