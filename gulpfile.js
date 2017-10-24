var elixir = require('laravel-elixir');
var gulp = require('gulp');
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

gulp.task("copyfiles", function() {

    gulp.src("vendor/bower_dl/jquery/dist/jquery.js")
        .pipe(gulp.dest("resources/assets/js/"));

    gulp.src("vendor/bower_dl/bootstrap/dist/css/bootstrap.min.css")
        .pipe(gulp.dest("resources/assets/css"));

    gulp.src("vendor/bower_dl/bootstrap/dist/js/bootstrap.js")
        .pipe(gulp.dest("resources/assets/js/"));
    gulp.src("vendor/bower_dl/bootstrap//js/affix.js")
        .pipe(gulp.dest("resources/assets/js/"));
    gulp.src("vendor/bower_dl/bootstrap/dist/fonts/**")
        .pipe(gulp.dest("public/assets/fonts"));

});

elixir(function(mix) {
    // 合并 scripts
    mix.scripts(
        [
            'js/jquery.js',
            'js/bootstrap.js',
            'js/affix.js'
        ],
        'public/assets/js/app.js',
        'resources/assets'
    );

    mix.styles(
        [
            'bootstrap.min.css',
        ],
        'public/assets/css/app.css',
        'resources/assets/css/'
    );

});