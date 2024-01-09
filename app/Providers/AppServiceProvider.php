<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;
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
        //
        Schema::defaultStringLength(191);
        Validator::extend('validateMP4', function ($attribute, $value, $parameters, $validator) {
            // Add your custom validation logic for MP4 files here
            // Example: Check if the file has a .mp4 extension
            return ends_with(strtolower($value), '.mp4');
        });
    }
}
