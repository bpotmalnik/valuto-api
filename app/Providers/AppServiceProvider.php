<?php

namespace App\Providers;

use Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerIdeHelper();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    protected function registerIdeHelper(): void
    {
        if ($this->app->isLocal()) {
            $this->app->register(IdeHelperServiceProvider::class);
        }
    }
}
