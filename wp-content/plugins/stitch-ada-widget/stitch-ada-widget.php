<?php
/*
Plugin Name: Stitch ADA Widget
Description: A simple toggle widget for ADA compliance.
Plugin URI:  https://sdcopartners.com/
Author:      Jeremy McClelland SDCO Partners
Version:     1.0
Text Domain:  stitch-ada-widget
Domain Path:  /languages
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





// load text domain
function myplugin_load_textdomain() {
	
	load_plugin_textdomain( 'stitch-ada-widget', false, plugin_dir_path( __FILE__ ) . 'languages/' );
	
}
add_action( 'plugins_loaded', 'myplugin_load_textdomain' );




// if admin area//////

if ( is_admin() ) {

	// include dependencies
	require_once plugin_dir_path( __FILE__ ) . 'admin/admin-menu.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/settings-page.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/settings-register.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/settings-callbacks.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/settings-validate.php';


}


require_once plugin_dir_path( __FILE__ ) . 'includes/core-functions.php';


// default plugin options
function myplugin_options_default() {

	return array(
		'custom_url'     => esc_html__( 'https://wordpress.org/', 'stitch-ada-widget' ),
		'custom_title'   => 'Powered by WordPress',
		'custom_style'   => 'disable',
		'custom_message' => '<p class="custom-message">My custom message</p>',
		'custom_footer'  => 'Special message for users',
		'custom_toolbar' => false,
		'custom_scheme'  => 'default',
	);

}









function your_function() {

    echo '

    	<div id="stitch-ada-widget">


	    	<div class="stitch-ada-flex-wrapper">

	    		<div id="stitch-ada-desaturate" class="stitch-ada-toggle">
	    			Desaturate
	    		</div>

	    		<div id="stitch-ada-contrast-1" class="stitch-ada-toggle">
	    			Contrast +
	    		</div>

	    		<div id="stitch-ada-highlightlinks" class="stitch-ada-toggle">
	    			Highlight Links
	    		</div>


	    		<div id="stitch-ada-legible" class="stitch-ada-toggle">
	    			Legible Fonts
	    		</div>

	    	</div>


	    	<div class="stitch-ada-font-size-controls">
	    		<p>Font Size</p>
	    		<span id="stitch-ada-decrease-font">Decrease</span>
	    		<span id="stitch-ada-increase-font">Increase</span>


	    	</div>



    	</div>



    ';
}


add_action('wp_footer', 'your_function');


