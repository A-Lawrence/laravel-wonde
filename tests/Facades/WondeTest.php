<?php

/*
 * This file is part of Laravel Wonde.
 *
 * (c) Anthony Lawrence <artisan@anthonylawrence.me.uk>
 *
 * Based on the Laravel Manager package by Graham Campbell.
 *
 * For the full copyright and license information, please view the
 * LICENSE file which was distributed with this source code.
 */

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
