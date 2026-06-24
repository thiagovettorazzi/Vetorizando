// ============================================================
// VETORIZANDO — Main Script
// ============================================================

// ---- Header scroll effect ----
const header = document.getElementById('header');
if (header) {
    window.addEventListener('scroll', () => {
        header.classList.toggle('scrolled', window.scrollY > 40);
    });
}

// ---- Mobile menu ----
const hamburger = document.getElementById('hamburger');
const nav = document.getElementById('nav');
if (hamburger && nav) {
    hamburger.addEventListener('click', () => {
        nav.classList.toggle('open');
        hamburger.classList.toggle('open');
    });
    nav.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', () => {
            nav.classList.remove('open');
            hamburger.classList.remove('open');
        });
    });
    document.addEventListener('click', (e) => {
        if (!hamburger.contains(e.target) && !nav.contains(e.target)) {
            nav.classList.remove('open');
            hamburger.classList.remove('open');
        }
    });
}

// ---- Scroll reveal ----
const revealEls = document.querySelectorAll('.reveal');
if (revealEls.length) {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('revealed');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1, rootMargin: '0px 0px -60px 0px' });
    revealEls.forEach(el => observer.observe(el));
}


// ---- Contact form ----
function initContactForm() {
    const form = document.getElementById('contactForm');
    if (!form) return;
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const btn = form.querySelector('button[type=submit]');
        btn.textContent = 'Mensagem enviada! ✓';
        btn.style.background = 'linear-gradient(135deg, #4CAF50, #388E3C)';
        setTimeout(() => {
            btn.textContent = 'Enviar mensagem';
            btn.style.background = '';
            form.reset();
        }, 3500);
    });
}

// ---- Home Hero Slider ----
function initHomeSlider() {
    const slides = document.querySelectorAll('.home-slider .slide');
    if (!slides.length) return;
    
    let currentSlide = 0;
    // Crossfade a cada 6 segundos
    setInterval(() => {
        slides[currentSlide].classList.remove('active');
        currentSlide = (currentSlide + 1) % slides.length;
        slides[currentSlide].classList.add('active');
    }, 6000);
}

document.addEventListener('DOMContentLoaded', () => {
    initContactForm();
    initHomeSlider();
});
