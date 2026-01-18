/**
 * Bizdomly Dark Mode Toggle
 *
 * Handles dark mode toggle with localStorage persistence and system preference support.
 *
 * @package Bizdomly
 * @since   1.0.0
 */

(function () {
	'use strict';

	const STORAGE_KEY = 'bizdomly-theme';

	/**
	 * Get the user's preferred theme from localStorage or system preference.
	 */
	function getPreferredTheme() {
		const stored = localStorage.getItem(STORAGE_KEY);
		if (stored) {
			return stored;
		}
		return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
	}

	/**
	 * Apply the theme to the document.
	 */
	function applyTheme(theme) {
		console.log('Applying theme:', theme);
		document.documentElement.setAttribute('data-theme', theme);
	}

	/**
	 * Toggle between light and dark themes.
	 */
	function toggleTheme() {
		const current = document.documentElement.getAttribute('data-theme') || getPreferredTheme();
		const next = current === 'dark' ? 'light' : 'dark';
		console.log('Toggling theme from', current, 'to', next);
		localStorage.setItem(STORAGE_KEY, next);
		applyTheme(next);
	}

	/**
	 * Create and inject the dark mode toggle button.
	 */
	function createToggleButton() {
		const button = document.createElement('button');
		button.className = 'dark-mode-toggle';
		button.setAttribute('aria-label', 'Toggle dark mode');
		button.innerHTML = `
			<svg class="moon-icon" viewBox="0 0 24 24" fill="currentColor">
				<path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/>
			</svg>
			<svg class="sun-icon" viewBox="0 0 24 24" fill="currentColor">
				<circle cx="12" cy="12" r="5"/>
				<line x1="12" y1="1" x2="12" y2="3" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
				<line x1="12" y1="21" x2="12" y2="23" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
				<line x1="4.22" y1="4.22" x2="5.64" y2="5.64" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
				<line x1="18.36" y1="18.36" x2="19.78" y2="19.78" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
				<line x1="1" y1="12" x2="3" y2="12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
				<line x1="21" y1="12" x2="23" y2="12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
				<line x1="4.22" y1="19.78" x2="5.64" y2="18.36" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
				<line x1="18.36" y1="5.64" x2="19.78" y2="4.22" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
			</svg>
		`;
		button.addEventListener('click', toggleTheme);
		return button;
	}

	/**
	 * Initialize dark mode.
	 */
	function init() {
		// Apply theme immediately to prevent flash
		applyTheme(getPreferredTheme());

		// Wait for DOM to inject toggle button
		document.addEventListener('DOMContentLoaded', function () {
			// Find the header navigation area and append toggle
			const header = document.querySelector('.site-header');
			if (header) {
				const mobileToggle = header.querySelector('.mobile-menu-toggle');
				if (mobileToggle) {
					// Insert before hamburger so order is: dark toggle, hamburger
					mobileToggle.parentNode.insertBefore(createToggleButton(), mobileToggle);
				} else {
					const lastGroup = header.querySelector('.wp-block-group:last-child');
					if (lastGroup) {
						lastGroup.appendChild(createToggleButton());
					} else {
						header.appendChild(createToggleButton());
					}
				}
			}
		});

		// Listen for system preference changes
		window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', function (e) {
			// Only auto-switch if user hasn't manually set preference
			if (!localStorage.getItem(STORAGE_KEY)) {
				applyTheme(e.matches ? 'dark' : 'light');
			}
		});
	}

	// Run immediately
	init();
})();
