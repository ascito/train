<?php

namespace Train\Providers;

use Illuminate\Support\ServiceProvider;

class TrainServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        
    $this->publishes([
        __DIR__.'/../config/config.php' => config_path('train.php'),
    ], 'train-config');
    
    $this->publishes([
        __DIR__.'/../routes/routes.php' => base_path('routes/train.php'), 
    ], 'train-routes');
    
    if(is_readable(base_path('routes/train.php'))){
        $this->loadRoutesFrom(base_path('routes/train.php'));
    }
    
    
    }
}
