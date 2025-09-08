<?php
// This file is generated. Do not modify it manually.
return array(
	'badge' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'glaser/badge',
		'version' => '0.1.0',
		'title' => 'Badge',
		'category' => 'theme',
		'icon' => 'info-outline',
		'description' => 'An animated SVG badge with customized text.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false,
			'typography' => array(
				'fontSize' => true,
				'__experimentalFontFamily' => true,
				'__experimentalFontWeight' => true,
				'__experimentalLetterSpacing' => true,
				'__experimentalTextTransform' => true,
				'__experimentalDefaultControls' => array(
					'fontSize' => true
				)
			),
			'spacing' => array(
				'margin' => true,
				'padding' => true
			),
			'__experimentalBorder' => array(
				'color' => true,
				'style' => true,
				'width' => true
			),
			'dimensions' => array(
				'aspectRatio' => false
			),
			'color' => array(
				'text' => true
			),
			'align' => true
		),
		'attributes' => array(
			'label' => array(
				'type' => 'string',
				'default' => 'Testing A Badge'
			),
			'qty' => array(
				'type' => 'number',
				'default' => 2
			),
			'spacer' => array(
				'type' => 'string',
				'default' => '·'
			),
			'width' => array(
				'type' => 'string',
				'default' => '100px'
			),
			'style' => array(
				'type' => 'object',
				'default' => array(
					'typography' => array(
						'textTransform' => 'uppercase',
						'letterSpacing' => '3px',
						'fontSize' => '0.6rem',
						'fontWeight' => '400',
						'fontStyle' => 'normal'
					),
					'border' => array(
						'width' => '2px'
					),
					'spacing' => array(
						'padding' => array(
							'top' => 'var:preset|spacing|30',
							'bottom' => 'var:preset|spacing|30',
							'left' => 'var:preset|spacing|30',
							'right' => 'var:preset|spacing|30'
						)
					)
				)
			)
		),
		'textdomain' => 'glaser',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js'
	)
);
