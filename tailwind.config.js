import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        container: {
            center: true,
            padding: "1rem",
        },
        extend: {
            colors: {
                primary: "#131D25",
                secondary: "#1d242e",
                text: "#dddedf",
            },
        },
    },

    plugins: [forms],
};
