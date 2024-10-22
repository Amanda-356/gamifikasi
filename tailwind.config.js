/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')

export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    './app/**/*.php',
    './resources/**/*.html',
    './resources/**/*.jsx',
    './resources/**/*.ts',
    './resources/**/*.tsx',
    './resources/**/*.twig',
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['InterVariable', ...defaultTheme.fontFamily.sans],
        bangers: ['Bangers', 'cursive'],
      },
      backgroundImage: {
        'game-map': "url('/public/img/game-map-step.png')"
      },
      gradientColorStops: {
        'radial-black-60' : "#000000",
        'radial-black-48' : "#1D1D1D",
        'radial-black-18' : "#202020",
      },
      gradientColorStopPositions: {
        60 : '60%',
        48 : '48%',
        18 : '18%',
      },
    },
    variants: {
        extend: {
            backgroundColor: ['active'],
        }
    },
  },
  plugins: [
      require('@tailwindcss/forms'),
      require('@tailwindcss/typography'),
  ],
}
