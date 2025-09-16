import { __ } from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';
import { TextControl } from '@wordpress/components';

import './editor.scss';

export default function Edit({ attributes, setAttributes }) {
	return (
		<div {...useBlockProps()}>
			<TextControl
				label={__('Label', 'glaser')}
				value={attributes.label}
				onChange={(label) => setAttributes({ label })}
			/>
		</div>
	);
}
