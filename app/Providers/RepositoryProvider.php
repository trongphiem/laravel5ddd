<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use App\Repositories\SampleInterface;
use App\Repositories\SampleRepository;

class RepositoryProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
     
        $this->app->bind(SampleInterface::class, SampleRepository::class);
    }
}
