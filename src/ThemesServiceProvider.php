<?php

namespace Thoomi\DcatThemes;

use Illuminate\Support\ServiceProvider;

class ThemesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . "/../assets/css/dcat-app-cuilv.css" => public_path('vendor/dcat-admin/dcat/css/dcat-app-cuilv.css')
        ]);
    }

    public function register()
    {
        $this->app->singleton('dcat-themes', function () {
            return new Themes();
        });
    }
}
