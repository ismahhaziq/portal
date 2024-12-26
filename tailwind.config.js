const defaultTheme = require('tailwindcss/defaultTheme');
const forms = require('@tailwindcss/forms');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./node_modules/daisyui/dist/**/*.js", // Ensure DaisyUI is included
        "./node_modules/flowbite/**/*.js",    // Ensure Flowbite is included
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                raleway: ['Raleway', 'sans-serif'],
                poppins: ['Poppins', 'sans-serif'],
                montserrat: ['Montserrat', 'sans-serif'],
                inter: ['Inter', 'sans-serif'],
                satoshi: ['Satoshi', 'sans-serif'],
            },
            // Optional custom background image (if needed)
            // backgroundImage: {
            //     'background-img': "url('/assets/index/background-img.png')",
            // }
        },
    },
    safelist: [
        'dynamic-background',
        'active-bullet', // Whitelist active-bullet class
        'font-semibold',
        'underline'
    ],

    plugins: [
        require("daisyui"),
        require('flowbite/plugin'),
    ],
};
