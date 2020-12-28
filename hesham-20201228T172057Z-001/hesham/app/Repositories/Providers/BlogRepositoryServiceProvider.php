<?php

namespace App\Repositories\Providers;
use Illuminate\Support\ServiceProvider;

class BlogRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Repositories\Contracts\BlogRepositoryInterface',
            'App\Repositories\Eloquent\BlogRepository'

        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
