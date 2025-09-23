<?php
/**
 * Title: Header Large
 * Slug: glaser/header-large
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Header with a large site title and navigation.
 * Inserter: no
 */
?>
<!-- wp:group {"align":"full","className":"header-grid","style":{"border":{"width":"1px"},"spacing":{"blockGap":"0"}},"layout":{"type":"grid","columnCount":7,"minimumColumnWidth":null}} -->
<div class="wp-block-group alignfull header-grid" style="border-width:1px"><!-- wp:site-title {"style":{"layout":{"columnSpan":3},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"typography":{"textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"10rem"}},"layout":{"columnSpan":3}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:10rem;padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:glaser/badge {"label":"Made In NY","qty":3,"style":{"typography":{"textTransform":"uppercase","letterSpacing":"3px","fontSize":"0.6rem","fontWeight":"400","fontStyle":"normal"},"border":{"width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}}} -->
<figure style="border-width:1px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30);font-size:0.6rem;font-style:normal;font-weight:400;letter-spacing:3px;text-transform:uppercase;width:100px" class="wp-block-glaser-badge"><svg class="transform-origin-center-center" viewBox="0 0 100 100" overflow="visible"><path id="curve" d="M 0 50 L 0 50 A 1 1 0 0 1 100 50 L 100 50 L 100 50 A 1 1 0 0 1 0 50 L 0 50" stroke-width="none" fill="transparent"></path><text><textPath href="#curve" startOffset="0" dominant-baseline="Hanging">Made In NY · Made In NY · Made In NY · </textPath></text></svg></figure>
<!-- /wp:glaser/badge -->

<!-- wp:paragraph -->
<p><?php esc_html_e('We’re architects of distinct visual identities -- Crafting unique brands that stand out from the noise.', 'glaser');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:navigation {"slug":"primary","overlayMenu":"always","icon":"menu","style":{"spacing":{"margin":{"top":"0"},"blockGap":"var:preset|spacing|50"},"layout":{"selfStretch":"fixed","flexSize":"5rem"}},"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"center","orientation":"horizontal"}} /-->

<!-- wp:group {"metadata":{"name":"Case Study"},"style":{"layout":{"columnSpan":3},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontFamily":"inter"} -->
<h2 class="wp-block-heading has-inter-font-family" style="font-style:normal;font-weight:400"><?php esc_html_e('AirBnB', 'glaser');?></h2>
<!-- /wp:heading -->

<!-- wp:columns {"style":{"layout":{"selfStretch":"fit","flexSize":null}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"100%"} -->
<div class="wp-block-column" style="flex-basis:100%"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontFamily":"inter"} -->
<h4 class="wp-block-heading has-inter-font-family" style="font-style:normal;font-weight:400"><?php esc_html_e('Home Run Campaign', 'glaser');?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Behind the scenes', 'glaser');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"100px"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:100px"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"0px","width":"1px"}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" style="border-width:1px;border-radius:0px"><?php esc_html_e('&gt;', 'glaser');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:buttons {"style":{"layout":{"columnSpan":3,"rowSpan":1},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:button {"className":"is-style-under-arrow-button","style":{"typography":{"textTransform":"uppercase"}}} -->
<div class="wp-block-button is-style-under-arrow-button"><a class="wp-block-button__link wp-element-button" style="text-transform:uppercase"><?php esc_html_e('Let’s Talk', 'glaser');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:glaser/light-dark {"style":{"layout":{"columnSpan":1,"rowSpan":1}},"fontSize":"large"} -->
<button class="wp-block-glaser-light-dark no-label has-large-font-size"></button>
<!-- /wp:glaser/light-dark --></div>
<!-- /wp:group -->