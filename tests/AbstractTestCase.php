<?php

namespace ALawrence\Tests\LaravelWonde;

use ALawrence\LaravelWonde\WondeServiceProvider;
use GrahamCampbell\TestBench\AbstractPackageTestCase;

abstract class AbstractTestCase extends AbstractPackageTestCase
{
    /**
     * Get the service provider class.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     *
     * @return string
     */
    protected function getServiceProviderClass($app)
    {
        return WondeServiceProvider::class;
    }
}