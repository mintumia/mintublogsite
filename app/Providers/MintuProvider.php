<?php

namespace App\Providers;

use App\MServiceContainer\Mintu2Container;
use App\MServiceContainer\MintuContainerInterface;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;
//use Illuminate\Support\Facades\Storage;
//use App\MServiceContainer\MintuContainer;
use App\MServiceContainer\MintuContainer;

class MintuProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register services.
     */
    public function register():void
    {
       // $this->app->bind(MintuContainer::class,MintuContainerInterface::class);
        /*$this->app->bind(MintuContainer::class,function (){
            return new MintuContainer(" Hellos");
        });*/

        $this->app->singleton(MintuContainer::class,function () {

           // $text = "mintu--".rand(1,500);
            return new MintuContainer("mintu--".rand(1,500),"Mintu Mia");
        });


        /*$this->app->when(MintuContainer::class)
            ->needs(MintuContainer::class)
            ->give(function (){
              return new MintuContainer("mintu--".rand(1,500),"Mintu Mia");
            });*/


    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
    public function provides():array
    {

        return [MintuContainer::class];
        //return parent::provides(); // TODO: Change the autogenerated stub
    }

}
