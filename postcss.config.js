let tailwindcss = require('tailwindcss'); // inside node module


module.exports = {
  plugins: [
    tailwindcss('./tailwind.config.js'),
    require('postcss-import'),
    require('autoprefixer')
  ],
}
