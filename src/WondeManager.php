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

use GrahamCampbell\Manager\AbstractManager;
use Illuminate\Contracts\Config\Repository;

/**
 * This is the main Wonde manager class.
 *
 * @method ...LIST THEM ALL...
 *
 * @author Anthony Lawrence <artisan@anthonylawrence.me.uk>
 */
class WondeManager extends AbstractManager
{
    /**
     * Factory interface.
     *
     * @var \ALawrence\LaravelWonde\WondeFactory
     */
    protected $factory;

    /**
     * Create a new Wonde manager instance.
     *
     * @param \Illuminate\Contracts\Config\Repository $config
     * @param \ALawrence\LaravelWonde\WondeFactory    $factory
     *
     * @return void
     */
    public function __construct(Repository $config, WondeFactory $factory)
    {
        parent::__construct($config);

        $this->factory = $factory;
    }

    /**
     * Get the factory instance.
     *
     * @return \ALawrence\LaravelWonde\WondeFactory
     */
    public function getFactory()
    {
        return $this->factory;
    }

    /**
     * Get the config name.
     *
     * @return string
     */
    protected function getConfigName()
    {
        return 'wonde';
    }

    /**
     * Create the connection/client instance.
     *
     * @param array $config
     *
     * @return \Wonde\Client
     */
    protected function createConnection(array $config)
    {
        return $this->factory->make($config);
    }
}
