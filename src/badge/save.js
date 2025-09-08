import { useBlockProps, useBlockEditContext } from '@wordpress/block-editor';

export default function save({ attributes }) {
	const { label, qty, spacer } = attributes;
	return (
		<figure {...useBlockProps.save()}>
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
	);
}
