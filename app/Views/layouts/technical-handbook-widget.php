<!-- =========================================
   TECHNICAL HANDBOOK FLOATING WIDGET - pa search ng title para makita sa main.css yung style
   ========================================= -->



<?php if (empty($hideHandbookWidget)): ?>

<div class="handbook-widget" id="handbookWidget">

    <div class="handbook-widget-logo">
        <img
            src="assets/images/logos/tac2026-monogram-logo.webp"
            alt="Track Asia Cup 2026"
        >
    </div>

    <div class="handbook-widget-divider"></div>

    <div class="handbook-widget-info">
        <span class="handbook-widget-eyebrow">TRACK ASIA CUP 2026</span>
        <h4>Technical Handbook</h4>
        <p>Everything you need to know before the event.</p>
    </div>

    <a href="/team" class="handbook-widget-button">
        <span>VIEW HANDBOOK</span>
        <i class="fas fa-arrow-right"></i>
    </a>

    <button
        type="button"
        class="handbook-widget-close"
        id="closeHandbookWidget"
        aria-label="Close Technical Handbook notification"
    >
        <i class="fas fa-times"></i>
    </button>

</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const widget = document.getElementById('handbookWidget');
    const closeBtn = document.getElementById('closeHandbookWidget');
    if (!widget) return;

    const currentPath = window.location.pathname.toLowerCase().replace(/\/$/, '') || '/';

    // 1. Check if we are on an error page
    const isErrorPage = document.querySelector('.error-area') !== null;

    // 2. Define excluded paths
    const excludedPaths = [
        '/technical-guide',
        '/team'
    ];

    const isExcludedPath = excludedPaths.some(path => currentPath === path || currentPath.endsWith(path));

    // 3. Check if user already closed it (We explicitly skip this check if on the home page '/')
    const isHomePage = currentPath === '/';
    const isClosedForThisPage = !isHomePage && sessionStorage.getItem('handbook_closed_' + currentPath) === 'true';

    // 4. Do not show if on an error page, excluded path, or previously closed (except home page)
    if (isErrorPage || isExcludedPath || isClosedForThisPage) {
        widget.classList.add('handbook-widget-hidden');
        return;
    }

    // 5. Reveal widget after 5 seconds (Will always trigger on /home even if closed previously)
    const showTimer = setTimeout(() => {
        widget.classList.add('handbook-widget-visible');
    }, 5000);

    // 6. Handle manual close action
    closeBtn?.addEventListener('click', function () {
        clearTimeout(showTimer);
        widget.classList.remove('handbook-widget-visible');
        widget.classList.add('handbook-widget-hidden');
        
        // Only save to session storage if it's NOT the home page
        if (!isHomePage) {
            sessionStorage.setItem('handbook_closed_' + currentPath, 'true');
        }
    });
});
</script>

<?php endif; ?>

