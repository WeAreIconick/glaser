import { __ } from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';

export default function save({ attributes }) {
	const blockProps = useBlockProps.save({
		className: attributes.label.length > 0 ? 'has-label' : 'no-label',
	});

	return (
		<button {...blockProps}>
			{attributes.label ?? __('Change theme', 'glaser')}
		</button>
	);
}
