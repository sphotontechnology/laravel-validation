<?php

namespace Sphoton\Validation;

use Illuminate\Support\ServiceProvider;

class ValidationServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/../lang', 'sphoton');
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../lang' => $this->langPath('vendor/sphoton'),
            ]);
        }
    }

    protected function langPath(mixed $path = ''): string
    {
        if (method_exists($this->app, 'langPath')) {
            return $this->app->langPath($path);
        }

        return $this->app->resourcePath('lang/'.$path);
    }
}
