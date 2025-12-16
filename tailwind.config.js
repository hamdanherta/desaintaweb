import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        './node_modules/flowbite/**/*.js',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                myfontbahn: ['Bahnschrift', 'sans-serif'],
                myfontrumpi: ['Rumpi', 'sans-serif'],
                myfontinter: ['Inter', 'sans-serif'],
                myfontbella: ['bellarina', 'cursive'],
            },

            colors: {
                desainta: '#FF0492', 
                desaintalight: '#FF73C2',
            },

            screens: {
                mn: '330px',
                mm: '485px',
                sm: '640px',
                md: '768px',
                lg: '1024px',
                xl: '1280px',
                '2xl': '1536px',
                '3xl': '2000px',
                '4xl': '2500px',
            },

            keyframes: {
                pulseScale: {
                    '0%, 100%': { transform: 'scale(1)' },
                    '50%': { transform: 'scale(1.1)' },
                },
                zoomCard: {
                    '0%, 100%': { transform: 'scale(1)', opacity: '1' },
                    '8%, 16%': { transform: 'scale(1.1)', opacity: '1' },
                    '17%, 99%': { transform: 'scale(1)', opacity: '1' },
                },
            },

            animation: {
                'pulse-scale': 'pulseScale 1s ease-in-out infinite',
                zoomCard: 'zoomCard 6s infinite',
            },
        },
    },

    plugins: [forms],
};
