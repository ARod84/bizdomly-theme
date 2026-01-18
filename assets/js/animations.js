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

		// Initialize heading underline animations
		initHeadingUnderlines();
	});

	/**
	 * Animate accent underlines on h1 and h2 headings when they enter viewport.
	 */
	function initHeadingUnderlines() {
		const headings = document.querySelectorAll('h1, h2');

		headings.forEach(function (heading) {
			gsap.to(heading, {
				'--underline-scale': 1,
				duration: 0.8,
				ease: 'power2.out',
				scrollTrigger: {
					trigger: heading,
					start: 'top 80%',
					toggleActions: 'play none none none'
				}
			});
		});
	}
})();
