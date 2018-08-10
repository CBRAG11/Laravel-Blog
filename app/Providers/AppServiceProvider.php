<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Billing\Stripe;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // view()->composer('posts.blog', function($view)
        //     {
        //         $view->with('archives', \App\Post::archives());
        //     });

        $this->app->singleton(Stripe::class, function()
        {
            return new Stripe(config('services.stripe.secret'));
        });
        
    }
}
