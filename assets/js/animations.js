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
	});
})();
