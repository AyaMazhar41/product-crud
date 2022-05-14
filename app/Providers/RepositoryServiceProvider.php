<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\ProductRepositoryInterface;
use App\Interfaces\CartRepositoryInterface;
use App\Repositories\ProductRepository;
use App\Repositories\CartRepository;
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
