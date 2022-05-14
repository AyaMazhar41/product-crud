<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\ProductRepositoryInterface;
use App\Interfaces\CartRepositoryInterface;
use App\Interfaces\ReviewRepositoryInterface;
use App\Repositories\ProductRepository;
use App\Repositories\CartRepository;
use App\Repositories\ReviewRepository;
class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
        $this->app->bind(CartRepositoryInterface::class,CartRepository::class);
        $this->app->bind(ReviewRepositoryInterface::class,ReviewRepository::class);

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
