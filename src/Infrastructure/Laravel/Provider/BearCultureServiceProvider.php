<?php

namespace GuardsmanPanda\LarabearCulture\Infrastructure\Laravel\Provider;

use Illuminate\Support\ServiceProvider;

class BearCultureServiceProvider extends ServiceProvider {
    public function boot(): void {
        if ($this->app->runningInConsole()) {
            $this->commands(commands: [
            ]);
            $this->publishes(paths: [__DIR__ . '/../../../../assets/public' => $this->app->basePath(path: 'public'),], groups: 'bear-locale');
            $this->loadMigrationsFrom(paths: [ __DIR__.'/../../../Migration']);
        }
    }
}
