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

	/**
	 * This is not yet a core standard, but the Performance Team is working on it!
	 *
	 */
	\add_theme_support(
		'view-transitions',
		array(
			'default-animation' => 'fade',
			'post-selector'     => '',
			'global-transition-names' => array(
				'.wp-block-template-part.header' => 'header',
				'.wp-block-template-part.footer' => 'footer',
			),
			'post-transition-names' => array(
				'.wp-block-post-title'   => 'post-title',
				'.wp-post-image'         => 'post-thumbnail',
				'.wp-block-post-content' => 'post-content',
			),
		)
	);
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

	$asset_file = require \get_theme_file_path( '/build/button-variation-light-dark.asset.php' );
	wp_enqueue_script(
		'button-variation-light-dark',
		\get_theme_file_uri( 'build/button-variation-light-dark.js' ),
		$asset_file['dependencies'],
		$asset_file['version'],
		true
	);

	$asset_file = require \get_theme_file_path( '/build/block-variation-badge.asset.php' );
	wp_enqueue_script(
		'block-variation-badge',
		\get_theme_file_uri( 'build/block-variation-badge.js' ),
		$asset_file['dependencies'],
		$asset_file['version'],
		true
	);
}
\add_action( 'enqueue_block_editor_assets', __NAMESPACE__ . '\enqueue_block_editor_assets' );

/**
 * Handle addition of any enqueues for the front-end.
 *
 * @return void
 */
function wp_enqueue_scripts() {
	$asset_file = require \get_theme_file_path( '/build/front-end.asset.php' );

	wp_enqueue_script(
		'glaser_front-end',
		\get_theme_file_uri( 'build/front-end.js' ),
		$asset_file['dependencies'],
		$asset_file['version'],
		true
	);
}
\add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\wp_enqueue_scripts' );

/**
 * Initialize blocks.
 *
 * @return void
 */
function blocks_init() {
	\wp_register_block_types_from_metadata_collection( __DIR__ . '/build', __DIR__ . '/build/blocks-manifest.php' );
}
\add_action( 'init', __NAMESPACE__ . '\blocks_init' );


function set_color_scheme() {
	?>
	<script id="glaser-set-color-scheme">
	const colorScheme = localStorage.getItem('colorScheme');
	if ( colorScheme ) {
		document.documentElement.dataset.colorScheme = scheme;
	}
	</script>
	<?php
}
add_action( 'wp_head', __NAMESPACE__ . '\set_color_scheme' );


/**
 * Add in our custom attributes to supported blocks.
 */
function register_block_type_args( $args, $block_type ) {
	if ( in_array( $block_type, array( 'core/verse' ) ) ) {
		if ( ! isset( $args['attributes'] ) ) {
            $args['attributes'] = array();
        }
		$args['attributes']['label'] = array(
			'type'    => 'string',
			'default' => __( 'Badge Text Here', 'glaser' ),
		);
		$args['attributes']['qty'] = array(
			'type'    => 'number',
			'default' => 2,
		);
		$args['attributes']['spacer'] = array(
            'type'    => 'string',
			'default' => '·',
        );
		$args['attributes']['width'] = array(
            'type'    => 'string',
			'default' => '100px',
        );
	}
	return $args;
}
add_filter( 'register_block_type_args', __NAMESPACE__ . '\register_block_type_args', 10, 2 );