/**
 * Bizdomly Header Scroll Effect
 */
(function() {
    'use strict';

    const header = document.querySelector('.site-header');
    if (!header) return;

    let lastScroll = 0;
    const scrollThreshold = 50;

    function handleScroll() {
        const currentScroll = window.scrollY;

        if (currentScroll > scrollThreshold) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }

        lastScroll = currentScroll;
    }

    // Throttle scroll events
    let ticking = false;
    window.addEventListener('scroll', function() {
        if (!ticking) {
            window.requestAnimationFrame(function() {
                handleScroll();
                ticking = false;
            });
            ticking = true;
        }
    });

    // Initial check
    handleScroll();
})();
