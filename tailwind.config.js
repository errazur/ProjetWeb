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

            backgroundImage: {
                'terrain': "url('/images/terrain.png')",
               }

        },
    },
    variants: {
        extend: {

        },
    },
    plugins: [require('@tailwindcss/forms'),],
}
