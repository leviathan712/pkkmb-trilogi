const { default: daisyui } = require('daisyui');

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
    './node_modules/flowbite/**/*.js',
  ],
  theme: {
    screens: {
      'sm': '300px',
      'md': '767px',
      'lg': '1024px',
      '2xl': '1320px',
    },
    container: {
      center: true,
    },
    extend: {
      colors: {
        dark_blue: '#2b45a2',
        putih: '#F5F7F8',
        cokelat: '#E89376',
        biru_laut: '#6CB5AD',
        primary: {
          "50": "#eff6ff",
          "100": "#dbeafe",
          "200": "#bfdbfe",
          "300": "#93c5fd",
          "400": "#60a5fa",
          "500": "#3b82f6",
          "600": "#2563eb",
          "700": "#1d4ed8",
          "800": "#1e40af",
          "900": "#1e3a8a",
          "950": "#172554",
        },
      },
    },
  },
  plugins: [
    require('flowbite/plugin'),
    require('daisyui'),
    require('@tailwindcss/typography'),
  ],
};
