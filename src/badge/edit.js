import { __ } from '@wordpress/i18n';
import { useBlockProps, InspectorControls } from '@wordpress/block-editor';
import {
	PanelBody,
	PanelRow,
	SelectControl,
	TextControl,
	__experimentalNumberControl as NumberControl,
} from '@wordpress/components';
import './editor.scss';

export default function Edit({ attributes, setAttributes }) {
	const { label, qty, spacer } = attributes;
	return (
		<>
			<InspectorControls>
				<PanelBody title={__('Badge Details')}>
					<PanelRow>
						<TextControl
							label={__('Text Label')}
							value={label}
							onChange={(val) => setAttributes({ label: val })}
							__nextHasNoMarginBottom
							__next40pxDefaultSize
						/>
					</PanelRow>
					<PanelRow>
						<NumberControl
							label={__('Times')}
							value={qty}
							min={1}
							max={10}
							onChange={(value) =>
								setAttributes({
									qty: parseInt(value, 10),
								})
							}
							__next40pxDefaultSize
						/>
					</PanelRow>
					<PanelRow>
						<SelectControl
							label={__('Spacer')}
							value={spacer}
							options={[
								{
									label: __('None'),
									value: '',
								},
								{
									label: '·',
									value: '·',
								},
								{
									label: '+',
									value: '+',
								},
								{
									label: '-',
									value: '-',
								},
							]}
							onChange={(value) =>
								setAttributes({
									spacer: value,
								})
							}
							__nextHasNoMarginBottom
							__next40pxDefaultSize
						/>
					</PanelRow>
				</PanelBody>
			</InspectorControls>
			<figure {...useBlockProps()}>
				<svg
					className="transform-origin-center-center"
					viewBox="0 0 100 100"
					overflow="visible"
				>
					<path
						id="curve"
						d="M 0 50 L 0 50 A 1 1 0 0 1 100 50 L 100 50 L 100 50 A 1 1 0 0 1 0 50 L 0 50"
						strokeWidth="none"
						fill="transparent"
					></path>
					<text>
						<textPath
							href="#curve"
							startOffset="0"
							dominantBaseline="Hanging"
						>
							{`${label} ${spacer} `.repeat(qty)}
						</textPath>
					</text>
				</svg>
			</figure>
		</>
	);
}
