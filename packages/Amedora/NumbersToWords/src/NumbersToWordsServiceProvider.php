<?php

namespace Amedora\NumbersToWords;

use Illuminate\Support\ServiceProvider;

class NumbersToWordsServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bindShared("towords",function(){
            return new NumbersToWords();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('towords');
    }
}