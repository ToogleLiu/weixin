<?php

namespace Toogleliu\Weixin;

use Illuminate\Support\ServiceProvider;

class WeixinServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('weixin', function () {
            return new Weixin;
        });
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/weixin.php' => config_path('weixin.php'),
        ], 'weixin-config');
    }
}