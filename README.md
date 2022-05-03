## Eutranet Boilerplate
# Installation
- laravel version 9
- configure .env
- composer update
- php artisan serve

# Third's Package installation 
- https://github.com/barryvdh/laravel-ide-helper
- npm i
- npm install -D tailwindcss https://tailwindcss.com/docs/installation
- npx tailwindcss init
- update resources/app/app.css
- npm i @tailwindcss/typography
- npm i @tailwindcss/forms
- npm i @tailwindcss/aspect-ratio
- npm i @tailwindcss/ui
- npm i postcss-import
- npm i autoprefixer
- npm install --save @fortawesome/fontawesome-free
- npm install alpine
- php artisan breeze:install
- php artisan vendor:publish
- npm run dev

# Laravel Init
- 
- repositories array in composer for each package
- composer require eutranet/laravel-init, symlink true
- php artisan eutranet:init
- php artisan optimize
- visit http://127.0.0.1:8000/init

# Laravel Theme
- upload package and add entry to composer.json repositories array, with symlink
- composer require eutranet/laravel-theme
- php artisan eutranet:intall-theme
- php artisan optimize
- visit http://127.0.0.1:8000/init
- https://ckeditor.com/docs/ckeditor5/latest/installation/advanced/alternative-setups/integrating-from-source.html 
- https://www.positronx.io/how-to-install-integrate-ckeditor-in-laravel/

# Laravel Commons
- upload package and add entry to composer.json repositories array, with symlink
- composer require eutranet/laravel-commons
- php artisan eutranet:intall-commons
- php artisan optimize
- visit http://127.0.0.1:8000/init

# Laravel Setup
- upload package and add entry to composer.json repositories array, with symlink
- composer require eutranet/laravel-setup
- make sure the config/auth.php has the "core guards"
- make sure the default constants are set in RouteServiceProvider
- delete default controllers in App\Http\Controllers\Auth 
- php artisan eutranet:intall-setup
- delete app/routes/auth.php
- delete include in app/routes/web.php
- php artisan optimize
- visit http://127.0.0.1:8000/init
- visit http://127.0.0.1:8000/setup/login

# Laravel Setup
- npm i swiper (frontend slider)
- @import in css
