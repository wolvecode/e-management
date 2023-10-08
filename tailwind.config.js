/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                'segoe': ['"Segoe UI"']
            },
            fontWeight:{

            },
            spacing: {
                128: "32rem",
            },
            transitionProperty: {
                spacing: "height, width, margin, padding",
            },
        },
    },
    plugins: [],
};
