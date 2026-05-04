import '../css/app.css';

import { initLenis } from './lenis.js';
import { initAnimations } from './animations.js';
import { initNavigation } from './navigation.js';
import { initFilters } from './filters.js';
import { initTactical } from './tactical.js';

const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

const lenis = reducedMotion ? null : initLenis();
initAnimations({ lenis, reducedMotion });
initNavigation();
initFilters();
initTactical({ reducedMotion });
