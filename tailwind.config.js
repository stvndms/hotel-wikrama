/** @type {import('tailwindcss').Config} */
module.exports = {
   content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
      'orange': '#FF8833',
      'grey': '#7D7D7D',
      'dark': '#222529',
    },
    fontFamily: {
      'poppins': ['Poppins']
    },
    },
  },
  plugins: [],
}
