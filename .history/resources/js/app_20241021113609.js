import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';

Alpine.plugin(focus); // Register the focus plugin

window.Alpine = Alpine;
Alpine.start();
