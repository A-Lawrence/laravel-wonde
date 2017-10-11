<?php

namespace ALawrence\LaravelWonde\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * This is the Wonde facade class.
 *
 * @author Anthony Lawrence <artisan@anthonylawrence.me.uk>
 */
class Dropbox extends Facade
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