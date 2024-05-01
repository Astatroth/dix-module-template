<?php

namespace $NAMESPACE$;


use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }
}