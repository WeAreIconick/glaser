<?php
/**
 * Title: 404
 * Slug: glaser/404
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","className":"header"} /-->

<!-- wp:group {"style":{"dimensions":{"minHeight":"500px"},"border":{"width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"25%","right":"25%"}}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"center"}} -->
<div class="wp-block-group" style="border-width:1px;min-height:500px;padding-top:var(--wp--preset--spacing--50);padding-right:25%;padding-bottom:var(--wp--preset--spacing--50);padding-left:25%"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e('Well, this is awkward…', 'glaser');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|text"}}}},"textColor":"text"} -->
<p class="has-text-align-center has-text-color has-link-color"><?php esc_html_e('You\'ve found a page that doesn\'t exist. It\'s like finding a unicorn, except way less magical and significantly more disappointing. But hey, at least you\'re here now!', 'glaser');?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/"><?php esc_html_e('← Go back home', 'glaser');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"footer"} /-->