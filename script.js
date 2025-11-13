$(document).ready(function () {
    'use strict';


    // ============================================
    // CONFIGURATION
    // ============================================
    const CONFIG = {
        totalSlides: 25,
        currentSlide: 1,
        swipeThreshold: 50,
        copyFeedbackDuration: 2000,
        storageKey: 'phpMvcTraining_currentSlide',
        lockedAfterSlide: 30
    };

    // ============================================
    // INITIALIZATION
    // ============================================
    function init() {
        initSyntaxHighlighting();
        restoreProgress();
        setupEventListeners();
        updateSlide();
        logWelcomeMessage();
    }

    // Initialize syntax highlighting
    function initSyntaxHighlighting() {
        if (typeof hljs !== 'undefined') {
            hljs.highlightAll();
        }
    }

    // ============================================
    // SLIDE NAVIGATION
    // ============================================
    function updateSlide() {
        // Remove active class from all slides
        $('.slide').removeClass('active');

        // Add active class to current slide
        const $currentSlide = $(`.slide[data-slide="${CONFIG.currentSlide}"]`);
        $currentSlide.addClass('active');

        // Re-highlight code blocks in current slide
        if (typeof hljs !== 'undefined') {
            $currentSlide.find('pre code').each(function () {
                hljs.highlightElement(this);
            });
        }

        // Update UI elements
        updateProgressBar();
        updateCounters();
        updateButtonStates();
        scrollToTop();
        saveProgress();
    }

    function goToSlide(slideNumber) {
        if (slideNumber >= 1 && slideNumber <= CONFIG.totalSlides) {
            // Check if trying to go past locked slide
            if (slideNumber > CONFIG.lockedAfterSlide) {
                showLockedMessage();
                return;
            }
            CONFIG.currentSlide = slideNumber;
            updateSlide();
        }
    }

    function nextSlide() {
        if (CONFIG.currentSlide < CONFIG.totalSlides) {
            CONFIG.currentSlide++;
            updateSlide();
        }
    }

    function prevSlide() {
        if (CONFIG.currentSlide > 1) {
            CONFIG.currentSlide--;
            updateSlide();
        }
    }

    function goToFirstSlide() {
        goToSlide(1);
    }

    function goToLastSlide() {
        goToSlide(CONFIG.totalSlides);
    }

    // ============================================
    // UI UPDATES
    // ============================================
    function updateProgressBar() {
        const progress = (CONFIG.currentSlide / CONFIG.totalSlides) * 100;
        $('#progressBar').css('width', progress + '%');
    }

    function updateCounters() {
        const counterText = `${CONFIG.currentSlide} / ${CONFIG.totalSlides}`;
        $('#slideCounter, #navCounter').text(counterText);
    }

    function updateButtonStates() {
        $('#prevBtn').prop('disabled', CONFIG.currentSlide === 1);

        // Disable next button if on last slide OR if at locked slide
        const isLocked = CONFIG.currentSlide >= CONFIG.lockedAfterSlide;
        $('#nextBtn').prop('disabled', CONFIG.currentSlide === CONFIG.totalSlides || isLocked);

        // Show lock icon on next button if locked
        if (isLocked) {
            $('#nextBtn').html('<i class="fas fa-lock"></i> Locked');
            $('#nextBtn').addClass('locked');
        } else {
            $('#nextBtn').html('Next <i class="fas fa-chevron-right"></i>');
            $('#nextBtn').removeClass('locked');
        }
    }

    function scrollToTop() {
        $('html, body').animate({ scrollTop: 0 }, 400);
    }
    // ============================================
    // LOCKED MESSAGE
    // ============================================
    function showLockedMessage() {
        // Remove existing modal if any
        $('.lock-modal').remove();

        // Create modal
        const $modal = $(`
        <div class="lock-modal">
            <div class="lock-modal-content">
                <i class="fas fa-lock fa-4x"></i>
                <h2>Content Locked</h2>
                <p>The remaining slides are locked for now.</p>
                <p class="small-text">Complete the practical exercises first, then we'll unlock the rest!</p>
                <button class="modal-close-btn">Got it!</button>
            </div>
        </div>
    `);

        $('body').append($modal);

        // Fade in
        setTimeout(() => $modal.addClass('show'), 10);

        // Close button
        $modal.find('.modal-close-btn').on('click', function () {
            $modal.removeClass('show');
            setTimeout(() => $modal.remove(), 300);
        });

        // Click outside to close
        $modal.on('click', function (e) {
            if ($(e.target).hasClass('lock-modal')) {
                $modal.removeClass('show');
                setTimeout(() => $modal.remove(), 300);
            }
        });
    }
    // ============================================
    // EVENT LISTENERS
    // ============================================
    function setupEventListeners() {
        setupNavigationButtons();
        setupKeyboardNavigation();
        setupRevealButtons();
        setupCopyButtons();
        setupTouchSwipe();
        setupTabSwitching();
    }

    function setupNavigationButtons() {
        $('#prevBtn').on('click', prevSlide);
        $('#nextBtn').on('click', nextSlide);
        $('#restartBtn').on('click', goToFirstSlide);
    }

    function setupKeyboardNavigation() {
        $(document).on('keydown', function (e) {
            // Ignore if typing in input/textarea
            if ($(e.target).is('input, textarea')) {
                return;
            }

            switch (e.key) {
                case 'ArrowLeft':
                    e.preventDefault();
                    prevSlide();
                    break;
                case 'ArrowRight':
                case ' ':
                    e.preventDefault();
                    nextSlide();
                    break;
                case 'Home':
                    e.preventDefault();
                    goToFirstSlide();
                    break;
                case 'End':
                    e.preventDefault();
                    goToLastSlide();
                    break;
            }
        });
    }

    function setupRevealButtons() {
        $(document).on('click', '.reveal-btn', function () {
            const targetId = $(this).data('target');
            toggleRevealContent(targetId, $(this));
        });
    }

    function setupCopyButtons() {
        $(document).on('click', '.copy-btn', function () {
            const codeId = $(this).data('code');
            copyCodeToClipboard(codeId, $(this));
        });
    }

    function setupTabSwitching() {
        $(document).on('click', '.tab-btn', function () {
            const targetTab = $(this).data('tab');
            switchTab(targetTab, $(this));
        });
    }

    // ============================================
    // REVEAL/HIDE CONTENT
    // ============================================
    function toggleRevealContent(targetId, $button) {
        const $content = $('#' + targetId);

        if (!$content.length) return;

        if ($content.is(':visible')) {
            $content.slideUp(300);
            $button.html('<i class="fas fa-eye"></i> Show Code');
        } else {
            $content.slideDown(300, function () {
                // Re-highlight code after animation
                if (typeof hljs !== 'undefined') {
                    $content.find('pre code').each(function () {
                        hljs.highlightElement(this);
                    });
                }
            });
            $button.html('<i class="fas fa-eye-slash"></i> Hide Code');
        }
    }

    // ============================================
    // TAB SWITCHING
    // ============================================
    function switchTab(targetTab, $clickedBtn) {
        // Update button states
        $clickedBtn.siblings('.tab-btn').removeClass('active');
        $clickedBtn.addClass('active');

        // Update tab content
        $('.tab-content').removeClass('active').hide();
        $('#' + targetTab).addClass('active').fadeIn(300, function () {
            // Re-highlight code in the new tab
            if (typeof hljs !== 'undefined') {
                $(this).find('pre code').each(function () {
                    hljs.highlightElement(this);
                });
            }
        });
    }

    // ============================================
    // COPY TO CLIPBOARD
    // ============================================
    function copyCodeToClipboard(codeId, $button) {
        const $codeElement = $('#' + codeId);

        if (!$codeElement.length) return;

        const codeText = $codeElement.text();

        // Use modern Clipboard API
        if (navigator.clipboard) {
            navigator.clipboard.writeText(codeText)
                .then(() => showCopyFeedback($button))
                .catch(() => fallbackCopy(codeText, $button));
        } else {
            fallbackCopy(codeText, $button);
        }
    }

    function fallbackCopy(text, $button) {
        const $textarea = $('<textarea>')
            .val(text)
            .css({
                position: 'fixed',
                opacity: 0
            })
            .appendTo('body');

        $textarea[0].select();

        try {
            document.execCommand('copy');
            showCopyFeedback($button);
        } catch (err) {
            console.error('Copy failed:', err);
        }

        $textarea.remove();
    }

    function showCopyFeedback($button) {
        const originalHtml = $button.html();

        $button
            .html('<i class="fas fa-check"></i> Copied!')
            .css('background', '#48bb78');

        setTimeout(function () {
            $button
                .html(originalHtml)
                .css('background', '');
        }, CONFIG.copyFeedbackDuration);
    }

    // ============================================
    // TOUCH SWIPE SUPPORT
    // ============================================
    function setupTouchSwipe() {
        let touchStartX = 0;
        let touchEndX = 0;

        $(document).on('touchstart', function (e) {
            touchStartX = e.originalEvent.changedTouches[0].screenX;
        });

        $(document).on('touchend', function (e) {
            touchEndX = e.originalEvent.changedTouches[0].screenX;
            handleSwipe(touchStartX, touchEndX);
        });
    }

    function handleSwipe(startX, endX) {
        const diff = endX - startX;

        // Swipe left - next slide
        if (diff < -CONFIG.swipeThreshold) {
            nextSlide();
        }
        // Swipe right - previous slide
        else if (diff > CONFIG.swipeThreshold) {
            prevSlide();
        }
    }

    // ============================================
    // SESSION STORAGE
    // ============================================
    function saveProgress() {
        try {
            sessionStorage.setItem(CONFIG.storageKey, CONFIG.currentSlide);
        } catch (e) {
            console.warn('Could not save progress:', e);
        }
    }

    function restoreProgress() {
        try {
            const savedSlide = sessionStorage.getItem(CONFIG.storageKey);
            if (savedSlide) {
                CONFIG.currentSlide = parseInt(savedSlide, 10);
            }
        } catch (e) {
            console.warn('Could not restore progress:', e);
        }
    }

    // ============================================
    // CONSOLE WELCOME MESSAGE
    // ============================================
    function logWelcomeMessage() {
        console.log('%c🎓 PHP & MVC Training', 'font-size: 20px; color: #4299e1; font-weight: bold;');
        console.log('%cKeyboard shortcuts:', 'font-size: 14px; color: #718096;');
        console.log('← : Previous slide');
        console.log('→ or Space: Next slide');
        console.log('Home: First slide');
        console.log('End: Last slide');
    }

    // ============================================
    // START APPLICATION
    // ============================================
    init();
});