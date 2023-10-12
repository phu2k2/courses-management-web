<?php

namespace App\Providers;

use App\Repositories\Interfaces\LessonRepositoryInterface;
use App\Repositories\LessonRepository;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\RegisterRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(
            UserRepositoryInterface::class,
            UserRepository::class
        );

        $this->app->singleton(
            LessonRepositoryInterface::class,
            LessonRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
