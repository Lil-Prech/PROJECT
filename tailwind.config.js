/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./dashboard/**/*.{html,js}",
  ],
  prefix: "tw-",
  important: true,
  corePlugins: {
    preflight: false,
  },
  theme: {
    colors: {
      'red': '#991B1B',
      'white':' #F9FAFB',
      'black': '#000000',
      'pink': ' #FBCFE8',
      'transparent': 'transparent',
    },

    fontFamily: {


    },

    screens:{
      'sm': '640px',
      'md': '768px',
      'lg': '1064px',
      'xl': '1280px',
      '2xl': '1536px',

    },
    extend: {},
  },
  plugins: [
  
  ],
}
