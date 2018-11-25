var gulp = require('gulp');
const elixir = require('laravel-elixir');
elixir.config.sourcemaps = true;
elixir(mix =>
    {
       mix
        /*
         * Version
         */
        .version(
            [
                'css/app.css',
                'js/app.js'
            ]
        );
    }
);
