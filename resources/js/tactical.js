import gsap from 'gsap';
import ScrollTrigger from 'gsap/ScrollTrigger';

export function initTactical({ reducedMotion } = {}) {
    initClock();
    if (!reducedMotion) {
        initCounters();
    } else {
        applyCountersInstantly();
    }
}

function initClock() {
    const clock = document.querySelector('[data-tactical-clock]');
    if (!clock) return;

    const update = () => {
        const now = new Date();
        const h = String(now.getUTCHours()).padStart(2, '0');
        const m = String(now.getUTCMinutes()).padStart(2, '0');
        const s = String(now.getUTCSeconds()).padStart(2, '0');
        clock.textContent = `${h}:${m}:${s}`;
    };

    update();
    setInterval(update, 1000);
}

function initCounters() {
    const counters = document.querySelectorAll('[data-counter]');
    counters.forEach((el) => {
        const target = parseFloat(el.dataset.counter);
        const decimals = parseInt(el.dataset.counterDecimals || '0', 10);
        const suffix = el.dataset.counterSuffix || '';
        const prefix = el.dataset.counterPrefix || '';
        const obj = { value: 0 };

        gsap.to(obj, {
            value: target,
            duration: 1.6,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: el,
                start: 'top 92%',
                once: true,
            },
            onUpdate: () => {
                const n = decimals > 0 ? obj.value.toFixed(decimals) : Math.round(obj.value);
                el.textContent = `${prefix}${formatNumber(n)}${suffix}`;
            },
        });
    });
}

function applyCountersInstantly() {
    const counters = document.querySelectorAll('[data-counter]');
    counters.forEach((el) => {
        const target = parseFloat(el.dataset.counter);
        const decimals = parseInt(el.dataset.counterDecimals || '0', 10);
        const suffix = el.dataset.counterSuffix || '';
        const prefix = el.dataset.counterPrefix || '';
        const n = decimals > 0 ? target.toFixed(decimals) : Math.round(target);
        el.textContent = `${prefix}${formatNumber(n)}${suffix}`;
    });
}

function formatNumber(value) {
    const str = String(value);
    if (str.includes('.')) {
        const [int, dec] = str.split('.');
        return `${int.replace(/\B(?=(\d{3})+(?!\d))/g, ',')}.${dec}`;
    }
    return str.replace(/\B(?=(\d{3})+(?!\d))/g, ',');
}
