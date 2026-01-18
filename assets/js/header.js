/**
 * Bizdomly Header Scripts
 * - Scroll effect
 * - Mobile menu toggle
 */
(function() {
    'use strict';

    const header = document.querySelector('.site-header');
    if (!header) return;

    // ===================
    // Scroll Effect
    // ===================
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

    // ===================
    // Mobile Menu Toggle
    // ===================
    const mobileToggle = document.querySelector('.mobile-menu-toggle');
    const mobileNav = document.querySelector('.mobile-nav');

    if (mobileToggle && mobileNav) {
        // Toggle menu on button click
        mobileToggle.addEventListener('click', function() {
            const isActive = mobileToggle.classList.contains('active');

            mobileToggle.classList.toggle('active');
            mobileNav.classList.toggle('active');

            // Update accessibility attributes
            mobileToggle.setAttribute('aria-expanded', !isActive);
            mobileNav.setAttribute('aria-hidden', isActive);

            // Prevent body scroll when menu is open
            document.body.style.overflow = isActive ? '' : 'hidden';
        });

        // Close menu when clicking a link
        const mobileLinks = mobileNav.querySelectorAll('a');
        mobileLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                mobileToggle.classList.remove('active');
                mobileNav.classList.remove('active');
                mobileToggle.setAttribute('aria-expanded', 'false');
                mobileNav.setAttribute('aria-hidden', 'true');
                document.body.style.overflow = '';
            });
        });

        // Close menu on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && mobileNav.classList.contains('active')) {
                mobileToggle.classList.remove('active');
                mobileNav.classList.remove('active');
                mobileToggle.setAttribute('aria-expanded', 'false');
                mobileNav.setAttribute('aria-hidden', 'true');
                document.body.style.overflow = '';
            }
        });

        // Close menu when resizing to desktop
        window.addEventListener('resize', function() {
            if (window.innerWidth > 900 && mobileNav.classList.contains('active')) {
                mobileToggle.classList.remove('active');
                mobileNav.classList.remove('active');
                mobileToggle.setAttribute('aria-expanded', 'false');
                mobileNav.setAttribute('aria-hidden', 'true');
                document.body.style.overflow = '';
            }
        });
    }

    // ===================
    // Desktop Dropdown
    // ===================
    const desktopDropdowns = document.querySelectorAll('.nav-item.has-dropdown');

    desktopDropdowns.forEach(function(dropdown) {
        const toggle = dropdown.querySelector('.dropdown-toggle');

        if (toggle) {
            // Toggle on click for accessibility
            toggle.addEventListener('click', function(e) {
                e.preventDefault();
                const isActive = dropdown.classList.contains('active');

                // Close other dropdowns
                desktopDropdowns.forEach(function(d) {
                    d.classList.remove('active');
                });

                if (!isActive) {
                    dropdown.classList.add('active');
                }

                toggle.setAttribute('aria-expanded', !isActive);
            });
        }
    });

    // Close desktop dropdown when clicking outside
    document.addEventListener('click', function(e) {
        if (!e.target.closest('.nav-item.has-dropdown')) {
            desktopDropdowns.forEach(function(dropdown) {
                dropdown.classList.remove('active');
                const toggle = dropdown.querySelector('.dropdown-toggle');
                if (toggle) {
                    toggle.setAttribute('aria-expanded', 'false');
                }
            });
        }
    });

    // ===================
    // Mobile Dropdown Accordion
    // ===================
    const mobileDropdownToggles = document.querySelectorAll('.mobile-dropdown-toggle');

    mobileDropdownToggles.forEach(function(toggle) {
        toggle.addEventListener('click', function() {
            const isActive = toggle.classList.contains('active');
            const menu = toggle.nextElementSibling;

            toggle.classList.toggle('active');
            toggle.setAttribute('aria-expanded', !isActive);

            if (menu) {
                menu.classList.toggle('active');
            }
        });
    });
})();
