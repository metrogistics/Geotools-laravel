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

use MetroGistics\Geotools\Facade\Geotools;
use MetroGistics\Geotools\GeotoolsServiceProvider;

/**
 * @author Antoine Corcy <contact@sbin.dk>
 */
class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            GeotoolsServiceProvider::class,
        ];
    }
    protected function getPackageAliases($app)
    {
        return [
            'Geotools' => Geotools::class,
        ];
    }
}
