<?php
/**
 * @package Hello_Molly
 * @version 1.1
 */
/*
Plugin Name: MU TEST PLUGIN 1
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: Mega test plugin 1 (MU)
Author: Matt Mullenweg
Version: 1.6
Author URI: http://ma.tt/
*/

function show_plugin_tplgn_mu_1( $tpl ){
	print_r('PLUGIN 1 IS HERE');
	return $tpl;
}

add_filter( 'template_include', 'show_plugin_tplgn_mu_1' );

?>
