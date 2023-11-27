<?php

namespace Thoomi\DcatThemes;

use Illuminate\Support\ServiceProvider;
use Thoomi\DcatThemes\Themes;

class ThemesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $themes = Themes::all();
        $publishes = [];
        foreach ($themes as $key => $colors) {
            $source = __DIR__ . "/../assets/css/dcat-app-".$key.".css";
            $to = public_path("vendor/dcat-admin/dcat/css/dcat-app-".$key.".css");
            $publishes[$source] = $to;
        }
        $this->publishes($publishes);
    }

    public function register()
    {
        $this->app->singleton('dcat-themes', function () {
            return new Themes();
        });
    }
}
