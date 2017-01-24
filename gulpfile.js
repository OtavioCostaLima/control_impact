const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');
require('laravel-elixir-vueify');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir((mix) => {
   
    mix.styles(['../../../node_modules/bootstrap/css/bootstrap.css'], 'public/css/style.css');
 
   mix.browserife('main.js');
    
});
