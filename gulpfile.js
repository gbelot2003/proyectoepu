var elixir = require('laravel-elixir');

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
    mix.sass('app.scss');
    mix.scripts(
        ['app/recomendaciones.js'],
        'public/js/recomendaciones.js'
    );

    mix.scripts(
        ['angular.js',
         'angular-animate.js',
         'angular-touch',
         'angular-sanitize.js',
         'angular-resource.js',
         'ng-bootstrap/ng2-bootstrap.js',
         'satellizer.js',
         'select.js',
         'ngToast.js'
        ],
        'public/js/angular.js'
    );

});
