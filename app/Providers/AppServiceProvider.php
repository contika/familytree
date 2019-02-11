<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider {

    public $version = "0.0.2";

    public function boot() {
        Schema::defaultStringLength(191);
        $presets = [
            'version' => $this->version
            ];
        config($presets);
    }


    public function register() {

    }

}
