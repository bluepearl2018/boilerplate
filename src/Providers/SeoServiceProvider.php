<?php

namespace Eutranet\Boilerplate\Providers;

use App\Providers\AppServiceProvider as BaseAppServiceProvider;

/**
 * Service providers are a great place to define macros for your app.
 * App\Providers\AppServiceProvider boot() is a good starting point,
 * but can quickly become bloated. The next step is to create an App\Providers\MacrosServiceProvider
 * and register it in config/app.php.
 */
class SeoServiceProvider extends BaseAppServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
    }
}
