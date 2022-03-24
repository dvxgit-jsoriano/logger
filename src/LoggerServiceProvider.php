<?php

namespace DvxgitJsoriano\Logger;

use Illuminate\Support\ServiceProvider;

class LoggerServiceProvider extends ServiceProvider {

    public function boot() {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        $this->publishes([
            __DIR__.'/config/jsoriano-logger.php' => config_path('jsoriano-logger.php'),
        ], 'jsoriano-config');
    }

    public function register() {

    }
}
