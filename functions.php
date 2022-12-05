<?php

/**
 * Betheme Child Theme
 *
 * @package Betheme Child Theme
 * @author Muffin group
 * @link https://muffingroup.com
 */

/**
 * Child Theme constants
 * You can change below constants
 */

/**
 * Load Textdomain
 * @deprecated please use BeCustom plugin instead
 */

// define('WHITE_LABEL', false);

/**
 * Load Textdomain
 */

load_child_theme_textdomain('betheme', get_stylesheet_directory() . '/languages');
load_child_theme_textdomain('mfn-opts', get_stylesheet_directory() . '/languages');

/**
 * Enqueue Styles
 */

function mfnch_enqueue_styles()
{

	// enqueue the parent RTL stylesheet

	if (is_rtl()) {
		wp_enqueue_style('mfn-rtl', get_template_directory_uri() . '/rtl.css');
	}

	// enqueue the child stylesheet

	wp_dequeue_style('style');
	wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css');
	wp_enqueue_style('betheme-v2', get_stylesheet_directory_uri() . '/betheme-v2.css');
}
add_action('wp_enqueue_scripts', 'mfnch_enqueue_styles', 101);
