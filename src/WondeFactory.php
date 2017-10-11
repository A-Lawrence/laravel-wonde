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

namespace ALawrence\LaravelWonde;

use InvalidArgumentException;
use Wonde\Client;

/**
 * This is the main factory class for LaravelWonde.
 *
 * @author Anthony Lawrence <artisan@anthonylawrence.me.uk>
 */
class WondeFactory
{
    /**
     * Create a new Wonde Client.
     *
     * @param string[] $config
     *
     * @return \Wonde\Client
     */
    public function make(array $config)
    {
        $config = $this->getConfig($config);

        return $this->getClient($config);
    }

    /**
     * Get the configuration data.
     *
     * @param string []
     *
     * @throws \InvalidArgumentException
     *
     * @return string[]
     */
    protected function getConfig(array $config)
    {
        if (!array_key_exists('token', $config)) {
            throw new InvalidArgumentException('Your configuration data is invalid.  No authentication info.');
        }

        return array_only($config, ['token']);
    }

    /**
     * Get client.
     *
     * @param string[] $auth
     *
     * @return \Wonde\Client
     */
    protected function getClient(array $auth)
    {
        return new Client($auth['token']);
    }
}
