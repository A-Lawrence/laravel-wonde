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

return [

    /*
    |--------------------------------------------------------------------------
    | Default Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the connections below you wish to use as
    | your default connection for all work. Of course, you may use many
    | connections at once using the manager class.
    |
    */

    'default' => 'main',

    /*
    |--------------------------------------------------------------------------
    | Wonde Connections
    |--------------------------------------------------------------------------
    |
    | Here you can add specific connection types that you may wish to use when
    | communicating with Wonde's API.  There is a stock entry, but
    | it is possible to add more, and dynamically switch.
    |
    */

    'connections' => [

        'main' => [
            'token'  => env('wonde_token', null),
            'school' => env('wonde_school', null), //Only required if a SINGLE school app.
        ],

    ],

];
