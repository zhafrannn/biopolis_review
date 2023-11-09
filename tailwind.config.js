/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
    },
    daisyui: {
        themes: [
            {
                mytheme: {
                    primary: "#20B15A",

                    secondary: "#730C07",

                    accent: "#f7bc33",

                    neutral: "#1e1f38",

                    "base-100": "#fcfcfd",

                    info: "#58add5",

                    success: "#38e58c",

                    warning: "#f4c03e",

                    error: "#E30613",
                },
            },
        ],
    },
    plugins: [require("daisyui")],
};
