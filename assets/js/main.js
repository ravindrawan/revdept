/**
 * Main Interactive Scripts
 * Department of Provincial Revenue - North Western Province
 */

document.addEventListener('DOMContentLoaded', function() {
    'use strict';

    // Elements
    const mobileToggle = document.getElementById('mobileToggle');
    const navMenu = document.getElementById('navMenu');
    const navOverlay = document.getElementById('navOverlay');
    const backToTop = document.getElementById('backToTop');
    const dropdownItems = document.querySelectorAll('.nav-item.has-dropdown');

    // 1. Mobile Menu Toggle
    if (mobileToggle && navMenu) {
        mobileToggle.addEventListener('click', function(e) {
            e.stopPropagation();
            const isActive = navMenu.classList.toggle('active');
            mobileToggle.classList.toggle('active', isActive);
            if (navOverlay) navOverlay.classList.toggle('active', isActive);
            document.body.style.overflow = isActive ? 'hidden' : '';
        });
    }

    // Close menu when clicking overlay
    if (navOverlay) {
        navOverlay.addEventListener('click', function() {
            closeMobileMenu();
        });
    }

    function closeMobileMenu() {
        if (navMenu) navMenu.classList.remove('active');
        if (mobileToggle) mobileToggle.classList.remove('active');
        if (navOverlay) navOverlay.classList.remove('active');
        document.body.style.overflow = '';
    }

    // 2. Mobile Dropdown Toggle
    dropdownItems.forEach(function(item) {
        const link = item.querySelector('.nav-link');
        const dropdown = item.querySelector('.dropdown-menu');

        if (link && dropdown) {
            link.addEventListener('click', function(e) {
                // On mobile screens (< 992px), clicking the link toggles dropdown
                if (window.innerWidth < 992) {
                    // If target is anchor on same page, let it navigate, otherwise toggle
                    const href = link.getAttribute('href');
                    if (href === '#' || href === 'javascript:void(0)' || e.target.classList.contains('dropdown-caret')) {
                        e.preventDefault();
                    }
                    dropdown.classList.toggle('show');
                }
            });
        }
    });

    // Close mobile menu on clicking any dropdown link
    const dropdownLinks = document.querySelectorAll('.dropdown-menu a');
    dropdownLinks.forEach(function(link) {
        link.addEventListener('click', function() {
            if (window.innerWidth < 992) {
                closeMobileMenu();
            }
        });
    });

    // 3. Back to Top Button
    if (backToTop) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 350) {
                backToTop.classList.add('visible');
            } else {
                backToTop.classList.remove('visible');
            }
        });

        backToTop.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    // 4. Smooth Anchor Link Scrolling (with sticky navbar offset)
    const anchorLinks = document.querySelectorAll('a[href^="#"]');
    anchorLinks.forEach(function(anchor) {
        anchor.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href').substring(1);
            if (!targetId) return;

            const targetElement = document.getElementById(targetId);
            if (targetElement) {
                e.preventDefault();
                const navbarHeight = document.querySelector('.navbar')?.offsetHeight || 70;
                const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - navbarHeight - 15;

                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // 5. Contact Form Validation
    const contactForm = document.getElementById('inquiryForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            const nameInput = document.getElementById('contactName');
            const emailInput = document.getElementById('contactEmail');
            const messageInput = document.getElementById('contactMessage');

            if (!nameInput.value.trim() || !emailInput.value.trim() || !messageInput.value.trim()) {
                alert('Please fill in all required fields before submitting.');
                e.preventDefault();
            }
        });
    }
});
