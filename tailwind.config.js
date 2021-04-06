const colors = require('tailwindcss/colors')
const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  purge: [
      './resources/views/**/*.blade.php',
  ],
  darkMode: 'class',
  theme: {
    extend: {
        fontFamily: {
            sans: ['iA Writer Quattro S', ...defaultTheme.fontFamily.sans],
        }
    },
    colors,
  },
  variants: {
    extend: {},
  },
  plugins: [
      require('@tailwindcss/typography'),
  ],
}
