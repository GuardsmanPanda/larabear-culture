<?php

namespace GuardsmanPanda\LarabearCulture\Provider;

use Illuminate\Support\ServiceProvider;

class BearCultureServiceProvider extends ServiceProvider {
    public function boot(): void {
        if ($this->app->runningInConsole()) {
            $this->commands(commands: [
            ]);
            $this->loadMigrationsFrom(paths: [ __DIR__.'/../Migration']);
        }
    }
}
