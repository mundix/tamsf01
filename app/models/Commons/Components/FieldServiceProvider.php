<?php

namespace Commons\Components;


use Illuminate\Support\ServiceProvider;

class FieldServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app['field'] = $this->app->share(function($app){
            $fielBuilder = new FieldBuilder();
            return $fielBuilder;
        });
    }
}