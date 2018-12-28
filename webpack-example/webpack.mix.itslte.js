let mix = require('laravel-mix');
mix.copyDirectory('./its-lte/dist/css/', './public/its-lte/css/');
mix.copyDirectory('./its-lte/dist/js/', './public/its-lte/js/');
mix.copyDirectory('./its-lte/dist/fonts/', './public/its-lte/fonts/');
mix.copyDirectory('./its-lte/dist/vendor/', './public/its-lte/vendor/');
mix.disableNotifications();