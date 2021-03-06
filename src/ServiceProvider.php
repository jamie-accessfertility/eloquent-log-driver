<?php

declare(strict_types=1);

namespace JustSteveKing\EloquentLogDriver;

use JustSteveKing\EloquentLogDriver\Logger\EloquentLogger;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../database/migrations/2020_02_27_003343_create_logs_table.php' =>
            database_path("/migrations/2020_02_27_003343_create_logs_table.php")
        ], 'migrations');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }

    public function register()
    {
        //
    }
}
