<?php

namespace App\Providers;

use App\Repositories\CategoriesRepository;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (app()->environment('production')) {
            URL::forceScheme('https');
        }

        View::composer('layouts.header', function ($view) {
            $categoriesRepository = app(CategoriesRepository::class);
            $view->with('categories', $categoriesRepository->getParentCategories());
        });
    }
}
