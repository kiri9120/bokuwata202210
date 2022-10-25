<?php

/**
 * Understrap Child Theme functions and definitions
 *
 * @package UnderstrapChild
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;



/**
 * Removes the parent themes stylesheet and scripts from inc/enqueue.php
 */
function understrap_remove_scripts()
{
	wp_dequeue_style('understrap-styles');
	wp_deregister_style('understrap-styles');

	wp_dequeue_script('understrap-scripts');
	wp_deregister_script('understrap-scripts');
}
add_action('wp_enqueue_scripts', 'understrap_remove_scripts', 20);



/**
 * Enqueue our stylesheet and javascript file
 */
function theme_enqueue_styles()
{

	// Get the theme data.
	$the_theme = wp_get_theme();

	$suffix = defined('SCRIPT_DEBUG') && SCRIPT_DEBUG ? '' : '.min';
	// Grab asset urls.
	$theme_styles  = "/css/child-theme{$suffix}.css";
	$theme_scripts = "/js/child-theme{$suffix}.js";

	wp_enqueue_style('child-understrap-styles', get_stylesheet_directory_uri() . $theme_styles, array(), $the_theme->get('Version'));
	wp_enqueue_script('jquery');
	wp_enqueue_script('child-understrap-scripts', get_stylesheet_directory_uri() . $theme_scripts, array(), $the_theme->get('Version'), true);
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');



/**
 * Load the child theme's text domain
 */
function add_child_theme_textdomain()
{
	load_child_theme_textdomain('understrap-child', get_stylesheet_directory() . '/languages');
}
add_action('after_setup_theme', 'add_child_theme_textdomain');



/**
 * Overrides the theme_mod to default to Bootstrap 5
 *
 * This function uses the `theme_mod_{$name}` hook and
 * can be duplicated to override other theme settings.
 *
 * @param string $current_mod The current value of the theme_mod.
 * @return string
 */
function understrap_default_bootstrap_version($current_mod)
{
	return 'bootstrap5';
}
add_filter('theme_mod_understrap_bootstrap_version', 'understrap_default_bootstrap_version', 20);



/**
 * Loads javascript for showing customizer warning dialog.
 */
function understrap_child_customize_controls_js()
{
	wp_enqueue_script(
		'understrap_child_customizer',
		get_stylesheet_directory_uri() . '/js/customizer-controls.js',
		array('customize-preview'),
		'20130508',
		true
	);
}
add_action('customize_controls_enqueue_scripts', 'understrap_child_customize_controls_js');


function add_css_js()
{
	// slick
	wp_enqueue_script('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', "", "1.0.1", false);
	wp_enqueue_style('slick',  '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', "", "1.0.1", false);
	wp_enqueue_style('slick-theme',  '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', array(), '1.0.1', false);

	wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css?' . filemtime(get_stylesheet_directory() . '/style.css'));

	wp_enqueue_style('ceo', get_stylesheet_directory_uri() . '/assets/css/ceo.css?' . filemtime(get_stylesheet_directory() . '/assets/css/ceo.css'));

	wp_enqueue_style('member', get_stylesheet_directory_uri() . '/assets/css/member.css?' . filemtime(get_stylesheet_directory() . '/assets/css/member.css'));

	wp_enqueue_style('recruit', get_stylesheet_directory_uri() . '/assets/css/recruit.css?' . filemtime(get_stylesheet_directory() . '/assets/css/recruit.css'));

	wp_enqueue_script('common-js', get_stylesheet_directory_uri() . '/assets/js/common.js?' . filemtime(get_stylesheet_directory() . '/assets/js/common.js'), "", "1.0.1", false);

	wp_enqueue_style('underlayer', get_stylesheet_directory_uri() . '/assets/css/underlayer.css?' . filemtime(get_stylesheet_directory() . '/assets/css/underlayer.css'));
}
add_action('wp_enqueue_scripts', 'add_css_js');

// アイキャッチ画像を有効にする。
add_theme_support('post-thumbnails');
