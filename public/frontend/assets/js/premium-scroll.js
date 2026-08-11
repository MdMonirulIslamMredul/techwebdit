/**
 * premium-scroll.js
 * Lightweight scroll-reveal via IntersectionObserver.
 * Replaces wow.min.js + waypoints.min.js (~60KB combined) with ~30 lines.
 * Adds .is-visible to .reveal elements when they enter the viewport.
 */
(function () {
    'use strict';

    if (!('IntersectionObserver' in window)) {
        // Fallback for very old browsers — show all content immediately
        document.querySelectorAll('.reveal').forEach(function (el) {
            el.classList.add('is-visible');
        });
        return;
    }

    var observer = new IntersectionObserver(
        function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target); // Fire once only
                }
            });
        },
        {
            threshold: 0.12,     // Trigger when 12% of element is visible
            rootMargin: '0px 0px -40px 0px'  // Slight bottom offset feels more natural
        }
    );

    document.querySelectorAll('.reveal').forEach(function (el) {
        observer.observe(el);
    });

    /* ------------------------------------------------------------------
       Back-to-top button visibility (replaces jQuery scrollUp plugin logic)
       ------------------------------------------------------------------ */
    var scrollUpBtn = document.getElementById('scrollUp');
    if (scrollUpBtn) {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 300) {
                scrollUpBtn.classList.add('visible');
            } else {
                scrollUpBtn.classList.remove('visible');
            }
        }, { passive: true });

        scrollUpBtn.addEventListener('click', function (e) {
            e.preventDefault();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

}());
