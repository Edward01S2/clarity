const { colors } = require('tailwindcss/defaultTheme')

module.exports = {
  purge: {
    content: [
    './resources/**/**/*.php',
    './resources/**/*.php',
    './resources/**/**/*.js',
    './resources/**/*.js',
    ],
    options: {
      whitelist: ['italic'],
    }
  },
  theme: {
    colors: {
      black: colors.black,
      white: colors.white,
      gray: colors.gray,
      red: colors.red,
      transparent: colors.transparent,
      current: colors.current,
    },
    extend: {
      colors: {
        'c-blue': {
          50 : '#f3faff',
          100 : '#e9f7ff',
          150 : '#e4f4ff',
          200 : '#00a6fb',
          300 : '#3a86ff',
          350: '#1a64d9',
          400 : '#03045e',
        },
        'c-gray' : {
          100: '#e5e5e5',
          200: '#666666',
        },
        'c-purple' : {
          100: '#7209B7',
        },
        'c-pink' : {
          100 : '#FF4181',
        }
      },
      fontFamily: {
        'inter' : ['Inter', 'sans-serif'],
      },
      borderWidth: {
        '3': '3px'
      },
      fontSize: {
        '7xl': '6rem',
        '8xl': '7rem',
        '9xl': '10rem',
      },
      maxWidth: {
        '720': '720px',
      },
      spacing: {
        '44' : '11rem',
        '108' : '32rem',
      },
      screens: {
        '2xl' : '1440px',
      },
      boxShadow: {
      },
    },
  },
  variants: {
    scale: ['responsive', 'hover', 'focus', 'group-hover'],
    display: ['responsive', 'hover', 'group-hover'],
  },
  plugins: [
    require('@tailwindcss/ui'),
    require('@tailwindcss/typography'),
  ],
}
