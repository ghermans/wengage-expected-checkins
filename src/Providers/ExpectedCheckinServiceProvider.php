<?php

namespace Wengage\ExpectedCheckin\Providers;

use Illuminate\Support\ServiceProvider;

class ExpectedCheckinServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'expectedcheckin');

        $this->publishes([
            __DIR__.'/../resources/views/notifications/markdown/expected-checkin.blade.php' => resource_path('views/notifications/markdown/expected-checkin.blade.php')
        ], 'expected-checkin');
    }
}