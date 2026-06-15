// ============================================================
// VETORIZANDO — Main Script
// ============================================================

$(document).ready(function() {
    
    // ---- Header scroll effect ----
    const header = $('#header');
    if (header.length) {
        $(window).on('scroll', function() {
            if ($(window).scrollTop() > 40) {
                header.addClass('scrolled');
            } else {
                header.removeClass('scrolled');
            }
        });
    }

    // ---- Mobile menu ----
    const hamburger = $('#hamburger');
    const nav = $('#nav');
    
    if (hamburger.length && nav.length) {
        hamburger.on('click', function(e) {
            e.stopPropagation();
            nav.toggleClass('open');
            hamburger.toggleClass('open');
        });
        
        $('.nav-link').on('click', function() {
            nav.removeClass('open');
            hamburger.removeClass('open');
        });
        
        $(document).on('click', function(e) {
            if (!hamburger.is(e.target) && !nav.is(e.target) && nav.has(e.target).length === 0) {
                nav.removeClass('open');
                hamburger.removeClass('open');
            }
        });
    }

    // ---- Scroll reveal animation ----
    const revealElements = $('.reveal');
    
    if (revealElements.length) {
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    $(entry.target).addClass('revealed');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });
        
        revealElements.each(function() {
            revealObserver.observe(this);
        });
    }

    // ---- Smooth scroll for anchor links ----
    $('a[href^="#"]').on('click', function(e) {
        const target = $(this.getAttribute('href'));
        if (target.length) {
            e.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top - 100
            }, 800, 'swing');
        }
    });

    // ---- Card hover effect enhancement ----
    $('.card').on('mouseenter', function() {
        $(this).addClass('hover-active');
    }).on('mouseleave', function() {
        $(this).removeClass('hover-active');
    });

    // ---- Lazy loading for images ----
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    if (img.dataset.src) {
                        img.src = img.dataset.src;
                        img.removeAttribute('data-src');
                        imageObserver.unobserve(img);
                    }
                }
            });
        });

        $('img[data-src]').each(function() {
            imageObserver.observe(this);
        });
    }

    // ---- Form validation helper ----
    $('form').on('submit', function(e) {
        let isValid = true;
        
        $(this).find('input[required], textarea[required]').each(function() {
            if (!$(this).val().trim()) {
                isValid = false;
                $(this).addClass('error');
            } else {
                $(this).removeClass('error');
            }
        });
        
        if (!isValid) {
            e.preventDefault();
            alert('Por favor, preencha todos os campos obrigatórios.');
        }
    });

    // ---- Add fade-in animation to page load ----
    $('body').addClass('fade-in');

});

// ---- Utility functions ----
window.VetorizandoUtils = {
    scrollToTop: function() {
        $('html, body').animate({ scrollTop: 0 }, 600);
    },
    
    showNotification: function(message, type = 'info') {
        const notification = $('<div>')
            .addClass('notification notification-' + type)
            .text(message)
            .appendTo('body')
            .fadeIn(300);
        
        setTimeout(function() {
            notification.fadeOut(300, function() {
                $(this).remove();
            });
        }, 3000);
    }
};
