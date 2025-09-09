<?php
/**
 * Glaser Starter Content
 *
 * @link https://make.wordpress.org/core/2016/11/30/starter-content-for-themes-in-4-7/
 *
 * @package Glaser
 */

namespace Glaser\StarterContent;

/**
 * Returns the array of starter content for the theme.
 *
 * Passes it through the `twombly_starter_content` filter before returning.
 *
 * @return array A filtered array of args for the starter_content.
 */
function get_starter_content() {
	// Define and register starter content to showcase the theme on new sites.
	$starter_content = array(

		'posts'     => array(
			'front' => array(
				'post_type'    => 'page',
				'post_title'   => esc_html_x( 'Front Page', 'Theme starter content', 'glaser' ),
				'post_content' => '<!-- wp:heading -->
<h2 class="wp-block-heading">I am a heading!</h2>
<!-- /wp:heading -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam facilisis metus sit amet consequat dignissim. Etiam pretium nisi orci, quis congue enim mattis placerat. Integer vulputate lectus sit amet justo fringilla, non pretium justo condimentum. Aenean tempor ut nibh eget pellentesque. Mauris at condimentum arcu, ac gravida nulla. Etiam iaculis volutpat facilisis. Aliquam imperdiet vitae nulla vel fringilla.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph -->
<p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur quis sapien consequat, condimentum diam sit amet, lobortis quam. Donec tempor odio et turpis pulvinar, eget ornare justo bibendum. Maecenas ipsum nulla, semper a neque sit amet, finibus scelerisque ex. Sed fermentum, augue nec pretium semper, mi eros hendrerit nisi, vitae ultrices nibh lectus nec ex. Etiam turpis sem, tincidunt vel vehicula ac, ornare vitae magna. Aenean sollicitudin mi vitae lorem ultrices malesuada. Aliquam at massa et massa ornare sollicitudin. Maecenas porta diam sed odio bibendum, in fringilla sapien consectetur. Donec at convallis ante, quis pharetra quam. Sed vitae ante ut nulla scelerisque tempus. Nam at diam facilisis nibh eleifend ornare. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->',
			),
			'about',
			'contact',
			'blog',
			'news',
			'services' => array(
				'post_type' => 'page',
				'post_title' => esc_html_x( 'Services', 'Theme starter content', 'glaser' ),
			),
			'pricing' => array(
				'post_type' => 'page',
				'post_title' => esc_html_x( 'Pricing', 'Theme starter content', 'glaser' ),
			),
			'terms' => array(
				'post_type' => 'page',
				'post_title' => esc_html_x( 'Terms and Conditions', 'Theme starter content', 'glaser' ),
			),
			'works' => array(
				'post_type' => 'page',
				'post_title' => esc_html_x( 'Our Works', 'Theme starter content', 'glaser' ),
			),
			'sample' => array(
				'post_type' => 'page',
				'post_title' => esc_html_x( 'Sample Page', 'Theme starter content', 'glaser' ),
			),
		),

		'attachments' => array(
			'wapuu' => array(
				'post_title' => esc_html_x( 'Wapuu', 'Theme starter content', 'glaser' ),
				'file'       => '_playground/wapuu.png',
			),
			'logo-1' => array(
				'post_title' => esc_html_x( 'Logo 1', 'Theme starter content', 'glaser' ),
				'file'       => '_playground/assets/logo-1.png'
			),
			'logo-2' => array(
				'post_title' => esc_html_x( 'Logo 2', 'Theme starter content', 'glaser' ),
				'file'       => '_playground/assets/logo-2.png'
			),
			'logo-3' => array(
				'post_title' => esc_html_x( 'Logo 3', 'Theme starter content', 'glaser' ),
				'file'       => '_playground/assets/logo-3.png'
			),
			'logo-4' => array(
				'post_title' => esc_html_x( 'Logo 4', 'Theme starter content', 'glaser' ),
				'file'       => '_playground/assets/logo-4.png'
			),
			'logo-5' => array(
				'post_title' => esc_html_x( 'Logo 5', 'Theme starter content', 'glaser' ),
				'file'       => '_playground/assets/logo-5.png'
			),
			'logo-6' => array(
				'post_title' => esc_html_x( 'Logo 6', 'Theme starter content', 'glaser' ),
				'file'       => '_playground/assets/logo-6.png'
			),
			'logo-7' => array(
				'post_title' => esc_html_x( 'Logo 7', 'Theme starter content', 'glaser' ),
				'file'       => '_playground/assets/logo-7.png'
			),
			'logo-8' => array(
				'post_title' => esc_html_x( 'Logo 8', 'Theme starter content', 'glaser' ),
				'file'       => '_playground/assets/logo-8.png'
			)
		),

		// Default to a static front page and assign the front and posts pages.
		'options'   => array(
			'show_on_front'   => 'page',
			'page_on_front'   => '{{front}}',
			'page_for_posts'  => '{{blog}}',
			'site_icon'       => '{{wapuu}}',
			'blogname'        => esc_html_x( 'Glaser', 'Theme starter content', 'glaser' ),
			'blogdescription' => esc_html_x( 'Another fine Iconick Theme', 'Theme starter content', 'glaser' ),
		),

		// Set up nav menus for each of the two areas registered in the theme.
		'nav_menus' => array(
			// Assign a menu to the "primary" location.
			'primary' => array(
				'name'  => esc_html_x( 'Primary menu', 'Theme starter content', 'glaser' ),
				'items' => array(
					'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
					'page_services',
					'page_works',
					'page_about',
					'page_pricing',
					'page_contact',
					'page_blog',
				),
			),

			// Assign a menu to the "footer" location.
			'footer-pages'  => array(
				'name'  => esc_html__( 'Footer Pages Menu', 'glaser' ),
				'items' => array(
					'link_home',
					'page_sample' => array(
						'type' => 'post_type',
						'object' => 'page',
						'object_id' => '{{sample}}'
					),
					'link_github' => array(
						'title' => esc_html_x( 'Glaser', 'Theme starter content', 'glaser' ),
						'url'   => 'https://github.com/IconickThemes/glaser/',
					),
				),
			),
			'footer-product'  => array(
				'name'  => esc_html__( 'Footer Product Menu', 'glaser' ),
				'items' => array(
					'page_services' => array(
						'type' => 'post_type',
						'object' => 'page',
						'object_id' => '{{services}}'
					),
					'page_about',
					'page_contact',
				),
			),
			'footer-information'  => array(
				'name'  => esc_html__( 'Footer Information Menu', 'glaser' ),
				'items' => array(
					'page_terms' => array(
						'type' => 'post_type',
						'object' => 'page',
						'object_id' => '{{terms}}'
					),
					'page_blog',
				),
			),
			'footer-support'  => array(
				'name'  => esc_html__( 'Footer Support Menu', 'glaser' ),
				'items' => array(
					'page_services' => array(
						'type' => 'post_type',
						'object' => 'page',
						'object_id' => '{{services}}'
					),
					'page_pricing' => array(
						'type' => 'post_type',
						'object' => 'page',
						'object_id' => '{{pricing}}'
					),
					'link_github' => array(
						'title' => esc_html_x( 'Glaser Theme', 'Theme starter content', 'glaser' ),
						'url'   => 'https://github.com/IconickThemes/glaser/',
					),
				),
			),
		),
	);

	/**
	 * Filters the array of starter content.
	 *
	 * @param array $starter_content Array of starter content.
	 */
	return apply_filters( 'glaser_starter_content', $starter_content );
}
