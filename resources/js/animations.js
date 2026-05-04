import gsap from 'gsap';
import ScrollTrigger from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

export function initAnimations({ lenis, reducedMotion } = {}) {
    if (reducedMotion) {
        document.querySelectorAll('[data-animate]').forEach((el) => {
            el.style.opacity = '1';
            el.style.transform = 'none';
        });
        return;
    }

    if (lenis) {
        lenis.on('scroll', ScrollTrigger.update);
        gsap.ticker.add((time) => lenis.raf(time * 1000));
        gsap.ticker.lagSmoothing(0);
    }

    setupHeroReveals();
    setupFadeUp();
    setupLines();
    setupPanels();
    setupTableRows();
    setupStaggerGroups();
    setupCardHovers();
}

function setupHeroReveals() {
    const heroes = document.querySelectorAll('[data-hero-reveal]');
    heroes.forEach((hero) => {
        const tl = gsap.timeline();
        const targets = hero.querySelectorAll('[data-hero-item]');
        if (!targets.length) return;
        tl.from(targets, {
            opacity: 0,
            y: 24,
            duration: 0.7,
            stagger: 0.08,
            ease: 'power3.out',
        });
    });
}

function setupFadeUp() {
    const items = document.querySelectorAll('[data-animate="fade-up"]');
    items.forEach((el) => {
        gsap.to(el, {
            opacity: 1,
            y: 0,
            duration: 0.7,
            ease: 'power2.out',
            scrollTrigger: {
                trigger: el,
                start: 'top 88%',
                once: true,
            },
        });
    });
}

function setupLines() {
    const lines = document.querySelectorAll('[data-animate="line"]');
    lines.forEach((el) => {
        gsap.to(el, {
            scaleX: 1,
            duration: 0.8,
            ease: 'expo.out',
            scrollTrigger: {
                trigger: el,
                start: 'top 92%',
                once: true,
            },
        });
    });
}

function setupPanels() {
    const panels = document.querySelectorAll('[data-animate="panel"]');
    panels.forEach((el) => {
        gsap.to(el, {
            opacity: 1,
            x: 0,
            duration: 0.7,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: el,
                start: 'top 90%',
                once: true,
            },
        });
    });
}

function setupTableRows() {
    const tables = document.querySelectorAll('[data-animate-table]');
    tables.forEach((table) => {
        const rows = table.querySelectorAll('[data-animate="table-row"]');
        if (!rows.length) return;
        gsap.to(rows, {
            opacity: 1,
            y: 0,
            duration: 0.5,
            stagger: 0.05,
            ease: 'power2.out',
            scrollTrigger: {
                trigger: table,
                start: 'top 88%',
                once: true,
            },
        });
    });
}

function setupStaggerGroups() {
    const groups = document.querySelectorAll('[data-stagger]');
    groups.forEach((group) => {
        const items = group.querySelectorAll('[data-stagger-item]');
        if (!items.length) return;
        gsap.from(items, {
            opacity: 0,
            y: 20,
            duration: 0.6,
            stagger: 0.08,
            ease: 'power2.out',
            scrollTrigger: {
                trigger: group,
                start: 'top 85%',
                once: true,
            },
        });
    });
}

function setupCardHovers() {
    const cards = document.querySelectorAll('[data-card-hover]');
    cards.forEach((card) => {
        const enter = () => gsap.to(card, { y: -4, duration: 0.25, ease: 'power2.out' });
        const leave = () => gsap.to(card, { y: 0, duration: 0.3, ease: 'power2.out' });
        card.addEventListener('mouseenter', enter);
        card.addEventListener('mouseleave', leave);
        card.addEventListener('focusin', enter);
        card.addEventListener('focusout', leave);
    });
}
