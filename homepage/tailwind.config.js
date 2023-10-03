/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './public/**/*.{html,js}',
  ],
  theme: {
    extend: {
      fontFamily: {
        'reguler': "'Poppins', ...",
      },
      boxShadow:{
        'dot': '0px 4.10138px 8.20276px rgba(16, 86, 191, 0.5)',
      },
    },
  },
  plugins: [],
}
