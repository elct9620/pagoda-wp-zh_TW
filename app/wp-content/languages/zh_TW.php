<?php
/**
 * Provide localized features
 * 1. localized CSS in admin screen
 * @since 3.4
 */

/**
 * Localized action in admin screen initialization
 */
function zh_tw_admin_init(){
	/* Register localized stylesheet. */
	wp_register_style( 'zh-tw-stylesheet', content_url('/languages/zh_TW.css'), array('wp-admin'), '20120531');
}
/**
 * Enqueue localized stylesheet.
 */
function zh_tw_admin_stylesheet(){
	wp_enqueue_style( 'zh-tw-stylesheet' );
}
/**
 * Register with hook 'admin_init'
 */
add_action( 'admin_init', 'zh_tw_admin_init' );
add_action( 'admin_print_styles', 'zh_tw_admin_stylesheet' );
