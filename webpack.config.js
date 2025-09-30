const defaultConfig = require('@wordpress/scripts/config/webpack.config');

module.exports = {
	...defaultConfig,
	entry: {
		...defaultConfig.entry(),
		'block-editor': './src/block-editor.jsx',
		'front-end': './src/front-end.jsx',
		'button-variation-light-dark': './src/button-variation-light-dark.jsx',
	},
};
