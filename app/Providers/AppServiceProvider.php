<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // लाइव सर्वर (Render) पर जबरदस्ती HTTPS चालू करने के लिए
        if (config('app.env') === 'production' || env('APP_URL') && str_contains(env('APP_URL'), 'https://')) {
            URL::forceScheme('https');
        }
    }
}
