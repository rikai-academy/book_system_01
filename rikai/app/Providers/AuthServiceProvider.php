<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Library\Services\Contracts\SocialGoogleServiceInterface;
use App\Library\Services\SocialGoogleService;
use App\Library\Services\Contracts\SocialFacebookServiceInterface;
use App\Library\Services\SocialFacebookService;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        $this->app->bind(SocialFacebookServiceInterface::class,SocialFacebookService::class);
        $this->app->bind(SocialGoogleServiceInterface::class,SocialGoogleService::class);
    }
}
