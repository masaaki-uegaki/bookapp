<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services;

class BookServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(BookService::class, BookService::class);
    }
}
