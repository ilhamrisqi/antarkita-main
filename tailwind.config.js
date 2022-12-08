/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    theme: {
        extend: {},
        fontFamily: {
            'sans': ['"inter"', '"roboto"', '"helvetica"']
        },
        animation: {
            marquee: 'marquee 25s linear infinite',
            marquee2: 'marquee2 25s linear infinite',
            "marquee-reverse": 'marqueereverse 25s linear infinite',
            "marquee2-reverse": 'marquee2reverse 25s linear infinite',
        },
        keyframes: {
            marquee: {
                '0%': {transform: 'translateX(0%)'},
                '100%': {transform: 'translateX(-100%)'},
            },
            marquee2: {
                '0%': {transform: 'translateX(100%)'},
                '100%': {transform: 'translateX(0%)'},
            },

            marqueereverse: {
                '0%': {transform: 'translateX(-100%)'},
                '100%': {transform: 'translateX(0%)'},
            },
            marquee2reverse: {
                '0%': {transform: 'translateX(0%)'},
                '100%': {transform: 'translateX(100%)'},
            },
        },
    },
    plugins: [require('@tailwindcss/aspect-ratio')],
}
