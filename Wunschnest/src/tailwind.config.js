/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",
    "./app/admin/*.php",
    "./app/views/*.php",
    "./components/**/*.php",
    "./components/**/*.html",
    "./components/templates/*.html",
    "./demo/*.php",
    "./public/**/*.js",
  ],
  darkMode: "class",
  theme: {
    extend: {
      animation: {
        pulse: "pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite",
      },
      keyframes: {
        pulse: {
          "0%, 100%": { transform: "translateY(0)" },
          "50%": { transform: "translateY(10px)" },
        },
      },
    },
  },
  plugins: [],
};
