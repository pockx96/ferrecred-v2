const mix = require('laravel-mix');

mix
    .js('resources/js/app.js', 'public/js')
    .Css('resources/css/app.css', 'public/css')
    .browserSync('localhost:8000');
