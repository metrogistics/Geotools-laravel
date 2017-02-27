<?php

/**
 * This file is part of the Geotools-laravel library.
 *
 * (c) Antoine Corcy <contact@sbin.dk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Toin0u\Tests\Geotools\Facade;

use Geocoder\ProviderAggregator;
use League\Geotools\Batch\Batch;
use League\Geotools\Convert\Convert;
use League\Geotools\Coordinate\Coordinate;
use League\Geotools\Distance\Distance;
use League\Geotools\Geohash\Geohash;
use League\Geotools\Vertex\Vertex;
use MetroGistics\Geotools\Facade\Geotools;
use MetroGistics\Tests\Geotools\TestCase;

/**
 * @author Antoine Corcy <contact@sbin.dk>
 */
class GeotoolsTest extends TestCase
{
    public function testCoordinate()
    {
        $this->assertInstanceOf(Coordinate::class, Geotools::coordinate('1, 2'));
    }

    public function testDistance()
    {
        $this->assertInstanceOf(Distance::class, Geotools::distance());
    }

    public function testVertex()
    {
        $this->assertInstanceOf(Vertex::class, Geotools::vertex());
    }

    public function testBatch()
    {
        $geocoder = new ProviderAggregator();

        $this->assertInstanceOf(Batch::class, Geotools::batch($geocoder));
    }

    public function testGeohash()
    {
        $this->assertInstanceOf(Geohash::class, Geotools::geohash());
    }

    public function testConvert()
    {
        $coordinate = Geotools::coordinate('1, 2');

        $this->assertInstanceOf(Convert::class, Geotools::convert($coordinate));
    }
}
