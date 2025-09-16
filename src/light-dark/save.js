import { __ } from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';

export default function save({ attributes }) {
	return (
		<button {...useBlockProps.save()}>
			{attributes.label ?? __('Change theme', 'glaser')}
		</button>
	);
}
