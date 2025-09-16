<?php
/**
 * Title: Footer
 * Slug: glaser/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Footer columns
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"border":{"width":"1px"},"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-width:1px"><!-- wp:buttons {"style":{"border":{"bottom":{"width":"1px"}},"typography":{"textTransform":"uppercase"}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons" style="border-bottom-width:1px;text-transform:uppercase"><!-- wp:button {"className":"is-style-arrow-button","fontSize":"xx-large"} -->
<div class="wp-block-button is-style-arrow-button"><a class="wp-block-button__link has-xx-large-font-size has-custom-font-size wp-element-button"><?php /* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element, 3. is the start of a 'strong' HTML element, 4. is the end of a 'strong' HTML element */ 
echo sprintf( esc_html__( '%1$sWe’re Here%2$s · %3$sLet’s Talk%4$s', 'glaser' ), '<strong>', '</strong>', '<strong>', '</strong>' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:columns {"style":{"border":{"bottom":{"width":"1px"}}}} -->
<div class="wp-block-columns" style="border-bottom-width:1px"><!-- wp:column {"style":{"border":{"right":{"width":"1px"}},"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} -->
<div class="wp-block-column" style="border-right-width:1px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph -->
<p><?php /* Translators: 1. is a 'br' HTML element */ 
echo sprintf( esc_html__( '1132 Anystreet Blvd%1$sNew York, 12256', 'glaser' ), '<br>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Tel: +555 555 5555', 'glaser');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e('hello@example.com', 'glaser');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"border":{"right":{"width":"1px"}},"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} -->
<div class="wp-block-column" style="border-right-width:1px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading"><?php esc_html_e('Pages', 'glaser');?></h4>
<!-- /wp:heading -->

<!-- wp:navigation {"slug":"footer-pages","layout":{"type":"flex","orientation":"vertical"}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"border":{"right":{"width":"1px"}},"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} -->
<div class="wp-block-column" style="border-right-width:1px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading"><?php esc_html_e('Product', 'glaser');?></h4>
<!-- /wp:heading -->

<!-- wp:navigation {"slug":"footer-product","layout":{"type":"flex","orientation":"vertical"}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"border":{"right":{"width":"1px"}},"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} -->
<div class="wp-block-column" style="border-right-width:1px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading"><?php esc_html_e('Information', 'glaser');?></h4>
<!-- /wp:heading -->

<!-- wp:navigation {"slug":"footer-information","layout":{"type":"flex","orientation":"vertical"}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading"><?php esc_html_e('Support', 'glaser');?></h4>
<!-- /wp:heading -->

<!-- wp:navigation {"slug":"footer-support","layout":{"type":"flex","orientation":"vertical"}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:social-links {"iconColor":"primary","iconColorValue":"#000000","className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"https://dribbble.com/","service":"dribbble"} /-->

<!-- wp:social-link {"url":"https://github.com/IconickThemes/","service":"github"} /-->

<!-- wp:social-link {"service":"instagram"} /-->

<!-- wp:social-link {"service":"facebook"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:pattern {"slug":"glaser/colophon"} /-->

<!-- wp:glaser/light-dark {"style":{"layout":{"selfStretch":"fixed","flexSize":"15rem"}},"fontSize":"medium"} -->
<button class="wp-block-glaser-light-dark has-medium-font-size">Change theme</button>
<!-- /wp:glaser/light-dark --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->