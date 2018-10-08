let mix = require('laravel-mix');
require('laravel-mix-tailwind');
require('laravel-mix-purgecss');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
    .tailwind()
    .purgeCss({
        whitelist: [
            'button--green',
            'button--blue',
            'vyper-6786-form',
            'vyper-6786-button',
            'vyper-6786-button',
            'gdpr_checkbox',
        ]
    })
    .browserSync('briqchain.local');