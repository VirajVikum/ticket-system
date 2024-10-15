/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    // './resources/**/*.{html,js,php}',
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './app/Livewire/**/*Table.php',
      './vendor/power-components/livewire-powergrid/resources/views/**/*.php',
      './vendor/power-components/livewire-powergrid/src/Themes/Tailwind.php'
],
  theme: {
    extend: {},
  },
  plugins: [],
}

