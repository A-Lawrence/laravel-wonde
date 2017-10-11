<?php

namespace ALawrence\LaravenWonde;

use Wonde\Client;
use \InvalidArgumentException;

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
            throw new InvalidArgumentException("Your configuration data is invalid.  No authentication info.");
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