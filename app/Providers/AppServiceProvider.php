<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema; 
use App\Reposetories\IcategorieReposetory; 
use App\Reposetories\Implementation\CategorieImpl;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(IcategorieReposetory::class, CategorieImpl::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //$this->app->bind(IcategorieReposetory::class, CategorieImpl::class);
        Schema::defaultStringLength(191);
    }
}
