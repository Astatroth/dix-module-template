<?php

namespace $MODULE_NAMESPACE$\$STUDLY_NAME$\Providers;


use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }
}