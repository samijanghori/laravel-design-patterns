<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\interfaces\TodoInterface;
use App\Repositories\TodoRepository;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->bind(TodoInterface::class,TodoRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
