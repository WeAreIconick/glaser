import { __ } from '@wordpress/i18n';
import domReady from '@wordpress/dom-ready';
import { registerBlockVariation } from '@wordpress/blocks';
import { addFilter } from '@wordpress/hooks';
import { View } from '@wordpress/primitives';
import {
	useBlockProps,
	useSettings,
	getSpacingPresetCssVar,
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

domReady(() => {
	registerBlockVariation(
		'core/verse',
		{
			name: 'badge',
			title: __( 'Glaser Badge', 'glaser' ),
			description: __( 'An animated SVG badge with customized text.', 'glaser' ),
			tags: [
				'theme'
			],
			scope: [
				'block',
				'inserter',
				'transform'
			],
			icon: "info-outline",
			attributes: {
				type: 'badge',
				label: __( 'Badge Text Here', 'glaser' ),
				qty: 2,
				spacer: '·',
				width: '200px',
			},
			isActive: [ 'type' ]
		}
	);
});


/**
 * Confirm adding our custom attributes to supported blocks.
 *
 * In theory this should already be managed by PHP through a filter.
 *
 * @param {Object} settings The block settings for the registered block type.
 * @param {string} name     The block type name, including namespace.
 * @return {Object}         The modified block settings.
 */
function addBadgeAttributes( settings, name ) {
	// Only add the attribute to supported blocks.
	if ( 'core/verse' === name ) {
		settings.attributes = {
			...settings.attributes,
			type: {
				type: 'string',
				default: 'verse',
			},
			label: {
				type: 'string',
			},
			qty: {
				type: 'number',
			},
			spacer: {
				type: 'string',
			},
			width: {
				type: 'string',
			},
		};
	}

	return settings;
}

addFilter(
	'blocks.registerBlockType',
	'glaser/badge/add-attributes',
	addBadgeAttributes
);

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

function addBadgeInspectorControls( BlockEdit ) {
	return ( props ) => {
		const { name, attributes, setAttributes } = props;

		// Early return if the block is not supported.
		if ( 'core/verse' !== name ) {
			return <BlockEdit { ...props } />;
		}

		console.log( props );

		// Retrieve selected attributes from the block.
		const {
			type,
			label,
			qty,
			spacer,
			width,
		} = attributes;

		return (
			<>
				{ ( 'badge' !== type ) && <BlockEdit { ...props } /> }
				{ ( 'badge' === type ) &&
					<>
						<figure {...useBlockProps({ style: { width, animation: 'none' }, className: 'badge' })}>
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
						<InspectorControls>
							<PanelBody
								title={ __(
									'Badge Details',
									'glaser'
								) }
							>
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
					</>
				}
			</>
		);
	};
}

addFilter(
	'editor.BlockEdit',
	'glaser/badge/add-inspector-controls',
	addBadgeInspectorControls
);

function replaceBadgeMarkup( element, blockType, attributes ) {
	// Skip if element is undefined.
	if ( ! element ) {
		return;
	}

	// Only apply to Cover blocks.
	if ( blockType.name !== 'core/verse' ) {
		return element;
	}

	const {
		type,
		label,
		qty,
		spacer,
		width,
	} = attributes;

	if ( 'badge' !== type ) {
		return element;
	}

	return <figure
		{...useBlockProps.save({
			style: {
				width: getSpacingPresetCssVar(width),
			},
			className: 'badge',
		})}
	>
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
	</figure>;
}

addFilter(
	'blocks.getSaveElement',
	'glaser/badge/get-replaced-markup',
	replaceBadgeMarkup
);