const colors = require('tailwindcss/colors')
const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],

    theme: {
        extend: {
            colors: {
                'violet': '#a69dbf',
                'violet-pastel': '#dcd0fe',
                'bleu-pastel': '#cdedfa'
            },

        },
    },
    variants: {
        extend: {

        },
    },
    plugins: [],
}
