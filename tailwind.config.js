const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        '.resources/**/*.js',
        '.resources/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: "var(--primary)",
                buttonColorReserve: "var(--buttonColorReserve)",
                secondary: "var(--secondary)",
            }
        },

        screens: {
            'tablet': '640px',
            // => @media (min-width: 640px) { ... }
            'laptop': '1024px',
            // => @media (min-width: 1024px) { ... }
            'desktop': '1280px',
            // => @media (min-width: 1280px) { ... }
        }
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
