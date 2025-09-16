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
				'post_content' => '<!-- wp:group {"metadata":{"name":"Services Group"},"align":"full","style":{"border":{"width":"1px"},"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="border-width:1px"><!-- wp:heading {"level":3,"align":"full","style":{"border":{"bottom":{"width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}}} -->
<h3 class="wp-block-heading alignfull" style="border-bottom-width:1px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">Services</h3>
<!-- /wp:heading -->

<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:heading {"align":"full","style":{"border":{"bottom":{"width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"fontSize":"x-large"} -->
<h2 class="wp-block-heading alignfull has-x-large-font-size" style="border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)">01 Branding</h2>
<!-- /wp:heading -->

<!-- wp:heading {"align":"full","style":{"border":{"bottom":{"width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"fontSize":"x-large"} -->
<h2 class="wp-block-heading alignfull has-x-large-font-size" style="border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)">02 Motion</h2>
<!-- /wp:heading -->

<!-- wp:heading {"align":"full","style":{"border":{"bottom":{"width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"fontSize":"x-large"} -->
<h2 class="wp-block-heading alignfull has-x-large-font-size" style="border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)">03 UI.UX</h2>
<!-- /wp:heading -->

<!-- wp:heading {"align":"full","style":{"border":{"bottom":{"width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"fontSize":"x-large"} -->
<h2 class="wp-block-heading alignfull has-x-large-font-size" style="border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)">04 Packaging</h2>
<!-- /wp:heading -->

<!-- wp:heading {"align":"full","style":{"border":{"bottom":{"width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"fontSize":"x-large"} -->
<h2 class="wp-block-heading alignfull has-x-large-font-size" style="border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)">05 Video</h2>
<!-- /wp:heading -->

<!-- wp:heading {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"fontSize":"x-large"} -->
<h2 class="wp-block-heading alignfull has-x-large-font-size" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)">06 Coding</h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Works Group"},"align":"full","style":{"border":{"width":"1px"},"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="border-width:1px"><!-- wp:group {"align":"full","style":{"border":{"bottom":{"width":"1px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="border-bottom-width:1px"><!-- wp:heading {"level":1,"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}}} -->
<h1 class="wp-block-heading alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)">Works</h1>
<!-- /wp:heading -->

<!-- wp:columns {"style":{"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"0","bottom":"var:preset|spacing|30"}},"border":{"bottom":{"color":"var:preset|color|primary","width":"1px"},"top":[],"right":[],"left":[]}}} -->
<div class="wp-block-columns" style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:1px;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph {"fontSize":"x-large"} -->
<p class="has-x-large-font-size">Telling your story in a way that makes hearts skip a beat and minds remember.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right","verticalAlignment":"bottom"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-under-arrow-button"} -->
<div class="wp-block-button is-style-under-arrow-button"><a class="wp-block-button__link wp-element-button">View All</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:cover {"overlayColor":"primary","isUserOverlayColor":true,"minHeight":800,"minHeightUnit":"px","align":"full","style":{"border":{"bottom":{"color":"var:preset|color|primary","width":"1px"},"top":[],"right":[],"left":[]}},"layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull" style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:1px;min-height:800px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-arrow-button"} -->
<div class="wp-block-button is-style-arrow-button"><a class="wp-block-button__link wp-element-button"><strong>Client </strong>One</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"customOverlayColor":"#b30000","isUserOverlayColor":true,"minHeight":800,"align":"full","style":{"border":{"bottom":{"color":"var:preset|color|primary","width":"1px"},"top":[],"right":[],"left":[]}},"layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull" style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:1px;min-height:800px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim" style="background-color:#b30000"></span><div class="wp-block-cover__inner-container"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-arrow-button"} -->
<div class="wp-block-button is-style-arrow-button"><a class="wp-block-button__link wp-element-button"><strong>Client </strong> Two</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"customOverlayColor":"#04a500","isUserOverlayColor":true,"minHeight":800,"align":"full","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull" style="min-height:800px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim" style="background-color:#04a500"></span><div class="wp-block-cover__inner-container"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-arrow-button"} -->
<div class="wp-block-button is-style-arrow-button"><a class="wp-block-button__link wp-element-button"><strong>Client </strong>Three</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Kind Words Group"},"align":"full","style":{"border":{"width":"1px"},"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="border-width:1px"><!-- wp:group {"align":"full","style":{"border":{"bottom":{"width":"1px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="border-bottom-width:1px"><!-- wp:heading {"level":1,"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}}} -->
<h1 class="wp-block-heading alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)">Kind Words</h1>
<!-- /wp:heading -->

<!-- wp:columns {"style":{"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"0","bottom":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns" style="padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph {"fontSize":"x-large"} -->
<p class="has-x-large-font-size">Helping brands achieve their goals and make a change is our daily motive at Kroma</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:columns {"metadata":{"name":"Citation One"},"style":{"border":{"bottom":{"width":"1px"}}}} -->
<div class="wp-block-columns" style="border-bottom-width:1px"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:cover {"overlayColor":"primary","isUserOverlayColor":true,"minHeight":800,"layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="min-height:800px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"33.33%","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);flex-basis:33.33%"><!-- wp:heading -->
<h2 class="wp-block-heading">Krate</h2>
<!-- /wp:heading -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph {"fontSize":"x-large"} -->
<p class="has-x-large-font-size">Kroma helped our brand flourish in just one year. Their creative vision and excellent team helped us grow our business in ways we couldn’t imagine.</p>
<!-- /wp:paragraph --><cite>Sarah Conor,<br>Founder - Kozmo</cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"metadata":{"name":"Citation Two"}} -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"33.33%","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);flex-basis:33.33%"><!-- wp:heading -->
<h2 class="wp-block-heading">Krate</h2>
<!-- /wp:heading -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph {"fontSize":"x-large"} -->
<p class="has-x-large-font-size">Kroma helped our brand flourish in just one year. Their creative vision and excellent team helped us grow our business in ways we couldn’t imagine.</p>
<!-- /wp:paragraph --><cite>Sarah Conor,<br>Founder - Kozmo</cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:cover {"customOverlayColor":"#3032b0","isUserOverlayColor":true,"minHeight":800,"layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="min-height:800px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim" style="background-color:#3032b0"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->',
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
				'file'       => '_playground/assets/wapuu.png',
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
