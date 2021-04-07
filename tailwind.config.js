const colors = require("tailwindcss/colors");
const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    purge: ["./resources/views/**/*.blade.php"],

    mode: "jit",

    darkMode: "class",

    theme: {
        extend: {
            fontFamily: {
                sans: ["iA Writer Quattro S", ...defaultTheme.fontFamily.sans],
            },

            colors: {
                ...colors,
            },
        },
    },

    plugins: [require("@tailwindcss/typography")],
};
