/**
 * Bizdomly GSAP Animations
 *
 * Scroll-triggered animations using GSAP and ScrollTrigger.
 *
 * @package Bizdomly
 * @since   1.0.0
 */

(function () {
	'use strict';

	// Wait for DOM to be ready
	document.addEventListener('DOMContentLoaded', function () {
		// Register ScrollTrigger plugin
		gsap.registerPlugin(ScrollTrigger);

		// Initialize stat counter animations
		initStatCounters();
	});

	/**
	 * Animate stat numbers counting up when they enter the viewport.
	 */
	function initStatCounters() {
		const statsSection = document.querySelector('.stats-section');
		if (!statsSection) return;

		// Find all stat number elements (large text in stats section)
		const statNumbers = statsSection.querySelectorAll('.has-instrument-serif-font-family');

		statNumbers.forEach(function (el) {
			const originalText = el.textContent.trim();
			const parsed = parseStatValue(originalText);

			if (parsed.number === null) return;

			// Store original for reference
			el.setAttribute('data-target', parsed.number);
			el.setAttribute('data-prefix', parsed.prefix);
			el.setAttribute('data-suffix', parsed.suffix);

			// Set initial value to 0
			el.textContent = parsed.prefix + '0' + parsed.suffix;

			// Create counter animation
			const counter = { value: 0 };

			gsap.to(counter, {
				value: parsed.number,
				duration: 2,
				ease: 'power2.out',
				scrollTrigger: {
					trigger: statsSection,
					start: 'top 80%',
					toggleActions: 'play none none none'
				},
				onUpdate: function () {
					const currentValue = Math.round(counter.value);
					el.textContent = parsed.prefix + currentValue + parsed.suffix;
				}
			});
		});
	}

	/**
	 * Parse a stat value string into its components.
	 * Handles formats like: "50+", "100%", "24/7", "8+", "$1M"
	 */
	function parseStatValue(text) {
		// Handle special case: fractions like "24/7"
		if (text.includes('/')) {
			return { number: null, prefix: '', suffix: '' };
		}

		// Extract number and surrounding text
		const match = text.match(/^([^\d]*)(\d+)([^\d]*)$/);

		if (match) {
			return {
				prefix: match[1] || '',
				number: parseInt(match[2], 10),
				suffix: match[3] || ''
			};
		}

		return { number: null, prefix: '', suffix: '' };
	}
})();
