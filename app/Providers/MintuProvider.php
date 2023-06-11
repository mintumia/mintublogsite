<?php

namespace App\Providers;

use App\MServiceContainer\MintuContainerInterface;
use Illuminate\Support\ServiceProvider;
use App\MServiceContainer\MintuContainer;

class MintuProvider extends ServiceProvider
{


    /**
     * Register services.
     */
    public function register(): void
    {

      //  $this->app->bind(MintuContainer::class,MintuContainer::class);
        $this->app->bind(MintuContainer::class,MintuContainerInterface::class);

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
