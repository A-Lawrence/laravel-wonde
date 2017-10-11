<?php

namespace ALawrence\Tests\LaravelWonde\Facades;

use ALawrence\LaravelWonde\Facades\Wonde;
use ALawrence\LaravelWonde\WondeManager;
use ALawrence\Tests\LaravelWonde\AbstractTestCase;
use GrahamCampbell\TestBenchCore\FacadeTrait;

class WondeTest extends AbstractTestCase
{
    use FacadeTrait;

    /**
     * Get the facade accessor.
     *
     * @return string
     */
    protected function getFacadeAccessor()
    {
        return 'wonde';
    }

    /**
     * Get the facade class.
     *
     * @return string
     */
    protected function getFacadeClass()
    {
        return Wonde::class;
    }

    /**
     * Get the facade root.
     *
     * @return string
     */
    protected function getFacadeRoot()
    {
        return WondeManager::class;
    }
}