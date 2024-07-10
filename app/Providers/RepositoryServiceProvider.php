<?php

namespace App\Providers;

use App\Interfaces\BrandInterface;
use App\Interfaces\ItemInterface;
use App\Interfaces\KategoriInterface;
use App\Interfaces\ProdukInterface;
use App\Interfaces\TipeInterface;
use App\Repositories\BrandRepository;
use App\Repositories\ItemRepository;
use App\Repositories\KategoriRepository;
use App\Repositories\ProdukRepository;
use App\Repositories\TipeRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(ProdukInterface::class, ProdukRepository::class);
        $this->app->bind(KategoriInterface::class, KategoriRepository::class);
        $this->app->bind(BrandInterface::class, BrandRepository::class);
        $this->app->bind(TipeInterface::class, TipeRepository::class);
        $this->app->bind(ItemInterface::class, ItemRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}