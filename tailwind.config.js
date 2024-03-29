const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
  // purge: ['./src/sass/*.scss'],
  // purge: {
  //   enabled: true,
  //   content: ['./src/**/*.html', './src/**/*.js', './src/**/*.css', './src/**/*.scss'],
  // },
  purge: ["./src/**/*.{html,js,scss}", "**/*.php"],
  darkMode: false, // or 'media' or 'class'
  theme: {
    fontFamily: {
      sans: ['"BrittiSans"', ...defaultTheme.fontFamily.sans],
    },
    extend: {
      colors: {
        "zima-yellow": "#FFAA00",
      },
    },
  },
  variants: {
    extend: {}
  },
  plugins: [
    require("@tailwindcss/typography"), // https://tailwindcss.com/docs/typography-plugin
    require("tailwindcss-animated"), // https://www.tailwindcss-animated.com/configurator.html
  ],
}
