import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";
const colors = require("tailwindcss/colors");

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            width: {
                spinner: "386px",
            },
            keyframes: {
                typing: {
                    "0%": { width: "0%", visibility: "hidden" },
                    "100%": { width: "100%" },
                },
                blink: {
                    "50%": { borderColor: "transparent" },
                    "100%": { borderColor: "white" },
                },
            },
            animation: {
                typing: "typing 6s steps(50) infinite alternate, blink .7s infinite",
            },
            colors: {
                lazurite: "#19486A",
                sapphire: "#071E4B",
                deepsky: "#58AAE0",
                crimson: "#D34040",
                lightsky: "#A8D7F4",
                transparent: "transparent",
                current: "currentColor",
            },
        },
    },

    plugins: [forms],
};
