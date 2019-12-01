<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Console\Commands\RouteListCommand;

class RouteListServiceProvider extends ServiceProvider
{
    protected $commands = [
        RouteListCommand::class,
    ];
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
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands($this->commands);
    }
}
