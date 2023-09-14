<?php

namespace Cupidontech\MultiFaker;

use Illuminate\Support\ServiceProvider;

class MultiFakerServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(MultiFakerGenerator::class, function () {
            return new MultiFakerGenerator;
        });
    }
}
