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

namespace ALawrence\LaravelWonde\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * This is the Wonde facade class.
 *
 * @author Anthony Lawrence <artisan@anthonylawrence.me.uk>
 */
class Wonde extends Facade
{
    /**
     * Get the register name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'wonde';
    }
}
