let mix = require('laravel-mix');
let $ = require('jquery');

mix.autoload({
    jquery: ['$', 'window.jQuery', 'jQuery'],
});

mix.js('resources/assets/js/app.js', 'public/js')
    .js('resources/assets/js/admin.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .sass('resources/assets/sass/admin.scss', 'public/css');
