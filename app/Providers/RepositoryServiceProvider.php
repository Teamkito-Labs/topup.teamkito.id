<?php

namespace App\Providers;

use App\Interfaces\KategoriInterface;
use App\Interfaces\ProdukInterface;
use App\Repositories\KategoriRepository;
use App\Repositories\ProdukRepository;
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
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}