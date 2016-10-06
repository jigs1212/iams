var elixir = require('laravel-elixir');
var wiredep = require('wiredep').stream;
var gulp = require('gulp');
var chalk = require('chalk');
var shell = require('gulp-shell');
var gutil = require('gulp-util');



/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.less('app.less');
});

gulp.task('migrate', shell.task([
    'php artisan migrate --path=database/migrations --ansi'
]));

gulp.task('bower', function () {
    gulp.src(['./resources/views/theme/layout/master.blade.php'])
        .pipe(wiredep({
            ignorePath: '../../../../public',
            onFileUpdated: function(filePath){
                console.log(chalk.red.bold("Updated: ") + chalk.black(filePath));
            },
            fileTypes: {
                php: {
                    replace: {
                        js: '<script src="{{ url(\'{{filePath}}\') }}"></script>',
                        css: '<link rel="stylesheet" href="{{ url(\'{{filePath}}\') }}" />'
                    }
                }
            }
        }))
        .pipe(gulp.dest('./resources/views/theme/layout'))
    gulp.src(['./resources/views/theme/layout/admin/master.blade.php'])
        .pipe(wiredep({
            ignorePath: '../../../../../public',
            onFileUpdated: function(filePath){
                console.log(chalk.red.bold("Updated: ") + chalk.black(filePath));
            },
            fileTypes: {
                php: {
                    replace: {
                        js: '<script src="{{ url(\'{{filePath}}\') }}"></script>',
                        css: '<link rel="stylesheet" href="{{ url(\'{{filePath}}\') }}" />'
                    }
                }
            }
        }))
        .pipe(gulp.dest('./resources/views/theme/layout/admin'))
});

