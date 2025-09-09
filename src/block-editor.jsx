import { __ } from '@wordpress/i18n';
import domReady from '@wordpress/dom-ready';
import { registerBlockStyle } from '@wordpress/blocks';

domReady(() => {
	registerBlockStyle('core/button', {
		name: 'arrow-button',
		label: __('Arrow Button'),
	});
	registerBlockStyle('core/button', {
		name: 'under-arrow-button',
		label: __('Under Arrow Button'),
	});
});
