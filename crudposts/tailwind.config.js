/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "*/*.{html,js,php}",
    "./src/**/*.{html,js}",
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./index.html",
    "./src/**/*.{js,ts,jsx,tsx}",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        primary: "#0D324D",
       
      },
    },
  },
  plugins: [  require('flowbite/plugin')],
}

