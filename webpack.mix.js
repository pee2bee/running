const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset(资产，优点) Management(管理部门)
 |--------------------------------------------------------------------------
 | Mix provides a clean, fluent API for defining some Webpack build steps
 Mix提供了一个干净、流畅的API来定义一些Nebpack构建步骤.
 | for your Laravel application. By default, we are compiling the Sass
 为了你的 laravel 应用程序。默认情况下，我们编译Sass文件
 | file for the application as well as bundling（捆绑） up all the JS files.
 为应用程序提交了文件，并打包了所有的Js文件。
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css').version().sourceMaps();
