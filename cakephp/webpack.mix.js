const mix = require('laravel-mix');

mix.setPublicPath('webroot');
// mix.sass('webroot/sass/app.scss', 'webroot/css/');
mix.less('webroot/less/app.less', 'webroot/css/');
mix.js('webroot/javascript/app.js', 'webroot/js/');
