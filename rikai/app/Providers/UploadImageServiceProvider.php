<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Library\Services\UploadimageService;
use App\Library\Services\Contracts\UploadimageServiceInterface;

class UploadimageServiceProvider extends ServiceProvider
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
        //
        $this->app->bind(UploadimageServiceInterface::class,UploadimageService::class);
    }
}
