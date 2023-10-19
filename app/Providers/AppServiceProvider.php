<?php

namespace App\Providers;

use App\Repositories\CourseRepository;
use App\Repositories\Interfaces\CourseRepositoryInterface;
use App\Repositories\CartRepository;
use App\Repositories\Interfaces\CartRepositoryInterface;
use App\Repositories\Interfaces\LessonRepositoryInterface;
use App\Repositories\Interfaces\ProfileRepositoryInterface;
use App\Repositories\Interfaces\TopicRepositoryInterface;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\LessonRepository;
use App\Repositories\ProfileRepository;
use App\Repositories\TopicRepository;
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

        $this->app->singleton(
            CourseRepositoryInterface::class,
            CourseRepository::class
        );

        $this->app->singleton(
            TopicRepositoryInterface::class,
            TopicRepository::class
        );
        $this->app->singleton(
            ProfileRepositoryInterface::class,
            ProfileRepository::class,
        );
        $this->app->singleton(
            CartRepositoryInterface::class,
            CartRepository::class,
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
