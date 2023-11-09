import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                poppins : ['Poppins', 'sans-serif'],
            },
           backgroundImage: {
            'slider-1' : "linear-gradient(90deg, rgba(21,17,89,0.8295693277310925) 0%, rgba(81,23,85,0.4066001400560224) 9%, rgba(11,109,165,0.5270483193277311) 53%, rgba(20,20,87,0.24413515406162467) 100%), url('/public/assets/images/slider-img-1.jpg')",
            'slider-2' : "url('/public/assets/images/slider-img-2.jpg')",
            'slider-3' : "url('/public/assets/images/slider-img-3.jpg')",
            'footer-bg-image' : "url('/public/assets/images/footer-bg1.png')"
           }
        },
    },

    plugins: [forms],
};
