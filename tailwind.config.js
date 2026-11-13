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
        'brand-dark': '#070707', // مشکی عمیق و لوکس
        'brand-card': '#0f0f11', // تیره برای کارت‌ها
        'brand-blue': '#0066ff', // آبی اکسنت مرسدس
      },
      letterSpacing: {
        'luxury': '0.25em',
      }
    },
  },
  plugins: [],
}
