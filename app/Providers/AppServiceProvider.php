<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Console\Commands\RouteListCommand;

class AppServiceProvider extends ServiceProvider
{
    protected $commands = [
        RouteListCommand::class,
    ];
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
