import './bootstrap';

// In resources/js/app.js or wherever Alpine is initialized
import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';

// Initialize the Focus plugin
Alpine.plugin(focus);

// Start Alpine.js
window.Alpine = Alpine;
Alpine.start();
