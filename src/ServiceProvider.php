<?php

namespace BrianFaust\Eloquent\Schema;

use BrianFaust\Eloquent\Schema\Connectors\ConnectionFactory;

class ServiceProvider extends \BrianFaust\ServiceProvider\ServiceProvider
{
    /**
     * Register the application services.
     */
    public function register()
    {
        parent::register();

        $this->app->singleton('db.factory', function ($app) {
            return new ConnectionFactory($app);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array_merge(parent::provides(), ['db.factory']);
    }

    /**
     * Get the default package name.
     *
     * @return string
     */
    public function getPackageName()
    {
        return 'database';
    }
}
