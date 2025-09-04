import { __ } from '@wordpress/i18n';
import domReady from '@wordpress/dom-ready';
import { registerBlockStyle } from '@wordpress/blocks';

domReady(() => {
	registerBlockStyle('core/button', {
		name: 'arrow-button',
		label: __('Arrow Button'),
	});
});
