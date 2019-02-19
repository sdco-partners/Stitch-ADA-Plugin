<?php
/*
Plugin Name: Stitch ADA Widget
Description: A simple toggle widget for ADA compliance.
Plugin URI:  https://sdcopartners.com/
Author:      Jeremy McClelland SDCO Partners
Version:     1.0
License:     GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.txt


This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 
2 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
with this program. If not, visit: https://www.gnu.org/licenses/



*/



if ( ! defined( 'ABSPATH' )) {

	exit;
}



function myplugin_action_hook_example() {

	wp_mail( 'email@example.com', 'Subject', 'Message...');
}


add_action( 'init', 'myplugin_action_hook_example' );



function myplugin_filter_hook_example( $content ) {
	$content = $content . '<p>Custom Content...</p>';

	return $content;
}


add_filter ( 'the_content', 'myplugin_filter_hook_example' );