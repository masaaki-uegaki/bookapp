<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerComponents();
    }

    /**
     * Register Blade components.
     *
     * @return void
     */
    private function registerComponents(): void {
        Blade::component('components.navbar', 'navbar');
        Blade::component('components.new-book', 'newBook');
        Blade::component('components.book-list', 'bookList');
    }
}
