<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\Models\User;
use App\Models\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // View::share('signedIn', \Auth::check());
        // View::share('user', \Auth::user());
        View::composer('*', function ($view) {
            $view->with('user', Auth::user());
        });

        View::composer('*', function ($view) {
            $view->with('categoryparent',Category::where('parent_id','=','0')->get());
        });
    }
}
