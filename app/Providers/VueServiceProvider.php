<?php

namespace Unicorn\Providers;

use Unicorn\Services\Vue\Unicorn;
use Illuminate\Support\ServiceProvider;

class VueServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        javascript()->put([
            'message' => 'Unicorn',
        ]);

        javascript()->put((new Unicorn($this->app))->initialize());
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
