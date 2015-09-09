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

elixir(function (mix) {
    mix.sass('app.scss');

    mix.scripts([
        'vendor/jquery/dist/jquery.js',
        'vendor/bootstrap/dist/js/bootstrap.js',
        'vendor/prism/prism.js',
        'vendor/prism/components/prism-php.js',
        'vendor/prism/plugins/line-numbers/prism-line-numbers.js',
        'vendor/scotchPanels/dist/scotchPanels.js',
        'js/Sidebar.js',
        'js/app.js'
    ], elixir.config.publicPath + '/' + elixir.config.js.outputFolder + '/scripts.js', elixir.config.assetsPath);

    mix.version([
        'css/app.css',
        'js/scripts.js'
    ])
});
