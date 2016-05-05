var elixir = require('laravel-elixir');
var elixirTypscript = require('elixir-typescript');
/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix
        .sass('app.scss')
        .copy('node_modules/@angular', 'public/@angular')
        .copy('node_modules/rxjs', 'public/rxjs')
        .copy('node_modules/systemjs', 'public/systemjs')
        .copy('node_modules/es6-shim', 'public/es6-shim')
        .copy('node_modules/zone.js/dist', 'public/zone')
        .typescript('boot.js','public','/**/*.ts',{
            "target": "ES5",
            "module": "system",
            "moduleResolution": "node",
            "sourceMap": true,
            "emitDecoratorMetadata": true,
            "experimentalDecorators": true,
            "removeComments": false,
            "noImplicitAny": false
        });
});
