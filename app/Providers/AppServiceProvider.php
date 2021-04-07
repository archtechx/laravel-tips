<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;

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
        Model::unguard();

        view()->share('telegram', 'https://t.me/LaravelCodeTips');
        view()->share('newsletter', 'https://newsletter.laravel-code.tips');
        view()->share('twitter', 'https://twitter.com/LaravelCodeTips');
    }
}
