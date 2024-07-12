<?php

namespace App\Providers;

use App\Interfaces\BrandInterface;
use App\Interfaces\ItemInterface;
use App\Interfaces\KategoriInterface;
use App\Interfaces\KategoriPembayaranInterface;
use App\Interfaces\MetodePembayaranInterface;
use App\Interfaces\PenyediaPembayaranInterface;
use App\Interfaces\ProdukInterface;
use App\Interfaces\TipeInterface;
use App\Repositories\BrandRepository;
use App\Repositories\ItemRepository;
use App\Repositories\KategoriPembayaranRepository;
use App\Repositories\KategoriRepository;
use App\Repositories\MetodePembayaranRepository;
use App\Repositories\PenyediaPembayaranRepository;
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
        $this->app->bind(PenyediaPembayaranInterface::class, PenyediaPembayaranRepository::class);
        $this->app->bind(KategoriPembayaranInterface::class, KategoriPembayaranRepository::class);
        $this->app->bind(MetodePembayaranInterface::class, MetodePembayaranRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}