/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            borderRadius: {
                "20px": "20px",
                'custom': '15px',
            },
            width: {
                '45p':'45%',
                '90': '95%',
              },
            height:{
                '90': '95%',
            }
        },
    },
    plugins: [],
};
