<?php
/**
 * Glaser theme functions and definitions.
 *
 * @link    https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Glaser
 */

namespace Glaser\Functions;

/**
 * Set up any theme supports we may need, and starter content.
 */
function on_after_setup_theme() {
	require \get_theme_file_path( '/_playground/starter-content.php' );
	\add_theme_support( 'starter-content', \Glaser\StarterContent\get_starter_content() );
}
\add_action( 'after_setup_theme', __NAMESPACE__ . '\on_after_setup_theme' );

/**
 * Handle addition of any enqueues for the front-end.
 *
 * @return void
 */
function enqueue_block_assets() {
	// Handle adding the theme's style.css for generic non-block-specific styles.
	\wp_enqueue_style(
		'glaser',
		\get_stylesheet_uri(),
		array(),
		(string) filemtime( __DIR__ . '/style.css' )
	);
}
\add_action( 'enqueue_block_assets', __NAMESPACE__ . '\enqueue_block_assets' );

/**
 * Handle addition of any enqueues for the block editor only.
 *
 * @return void
 */
function enqueue_block_editor_assets() {
	$asset_file = require \get_theme_file_path( '/build/block-editor.asset.php' );

	wp_enqueue_script(
		'glaser_block-editor',
		\get_theme_file_uri( 'build/block-editor.js' ),
		$asset_file['dependencies'],
		$asset_file['version'],
		true
	);
}
\add_action( 'enqueue_block_editor_assets', __NAMESPACE__ . '\enqueue_block_editor_assets' );

/**
 * Initialize blocks.
 *
 * @return void
 */
function blocks_init() {
	\wp_register_block_types_from_metadata_collection( __DIR__ . '/build', __DIR__ . '/build/blocks-manifest.php' );
}
\add_action( 'init', __NAMESPACE__ . '\blocks_init' );
