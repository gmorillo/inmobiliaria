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
let mix = require('laravel-mix');
let fs = require('fs');

mix
    .copy(
        'node_modules/angular-toastr/dist/angular-toastr.min.css',
        'public/css/angular-toastr.min.css'
    )
    .copy(
        'node_modules/angular-material/angular-material.min.css',
        'public/css/angular-material.min.css'
    )
class Rules {
    webpackRules() {
    }
    babelConfig() {
        return {
            presets: ['es2015', 'stage-2'],
            plugins: ['transform-runtime'],
        }
    }
}

mix.extend('babel', new Rules());

const walkSync = (dir) => {
    files = fs.readdirSync(dir);
    let filelist = [];
    files.forEach(function(file) {
        if (fs.statSync(path.join(dir, file)).isDirectory()) {
            let temp = walkSync(path.join(dir, file))
            filelist.push(...temp)
        }
        else {
            filelist.push(path.join(dir, file));
        }
    });
    return filelist;
}
const javascriptFiles = [];
const foldersCore = [
    'resources/assets/js/components',
    'resources/assets/js/directives',
    'resources/assets/js/services',
    'resources/assets/js/controllers'
];

foldersCore.forEach((folder) => {
    walkSync(folder).map(file => file).forEach(item => {
        javascriptFiles.push(item)
    });
});

mix.js(
    [
        'resources/assets/js/app.js',
        ...javascriptFiles
    ], 'public/js/app.js'
);


mix.js('resources/assets/js/bootstrap.js', 'public/js/bootstrap.js');
mix.js('resources/assets/js/angular.js', 'public/js/angular.js');
mix.sass('resources/assets/sass/app.scss', 'public/css');
mix.copy('resources/assets/js/lozad.min.js','public/js/lozad.min.js');
