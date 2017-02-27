<?php

/**
 * This file is part of the Geotools-laravel library.
 *
 * (c) Antoine Corcy <contact@sbin.dk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace MetroGistics\Tests\Geotools;

use MetroGistics\Geotools\GeotoolsServiceProvider;

/**
 * @author Antoine Corcy <contact@sbin.dk>
 */
class GeotoolsServiceProviderTest extends TestCase
{
    public function testLoadedProviders()
    {
        $loadedProviders = $this->app->getLoadedProviders();

        $this->assertArrayHasKey(GeotoolsServiceProvider::class, $loadedProviders);
        $this->assertTrue($loadedProviders[GeotoolsServiceProvider::class]);
    }

    public function testGeotools()
    {
        $this->assertInstanceOf('League\\Geotools\\Geotools', $this->app['geotools']);
    }
}
