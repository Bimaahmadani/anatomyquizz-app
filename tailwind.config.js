/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        primary: '#9CA089',
        secondary: '#5D624C',
        neutral : "#E1DCBB",
        accent :"#C5BEAB",
        teks: "#86886B",
        tersier :"#4B4139"
      }
    },
  },
  plugins: [],
}

