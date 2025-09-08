import { __ } from '@wordpress/i18n';
import {
	useBlockProps,
	useSettings,
	InspectorControls,
	isValueSpacingPreset,
	__experimentalSpacingSizesControl as SpacingSizesControl,
} from '@wordpress/block-editor';
import {
	PanelBody,
	PanelRow,
	SelectControl,
	TextControl,
	__experimentalUseCustomUnits as useCustomUnits,
	__experimentalParseQuantityAndUnitFromRawValue as parseQuantityAndUnitFromRawValue,
	__experimentalNumberControl as NumberControl,
} from '@wordpress/components';
import { View } from '@wordpress/primitives';
import './editor.scss';

function DimensionInput({ label, onChange, value = '' }) {
	const [spacingUnits] = useSettings('spacing.units');

	const units = useCustomUnits({
		spacingUnits,
		defaultValues: { px: 200, em: 20, rem: 20, vw: 20 },
	});

	const [parsedQuantity, parsedUnit] =
		parseQuantityAndUnitFromRawValue(value);
	const computedValue = isValueSpacingPreset(value)
		? value
		: [parsedQuantity, parsedUnit].join('');

	return (
		<View className="tools-panel-item-spacing">
			<SpacingSizesControl
				values={{ all: computedValue }}
				onChange={({ all }) => {
					onChange(all);
				}}
				label={label}
				sides={['all']}
				units={units}
				allowReset={false}
				splitOnAxis={false}
				showSideInLabel={false}
			/>
		</View>
	);
}

export default function Edit({ attributes, setAttributes }) {
	const { label, qty, spacer, width } = attributes;
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
					<PanelRow>
						<DimensionInput
							label={__('Size')}
							value={width}
							onChange={(nextWidth) =>
								setAttributes({ width: nextWidth })
							}
						/>
					</PanelRow>
				</PanelBody>
			</InspectorControls>
			<figure {...useBlockProps({ style: { width } })}>
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
