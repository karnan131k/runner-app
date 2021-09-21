<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\RunnerRepository;
use App\Repositories\RunnerRepositoryInterface;
class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(RunnerRepositoryInterface::class,RunnerRepository::class);
    }
}
