const mix = require('laravel-mix');
require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix
    .copyDirectory('source/_assets/fonts', 'source/assets/build/fonts')
    .js('source/_assets/js/main.js', 'js')
    .sass('source/_assets/sass/main.sass', 'css/main.css')
    .jigsaw({
        watch: ['config.php', 'source/**/*.md', 'source/**/*.php', 'source/**/*.sass'],
    })
    .options({
        processCssUrls: false
    })
    .sourceMaps()
    .version();
