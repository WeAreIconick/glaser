<?php
/**
 * Title: Colophon
 * Slug: glaser/colophon
 * Description: A pattern providing the backlink to WordPress.org
 * Inserter: no
 */
?>

<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size">
	<?php
	printf(
		/* translators: Powered by WordPress. %s: WordPress link. */
		esc_html__( 'Powered by %s', 'glaser' ),
		'<a href="' . esc_url( __( 'https://wordpress.org', 'glaser' ) ) . '" rel="nofollow">WordPress</a>'
	);
	?>
</p>
<!-- /wp:paragraph -->
