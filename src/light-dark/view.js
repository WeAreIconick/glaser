const root = document.documentElement;

const getScheme = () => {
	// First, check the dom for one that may have been set.
	if (root.dataset.colorScheme) {
		return root.dataset.colorScheme;
	}

	// Failing that, check localstorage for one previously set.
	const lsScheme = localStorage.getItem('colorScheme');
	if (lsScheme) {
		return lsScheme;
	}

	// Failing that, check the system default via media queries.
	if (
		window &&
		window.matchMedia &&
		window.matchMedia(`(prefers-color-scheme: dark)`).matches
	) {
		return 'dark';
	}
	return 'light';
};

const setScheme = (scheme) => {
	root.dataset.colorScheme = scheme;
	localStorage.setItem('colorScheme', scheme);
};

const lightDarkToggles = document.querySelectorAll(
	'.wp-block-glaser-light-dark'
);

lightDarkToggles.forEach((element) => {
	element.addEventListener('click', (event) => {
		event.preventDefault();
		if ('dark' === getScheme()) {
			setScheme('light');
		} else {
			setScheme('dark');
		}
	});
});

// Set the html data attribute for easy reference and css.
if (!root.dataset.colorScheme) {
	root.dataset.colorScheme = getScheme();
}

// If the user has multiple tabs open, also shift when they toggle.
window.addEventListener('storage', (event) => {
	if ('colorScheme' === event.key) {
		setScheme(event.newValue);
	}
});
