<?php

namespace App\Repositories\Providers;
use Illuminate\Support\ServiceProvider;

class BlogCategoryRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Repositories\Contracts\BlogCategoryRepositoryInterface',
            'App\Repositories\Eloquent\BlogCategoryRepository'

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
