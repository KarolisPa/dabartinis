const defaultTheme = require('tailwindcss/defaultTheme');
module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        ],
    theme: {
        extend: {
            scale: ['focus-within'],
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                ubuntu : ['Ubuntu', 'sans-serif']
            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms'),
        require('tailwindcss'),
        require('autoprefixer'),
    ],
};
