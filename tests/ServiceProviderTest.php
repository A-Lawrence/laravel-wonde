<?php

namespace ALawrence\Tests\LaravelWonde;

use ALawrence\LaravelWonde\WondeManager;
use GrahamCampbell\TestBenchCore\ServiceProviderTrait;
use Wonde\Client;
use ALawrence\LaravelWonde\WondeFactory;

class ServiceProviderTest extends AbstractTestCase
{
    use ServiceProviderTrait;

    public function testWondeFactoryIsInjectable()
    {
        $this->assertIsInjectable(WondeFactory::class);
    }

    public function testWondeManagerIsInjectable(){
        $this->assertIsInjectable(WondeManager::class);
    }

    public function testBindings(){
        $this->assertIsInjectable(Client::class);

        $original = $this->app['wonde.connection'];
        $this->app['wonde']->reconnect();
        $new = $this->app['wonde.connection'];

        $this->assertNotSame($original, $new);
        $this->assertEquals($original, $new);
    }
}