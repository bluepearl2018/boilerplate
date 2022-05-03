<?php

namespace Eutranet\Boilerplate\Providers;

use App\Providers\AppServiceProvider as BaseAuthServiceProvider;

class AuthServiceProvider extends BaseAuthServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected array $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
        $this->registerPolicies();
    }

    private function registerPolicies()
    {
        parent:$this->registerPolicies();
    }
}
