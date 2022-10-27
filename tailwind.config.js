/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
  theme: {
    extend: {
        backgroundImage: {
            city: "url('/public/img/bg-city.png')",
            hospital: "url('/public/img/hospital.jpg')"
        },
    },
  },
  plugins: [],
}
