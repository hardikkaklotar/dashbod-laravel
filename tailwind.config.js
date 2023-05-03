const defaultTheme = require('tailwindcss/defaultTheme');
const {lightBlue} = require("tailwindcss/colors");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        colors: {
            transparent: 'transparent',
            primary: '#ca3164',
            secondary: '#374151',
            white: '#fff',
            black: '#000',
            lightBlue: '#dbeafe',
            'gray': {
                100: '#f3f4f6',
                200: '#e5e7eb',
                400: '#9ca3af',
            },
            'pink': {
                600: '#db2777',
            },
        },
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
