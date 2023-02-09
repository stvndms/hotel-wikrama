/** @type {import('tailwindcss').Config} */
module.exports = {
   content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    container: {
      center:true,
    },
    extend: {
      colors: {
      'orange': '#FF8833',
      'grey': '#7D7D7D',
      'dark': '#222529',
    },
    fontFamily: {
      'poppins': ['Poppins']
    },
    screens: {
      '2xl': '1320px',
    },
    },
  },
  plugins: [],
}
