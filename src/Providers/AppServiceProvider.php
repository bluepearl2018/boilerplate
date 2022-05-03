<?php

namespace Eutranet\Boilerplate\Providers;

use Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider;
use App\Providers\AppServiceProvider as BaseAppServiceProvider;

class AppServiceProvider extends BaseAppServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->isLocal()) {
            $this->app->register(IdeHelperServiceProvider::class);
        }
        $this->app->register(SeoServiceProvider::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    }
}
