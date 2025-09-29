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
 * Passes it through the `glaser_starter_content` filter before returning.
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
				'post_content' => '<!-- wp:heading -->
<h2 class="wp-block-heading">What We Do – Your Digital Partner in Design &amp; Growth</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>At&nbsp;<strong>[Studio Name]</strong>, we turn ideas into immersive online experiences.<br>From a crisp landing page to a fully‑fledged e‑commerce platform, our team blends design, technology and strategy to help you stand out, attract the right audience, and convert clicks into customers.</p>
<!-- /wp:paragraph -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">✨ Web Design &amp; Development</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><strong>Purpose‑built, pixel‑perfect sites that perform.</strong></p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Custom, responsive design tailored to your brand identity</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Fast, secure front‑end optimized for speed (Lighthouse 90+ scores)</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Accessibility‑first (WCAG 2.1 AA) to reach every user</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Content‑ready CMS (WordPress, Sanity, Webflow) for painless updates</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p><em>“Our new site increased traffic by 45% and doubled our conversion rate.”</em>&nbsp;–&nbsp;<em>Happy Client</em></p>
<!-- /wp:paragraph --></blockquote>
<!-- /wp:quote -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">🎨 UI/UX Strategy</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><strong>Design that feels right.</strong></p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>User‑centric research &amp; personas</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Wireframes, prototypes &amp; usability testing</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>UI kits &amp; component libraries that scale</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>End‑to‑end design system creation</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">🛒 E‑Commerce Solutions</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><strong>Sell online without the hassle.</strong></p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Shopify, BigCommerce, WooCommerce &amp; custom storefronts</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mobile‑first checkout flows and cart recovery</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Integration with payment gateways, ERP &amp; fulfillment</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>SEO‑friendly product pages &amp; schema markup</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">🔍 SEO &amp; Content Strategy</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><strong>Be found by the people who matter.</strong></p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Technical SEO audit &amp; site architecture overhaul</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Keyword research, on‑page optimization &amp; content calendar</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Local SEO &amp; Google Business Profile setup</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Analytics &amp; performance dashboards</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">📱 Mobile Apps &amp; Progressive Web Apps</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><strong>Engage users wherever they are.</strong></p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Native (iOS/Android) or hybrid (React Native, Flutter) app development</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Progressive Web Apps (PWAs) for instant‑access mobile web</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Offline functionality, push notifications, and real‑time sync</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">💡 Brand &amp; Visual Identity</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><strong>Your story, visualised.</strong></p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Logo &amp; brand guidelines</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Packaging, print &amp; digital collateral</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Brand strategy workshops &amp; positioning</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Motion graphics &amp; explainer videos</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">🔧 Maintenance &amp; Support</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><strong>Keep your digital presence humming.</strong></p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Regular updates, security patches &amp; backups</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Performance monitoring &amp; incident response</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Analytics reporting &amp; growth recommendations</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Why Choose Us?</h2>
<!-- /wp:heading -->

