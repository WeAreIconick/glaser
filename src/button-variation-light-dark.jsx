import { __ } from '@wordpress/i18n';
import domReady from '@wordpress/dom-ready';
import { registerBlockVariation } from '@wordpress/blocks';

domReady(() => {
	registerBlockVariation(
		'core/button',
		{
			name: 'light-dark',
			title: __( 'Light Dark Toggle', 'glaser' ),
			description: __( 'A toggle button to alternate whether the theme is rendering as Light or Dark mode.', 'glaser' ),
			tags: [
				'theme'
			],
			scope: [
				'block',
				'inserter',
				'transform'
			],
			icon: "color-picker",
			attributes: {
				title: __( 'Toggle theme between Light and Dark modes.', 'glaser' ),
				text: __( 'Toggle Brightness', 'glaser' ),
				className: 'glaser-toggle-light-dark',
				textAlign: 'center',
			},
			isActive: [ 'title' ]
		}
	);
});