<?php

namespace DvxgitJsoriano\Logger;

use Illuminate\Support\ServiceProvider;

class LoggerServiceProvider extends ServiceProvider {

    public function boot() {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }

    public function register() {

    }
}