<!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><thead><tr><th>✅ Proven Results</th><th>✅ Collaborative Process</th><th>✅ Long‑Term Partnership</th></tr></thead><tbody><tr><td>100+ award‑winning projects</td><td>Agile sprints, transparent communication</td><td>Dedicated account managers</td></tr><tr><td>Dedicated design &amp; tech teams</td><td>24/7 support &amp; rapid iterations</td><td>Ongoing strategy &amp; optimization</td></tr><tr><td>ROI‑driven approach</td><td>Data‑backed decisions</td><td>Continuous improvement</td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Let’s Build Something Great Together</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Ready to elevate your brand online?<br><strong>Book a free discovery call</strong> or <strong>send us a brief</strong> and we’ll craft a custom proposal that fits your vision and budget.</p>
<!-- /wp:paragraph -->',
			),
			'pricing' => array(
				'post_type' => 'page',
				'post_title' => esc_html_x( '📊 Transparent Pricing – Get the Digital Edge You Deserve', 'Theme starter content', 'glaser' ),
				'post_content' => '<!-- wp:paragraph -->
<p>At&nbsp;<strong>[Studio Name]</strong>, we turn ideas into immersive online experiences.<br>From a crisp landing page to a fully‑fledged e‑commerce platform, our team blends design, technology and strategy to help you stand out, attract the right audience, and convert clicks into customers.</p>
<!-- /wp:paragraph -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">✨ Web Design &amp; Development</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><strong>Purpose‑built, pixel‑perfect sites that perform.</strong></p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Custom, responsive design tailored to your brand identity</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Fast, secure front‑end optimized for speed (Lighthouse 90+ scores)</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Accessibility‑first (WCAG 2.1 AA) to reach every user</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Content‑ready CMS (WordPress, Sanity, Webflow) for painless updates</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p><em>“Our new site increased traffic by 45% and doubled our conversion rate.”</em>&nbsp;–&nbsp;<em>Happy Client</em></p>
<!-- /wp:paragraph --></blockquote>
<!-- /wp:quote -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">🎨 UI/UX Strategy</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><strong>Design that feels right.</strong></p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>User‑centric research &amp; personas</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Wireframes, prototypes &amp; usability testing</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>UI kits &amp; component libraries that scale</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>End‑to‑end design system creation</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">🛒 E‑Commerce Solutions</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><strong>Sell online without the hassle.</strong></p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Shopify, BigCommerce, WooCommerce &amp; custom storefronts</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Mobile‑first checkout flows and cart recovery</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Integration with payment gateways, ERP &amp; fulfillment</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>SEO‑friendly product pages &amp; schema markup</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">🔍 SEO &amp; Content Strategy</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><strong>Be found by the people who matter.</strong></p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Technical SEO audit &amp; site architecture overhaul</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Keyword research, on‑page optimization &amp; content calendar</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Local SEO &amp; Google Business Profile setup</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Analytics &amp; performance dashboards</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">📱 Mobile Apps &amp; Progressive Web Apps</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><strong>Engage users wherever they are.</strong></p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Native (iOS/Android) or hybrid (React Native, Flutter) app development</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Progressive Web Apps (PWAs) for instant‑access mobile web</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Offline functionality, push notifications, and real‑time sync</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">💡 Brand &amp; Visual Identity</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><strong>Your story, visualised.</strong></p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Logo &amp; brand guidelines</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Packaging, print &amp; digital collateral</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Brand strategy workshops &amp; positioning</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Motion graphics &amp; explainer videos</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">🔧 Maintenance &amp; Support</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><strong>Keep your digital presence humming.</strong></p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Regular updates, security patches &amp; backups</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Performance monitoring &amp; incident response</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Analytics reporting &amp; growth recommendations</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Why Choose Us?</h2>
<!-- /wp:heading -->

<!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><thead><tr><th>✅ Proven Results</th><th>✅ Collaborative Process</th><th>✅ Long‑Term Partnership</th></tr></thead><tbody><tr><td>100+ award‑winning projects</td><td>Agile sprints, transparent communication</td><td>Dedicated account managers</td></tr><tr><td>Dedicated design &amp; tech teams</td><td>24/7 support &amp; rapid iterations</td><td>Ongoing strategy &amp; optimization</td></tr><tr><td>ROI‑driven approach</td><td>Data‑backed decisions</td><td>Continuous improvement</td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Let’s Build Something Great Together</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Ready to elevate your brand online?<br><strong>Book a free discovery call</strong>&nbsp;or&nbsp;<strong>send us a brief</strong>&nbsp;and we’ll craft a custom proposal that fits your vision and budget.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>[<strong>Schedule a Call</strong>] | [<strong>Contact Us</strong>] | [<strong>See Our Portfolio</strong>]</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><em>Studio Name – Where Design Meets Impact</em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Write a pricing page for the same internet design studioedit</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Thought for 3.1 seconds</h3>
<!-- /wp:heading -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">📊 Transparent Pricing – Get the Digital Edge You Deserve</h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>At&nbsp;<strong>[Studio Name]</strong>&nbsp;we believe that great design shouldn’t come with hidden costs. Below is a clear, value‑driven pricing structure that lets you pick the right package for your stage of growth. All prices are&nbsp;<strong>USD</strong>&nbsp;and include everything you need to launch, grow, and thrive online.</p>
<!-- /wp:paragraph -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p><strong>Tip:</strong>&nbsp;If your project has unique needs (e.g., multiple locales, complex e‑commerce, custom integrations), drop us a line and we’ll craft a tailor‑made quote.</p>
<!-- /wp:paragraph --></blockquote>
<!-- /wp:quote -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:heading -->
<h2 class="wp-block-heading">🚀 Starter – Perfect for New Brands &amp; Personal Projects</h2>
<!-- /wp:heading -->

<!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><thead><tr><th>Feature</th><th>Details</th></tr></thead><tbody><tr><td><strong>Site Size</strong></td><td>Up to 6 pages (Home, About, Services, Blog, Contact, Privacy)</td></tr><tr><td><strong>Design</strong></td><td>Custom responsive UI (desktop, tablet, mobile)</td></tr><tr><td><strong>CMS</strong></td><td>WordPress / Webflow – easy content editing</td></tr><tr><td><strong>SEO Basics</strong></td><td>On‑page tags, sitemap, robots.txt</td></tr><tr><td><strong>Speed</strong></td><td>Core Web Vitals ≥ 90</td></tr><tr><td><strong>Analytics</strong></td><td>Google Analytics &amp; heatmap setup</td></tr><tr><td><strong>Support</strong></td><td>4 weeks post‑launch hand‑off + 2 weeks of bug fixes</td></tr><tr><td><strong>Delivery Time</strong></td><td>4–6 weeks from kickoff</td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:paragraph -->
<p><strong>💲 $1,800 – $2,200</strong>&nbsp;(flat fee, no monthly charges)</p>
<!-- /wp:paragraph -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:heading -->
<h2 class="wp-block-heading">📈 Growth – For Growing Businesses &amp; Small Start‑ups</h2>
<!-- /wp:heading -->

<!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><thead><tr><th>Feature</th><th>Details</th></tr></thead><tbody><tr><td><strong>Site Size</strong></td><td>Up to 12 pages + blog (≈30 posts/year)</td></tr><tr><td><strong>Design</strong></td><td>Bespoke UI/UX, custom illustrations, brand kit</td></tr><tr><td><strong>CMS</strong></td><td>WordPress / Sanity – full admin dashboard</td></tr><tr><td><strong>SEO</strong></td><td>Advanced on‑page, keyword research, local SEO</td></tr><tr><td><strong>Speed</strong></td><td>Lighthouse score 90+</td></tr><tr><td><strong>Analytics</strong></td><td>Google Analytics 360, conversion funnel</td></tr><tr><td><strong>Marketing</strong></td><td>3 months of email nurture workflow &amp; landing pages</td></tr><tr><td><strong>Support</strong></td><td>8 weeks post‑launch hand‑off + 4 weeks of bug fixes</td></tr><tr><td><strong>Delivery Time</strong></td><td>8–10 weeks from kickoff</td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:paragraph -->
<p><strong>💲 $3,200 – $4,500</strong>&nbsp;(flat fee)</p>
<!-- /wp:paragraph -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:heading -->
<h2 class="wp-block-heading">🏢 Enterprise – Enterprise‑Grade, Scalable Solutions</h2>
<!-- /wp:heading -->

<!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><thead><tr><th>Feature</th><th>Details</th></tr></thead><tbody><tr><td><strong>Site Size</strong></td><td>Unlimited pages, sub‑domains, multi‑language</td></tr><tr><td><strong>Design</strong></td><td>Premium UI/UX, design system, motion graphics</td></tr><tr><td><strong>CMS</strong></td><td>Headless CMS (GraphQL) + custom API layer</td></tr><tr><td><strong>SEO</strong></td><td>International SEO, schema markup, video SEO</td></tr><tr><td><strong>Speed</strong></td><td>Lighthouse 95+</td></tr><tr><td><strong>Analytics</strong></td><td>Custom dashboards, event tracking, predictive analytics</td></tr><tr><td><strong>Marketing</strong></td><td>Full funnel strategy: SEO, PPC, content marketing</td></tr><tr><td><strong>E‑Commerce</strong></td><td>Shopify Plus / Magento 2</td></tr><tr><td><strong>Support</strong></td><td>Dedicated project manager + 12 weeks bug‑fix period</td></tr><tr><td><strong>Delivery Time</strong></td><td>12–16 weeks from kickoff</td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:paragraph -->
<p><strong>💲 Starting at $8,000</strong>&nbsp;– Contact for a detailed proposal.</p>
<!-- /wp:paragraph -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p><strong>Add‑Ons</strong><br>• API integrations (CRM, ERP, third‑party services) – $500–$2,000<br>• Advanced security &amp; compliance audit – $1,200<br>• Ongoing SEO maintenance – $800/month</p>
<!-- /wp:paragraph --></blockquote>
<!-- /wp:quote -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:heading -->
<h2 class="wp-block-heading">✨ Custom Projects – When Your Vision Requires a Tailor‑Made Approach</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Whether you’re a non‑profit, a high‑traffic media site, or a global brand, we’ll craft a bespoke solution that fits your exact needs.<br><strong>We’ll start with a free Discovery Call</strong>&nbsp;to understand your goals, and then provide a transparent, itemized quote.</p>
<!-- /wp:paragraph -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:heading -->
<h2 class="wp-block-heading">📅 Project Phases (All Packages)</h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered":true} -->
<ol class="wp-block-list"><!-- wp:list-item -->
<li><strong>Discovery &amp; Strategy</strong> – 1‑2 weeks</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Design &amp; Wireframes</strong> – 2‑3 weeks</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Development &amp; QA</strong> – 3‑6 weeks</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Launch &amp; Training</strong> – 1 week</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Post‑Launch Support</strong> – as per package</li>
<!-- /wp:list-item --></ol>
<!-- /wp:list -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:heading -->
<h2 class="wp-block-heading">🛠️ Add‑Ons &amp; Recurring Services</h2>
<!-- /wp:heading -->

<!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><thead><tr><th>Service</th><th>Price</th><th>Description</th></tr></thead><tbody><tr><td><strong>Monthly Maintenance</strong></td><td>$350/month</td><td>Updates, backups, performance monitoring</td></tr><tr><td><strong>SEO Optimisation (ongoing)</strong></td><td>$500/month</td><td>Content strategy, link building, analytics</td></tr><tr><td><strong>Content Creation</strong></td><td>$150/Article</td><td>Blog posts, landing pages, product copy</td></tr><tr><td><strong>PPC Management</strong></td><td>10% of ad spend</td><td>Campaign setup, monitoring, optimisation</td></tr><tr><td><strong>Custom App Development</strong></td><td>$5,000+</td><td>iOS/Android, PWAs, internal tools</td></tr><tr><td><strong>Brand Refresh</strong></td><td>$2,500</td><td>Logo, brand guide, collateral</td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:paragraph -->
<p><em>All add‑ons can be combined with any package.</em></p>
<!-- /wp:paragraph -->',
			),
			'terms' => array(
				'post_type' => 'page',
				'post_title' => esc_html_x( 'Terms and Conditions', 'Theme starter content', 'glaser' ),
				'post_content' => '<!-- wp:paragraph -->
<p><em>Terms &amp; Conditions for Our Website</em></p>
<!-- /wp:paragraph -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p>“If you’re reading this, you’re probably one of the clever, curious, or downright cheeky folks who want to explore our site. We’ve put together a snazzy little guide to make sure everyone’s on the same page—so you can enjoy the creative goodness without any headaches. Dive in!*</p>
<!-- /wp:paragraph --></blockquote>
<!-- /wp:quote -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:heading -->
<h2 class="wp-block-heading">1. The Basics</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><strong>What’s this all about?</strong><br>These rules are the “official handbook” for anyone who clicks, scrolls, or simply loves a good meme on our website. By entering or using our site, you agree to play by these rules—no hard‑core contracts, just good vibes.</p>
<!-- /wp:paragraph -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:heading -->
<h2 class="wp-block-heading">2. What You Can (and Can’t) Do</h2>
<!-- /wp:heading -->

<!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><thead><tr><th>✅&nbsp;<em>Allowed</em></th><th>❌&nbsp;<em>Not Allowed</em></th></tr></thead><tbody><tr><td>Browse our portfolio, read blog posts, and drop a comment (within reason)</td><td>Copy or redistribute our designs, content, or images without explicit permission</td></tr><tr><td>Use the contact form to ask questions, request a quote, or simply say hi</td><td>Use automated bots or scripts to spam or scrape our site</td></tr><tr><td>Share our public links on social media (with credit)</td><td>Tamper with our code or hacking attempts</td></tr><tr><td>Play with our interactive demos (as intended)</td><td>Post defamatory, harassing, or illegal content in comments</td></tr><tr><td>Keep the good vibes alive (respectful and friendly communication)</td><td>Spread hate, violence, or extremist content</td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:paragraph -->
<p><em>If you’re unsure whether something is okay, reach out. We’re happy to clarify!</em></p>
<!-- /wp:paragraph -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:heading -->
<h2 class="wp-block-heading">3. Copyright &amp; Fair Use</h2>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>All text, graphics, photos, and “magical” design elements belong to <strong>[Studio Name]</strong>—unless we say otherwise.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Feel free to share our public content with the <em>“Credit: [Studio Name]”</em> badge.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Do not copy our design assets for your own portfolio unless we explicitly give you a license.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:heading -->
<h2 class="wp-block-heading">4. Third‑Party Links &amp; Content</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Our site may sometimes link to external sites or incorporate content from other creators. Those links are&nbsp;<em>just links</em>—we’re not responsible for what you find beyond our domain. Use them at your own risk, and remember: we’re not affiliated with them.</p>
<!-- /wp:paragraph -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:heading -->
<h2 class="wp-block-heading">5. Privacy &amp; “Who’s Watching?”</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>We respect your privacy. Check our&nbsp;<a href="http://127.0.0.1:49551/c/01995398-cf4d-7f32-932c-b089e778949f#">Privacy Policy</a>&nbsp;for a detailed look at how we handle cookies, analytics, and your personal data. In short: we don’t sell your info, but we do love seeing how many people visit our gallery.</p>
<!-- /wp:paragraph -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:heading -->
<h2 class="wp-block-heading">6. Disclaimer of Warranties</h2>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>We promise our site will be <em>fun</em> and <em>informative</em>, but we can’t guarantee 100% uptime (unless you hire us to build your own site, in which case, you’re on your own!).</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>We’re not experts in legal, medical, or financial advice—our designs are. If you need professional guidance, please consult the appropriate professional.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:heading -->
<h2 class="wp-block-heading">7. Limitation of Liability</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>If something goes wrong while you’re browsing (e.g., a broken link, a typo), it’s not our fault. We’re not liable for any indirect, incidental, or "you lost a life in a video game" damages.</p>
<!-- /wp:paragraph -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:heading -->
<h2 class="wp-block-heading">8. Your Conduct</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Keep it clean, keep it respectful, keep it fun. We reserve the right to block or delete comments or user accounts that are harassing, hateful, or otherwise violate these terms.</p>
<!-- /wp:paragraph -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:heading -->
<h2 class="wp-block-heading">9. Changes to These Terms</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>We may tweak these rules from time to time (think of it as a software update). Major changes will be posted with a notice (“We’ve updated our Terms—take a look!”). By continuing to use the site after changes, you’re agreeing to the new terms.</p>
<!-- /wp:paragraph -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:heading -->
<h2 class="wp-block-heading">10. Contact Us</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Got a question about these terms, or just want to chat about a project? Hit us up at:</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>Email:</strong>&nbsp;hello@[studio‑name].com<br><strong>Phone:</strong>&nbsp;(555) 123‑4567</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Or use the contact form on our site—no need for a carrier pigeon.</p>
<!-- /wp:paragraph -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">🎉 Thanks for Reading!</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Now go on, explore our creative space, get inspired, and feel free to reach out. Remember: great design starts with great communication—and a bit of fun!</p>
<!-- /wp:paragraph -->',
			),
			'works' => array(
				'post_type' => 'page',
				'post_title' => esc_html_x( 'Our Works', 'Theme starter content', 'glaser' ),
				'post_content' => '<!-- wp:paragraph -->
<p><strong>Six standout websites we built, plus the story behind each success</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>At&nbsp;<strong>[Studio Name]</strong>, we don’t just hand over code – we hand over a complete experience. Below are six of our favorite projects, each one a little “case study” that shows how we turned a brief into a measurable win.</p>
<!-- /wp:paragraph -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:heading -->
<h2 class="wp-block-heading">1.&nbsp;<strong>Glowing Green</strong>&nbsp;– Sustainable Lifestyle Marketplace</h2>
<!-- /wp:heading -->

<!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><thead><tr><th>What</th><th>Details</th></tr></thead><tbody><tr><td><strong>Industry</strong></td><td>E‑commerce / Eco‑products</td></tr><tr><td><strong>Goal</strong></td><td>Create a clean, fast storefront that tells a story and boosts conversion.</td></tr><tr><td><strong>Challenge</strong></td><td>Existing platform was slow, cluttered, and lacked trust signals.</td></tr><tr><td><strong>Solution</strong></td><td>• Built a Shopify‑Plus site from scratch.&nbsp;<br>• Custom Shopify theme with modular “Story” sections and product‑level micro‑animations.&nbsp;<br>• Integrated Trustpilot reviews, eco‑certification badges, and a “Carbon Offset” toggle.&nbsp;<br>• Mobile‑first design with Core Web Vitals score ≥ 90.</td></tr><tr><td><strong>Results</strong></td><td>•&nbsp;<strong>+47 %</strong>&nbsp;increase in average order value in 3 months.&nbsp;<br>•&nbsp;<strong>+38 %</strong>&nbsp;page‑view‑to‑checkout conversion.&nbsp;<br>• Page speed score jumped from&nbsp;<strong>58</strong>&nbsp;to&nbsp;<strong>93</strong>.</td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p><em>“The new site feels like a magazine, not a checkout page. We’re seeing more returning customers.”</em>&nbsp;–&nbsp;<strong>CEO, Glowing Green</strong></p>
<!-- /wp:paragraph --></blockquote>
<!-- /wp:quote -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:heading -->
<h2 class="wp-block-heading">2.&nbsp;<strong>NexaHealth</strong>&nbsp;– Digital Health Portal</h2>
<!-- /wp:heading -->

<!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><thead><tr><th>What</th><th>Details</th></tr></thead><tbody><tr><td><strong>Industry</strong></td><td>Healthcare / Tele‑medicine</td></tr><tr><td><strong>Goal</strong></td><td>Provide patients with a secure, intuitive portal to schedule appointments and view records.</td></tr><tr><td><strong>Challenge</strong></td><td>Complex regulatory requirements and legacy data structures.</td></tr><tr><td><strong>Solution</strong></td><td>• React SPA with a Node.js back‑end built on AWS Cognito for HIPAA‑compliant auth.&nbsp;<br>• Accessible UI (WCAG 2.1 AA), including screen‑reader friendly forms.&nbsp;<br>• Real‑time appointment calendar synced with physician schedules.&nbsp;<br>• GDPR‑ready privacy dashboard.</td></tr><tr><td><strong>Results</strong></td><td>•&nbsp;<strong>+82 %</strong>&nbsp;reduction in call‑center tickets (patients self‑serve).&nbsp;<br>• 99.8 % uptime over the first 6 months.&nbsp;<br>• Certified “Patient Experience Award” in 2024.</td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p><em>“The portal feels like a digital concierge.”</em>&nbsp;–&nbsp;<strong>CTO, NexaHealth</strong></p>
<!-- /wp:paragraph --></blockquote>
<!-- /wp:quote -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:heading -->
<h2 class="wp-block-heading">3.&nbsp;<strong>LumiLens</strong>&nbsp;– Augmented‑Reality Eyewear Brand</h2>
<!-- /wp:heading -->

<!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><thead><tr><th>What</th><th>Details</th></tr></thead><tbody><tr><td><strong>Industry</strong></td><td>Consumer electronics / AR</td></tr><tr><td><strong>Goal</strong></td><td>Show off product features in an engaging way and drive pre‑orders.</td></tr><tr><td><strong>Challenge</strong></td><td>Need to integrate AR experiences into a seamless e‑commerce flow.</td></tr><tr><td><strong>Solution</strong></td><td>• Next.js site with Vercel edge caching for ultra‑fast global delivery.&nbsp;<br>• WebXR AR demo that overlays lenses on a live webcam feed.&nbsp;<br>• Custom product configurator with 3D model preview.&nbsp;<br>• Integrated Shopify checkout and inventory management.</td></tr><tr><td><strong>Results</strong></td><td>•&nbsp;<strong>+210 %</strong>&nbsp;increase in time on site.&nbsp;<br>• 5× higher pre‑order conversion than last launch.&nbsp;<br>• Earned coverage in&nbsp;<em>Wired</em>&nbsp;and&nbsp;<em>TechCrunch</em>.</td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p><em>“We finally have an online showroom that feels like stepping into their product.”</em>&nbsp;–&nbsp;<strong>Founder, LumiLens</strong></p>
<!-- /wp:paragraph --></blockquote>
<!-- /wp:quote -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:heading -->
<h2 class="wp-block-heading">4.&nbsp;<strong>Mosaic Media</strong>&nbsp;– Creative Agency Portfolio</h2>
<!-- /wp:heading -->

<!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><thead><tr><th>What</th><th>Details</th></tr></thead><tbody><tr><td><strong>Industry</strong></td><td>Creative services / Portfolio</td></tr><tr><td><strong>Goal</strong></td><td>Showcase diverse work, attract high‑budget clients, and provide a robust contact funnel.</td></tr><tr><td><strong>Challenge</strong></td><td>Portfolio was static, hard to update, and didn’t convert leads.</td></tr><tr><td><strong>Solution</strong></td><td>• WordPress headless CMS with Gutenberg blocks for instant updates.&nbsp;<br>• Masonry grid with infinite scroll and high‑resolution image lazy‑loading.&nbsp;<br>• Lead capture funnel: instant proposal request + dynamic pricing calculator.&nbsp;<br>• SEO‑heavy blog with content marketing strategy.</td></tr><tr><td><strong>Results</strong></td><td>• 3× increase in qualified leads per month.&nbsp;<br>• 72 % faster content publishing cycle.&nbsp;<br>• Top‑ranking for “digital agency portfolio” in their city.</td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p><em>“The new site looks stunning and actually sells us work.”</em>&nbsp;–&nbsp;<strong>Creative Director, Mosaic Media</strong></p>
<!-- /wp:paragraph --></blockquote>
<!-- /wp:quote -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:heading -->
<h2 class="wp-block-heading">5.&nbsp;<strong>Eden Eats</strong>&nbsp;– Farm‑to‑Table Subscription Box</h2>
<!-- /wp:heading -->

<!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><thead><tr><th>What</th><th>Details</th></tr></thead><tbody><tr><td><strong>Industry</strong></td><td>Food &amp; Beverage / Subscription</td></tr><tr><td><strong>Goal</strong></td><td>Convert browsers into monthly subscribers with a transparent, seasonal catalogue.</td></tr><tr><td><strong>Challenge</strong></td><td>Seasonal inventory fluctuations and a need for a frictionless checkout.</td></tr><tr><td><strong>Solution</strong></td><td>• Shopify store with custom “Season Builder” that shows real‑time stock levels.&nbsp;<br>• “How We Source” interactive infographic.&nbsp;<br>• Automatic email nurture flow with personalized recipe suggestions.&nbsp;<br>• A/B‑tested hero copy and CTA placement.</td></tr><tr><td><strong>Results</strong></td><td>• 28 % lift in conversion on the product page.&nbsp;<br>• 15 % reduction in cart abandonment.&nbsp;<br>• 18 % YoY growth in subscriber base within 6 months.</td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p><em>“We’re finally getting the numbers that match the love our customers have for our boxes.”</em>&nbsp;–&nbsp;<strong>COO, Eden Eats</strong></p>
<!-- /wp:paragraph --></blockquote>
<!-- /wp:quote -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:heading -->
<h2 class="wp-block-heading">6.&nbsp;<strong>Astra Legal</strong>&nbsp;– Law Firm Practice Site</h2>
<!-- /wp:heading -->

<!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><thead><tr><th>What</th><th>Details</th></tr></thead><tbody><tr><td><strong>Industry</strong></td><td>Legal / Professional Services</td></tr><tr><td><strong>Goal</strong></td><td>Modernize brand image, showcase expertise, and streamline client intake.</td></tr><tr><td><strong>Challenge</strong></td><td>Outdated design, complicated navigation, and low mobile engagement.</td></tr><tr><td><strong>Solution</strong></td><td>• WordPress theme customized for legal industry with client‑centric content blocks.&nbsp;<br>• Mobile‑first design and progressive‑web‑app (PWA) support for quick loading on slow networks.&nbsp;<br>• Interactive “Legal Question” widget that routes to the appropriate practice area.&nbsp;<br>• Integrated Calendly booking and secure document upload.</td></tr><tr><td><strong>Results</strong></td><td>• 4× rise in mobile traffic.&nbsp;<br>• 45 % decrease in bounce rate on landing pages.&nbsp;<br>• 60 % increase in initial consultations booked online.</td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p><em>“The new site reflects the trust our clients need and makes it easier to connect with us.”</em>&nbsp;–&nbsp;<strong>Managing Partner, Astra Legal</strong></p>
<!-- /wp:paragraph --></blockquote>
<!-- /wp:quote -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Want a Case Study Like This?</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>If any of these projects spark ideas for your own business, let’s chat!<br>[Contact Us] | [Request a Quote] | [See More Work]</p>
<!-- /wp:paragraph -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p><em>“Design isn’t just how it looks—it’s how it works.”</em>&nbsp;– **[Studio Name] Team</p>
<!-- /wp:paragraph --></blockquote>
<!-- /wp:quote -->',
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
