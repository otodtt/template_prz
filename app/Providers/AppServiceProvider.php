<?php

namespace App\Providers;

use Validator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('cyrillic_with', function($attribute, $value)
        {
            $pattern = "/^[\p{Cyrillic}0-9\s -\ –\"\'\-\, _\.\; \“ \” \„ \” \/ ! ? ! ? N № 0-9]+$/u";
            return trim(preg_match($pattern, $value));
        });

        Validator::extend('latin', function($attribute, $value)
        {
            $pattern = '/^[\w\d\s-_ -]*$/';
            return trim(preg_match($pattern, $value));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
