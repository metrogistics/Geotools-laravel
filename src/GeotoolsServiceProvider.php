<?php

/**
 * This file is part of the Geotools-laravel library.
 *
 * (c) Antoine Corcy <contact@sbin.dk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace MetroGistics\Geotools;

use Illuminate\Support\ServiceProvider;

/**
 * Geotools service provider
 *
 * @author Antoine Corcy <contact@sbin.dk>
 */
class GeotoolsServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('geotools', function() {
            return new Geotools;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'geotools',
        ];
    }
}
