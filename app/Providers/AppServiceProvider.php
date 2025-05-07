<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Domain\Services\TodoServices; //add Todoservices....................

use App\Domain\Services\SalaryServices; 

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('TodoServices', function ($app) {
            return new TodoServices();
        });

        $this->app->singleton('SalaryServices'::class, function ($app) {
            return new SalaryServices();
        });

        $this->app->singleton('UserServices'::class, function ($app) {
            return new UserServices();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
