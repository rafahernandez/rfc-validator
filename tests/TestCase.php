<?php

namespace RafaHernandez\RfcValidator\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use RafaHernandez\RfcValidator\RfcValidatorServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            RfcValidatorServiceProvider::class,
        ];
    }
}
