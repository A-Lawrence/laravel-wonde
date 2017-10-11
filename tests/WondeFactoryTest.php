<?php

namespace ALawrence\Tests\LaravelWonde;

use Wonde\Client;
use ALawrence\LaravelWonde\WondeFactory;
use GrahamCampbell\TestBench\AbstractTestCase as AbstractTestBenchTestCase;

class WondeFactoryTest extends AbstractTestBenchTestCase
{
    public function testMakeStandard()
    {
        $factory = $this->getWondeFactory();

        $return = $factory->make(['token' => 'your-token']);

        $this->assertInstanceOf(Client::class, $return);
    }

    /**
     * @expectedException \InvalidArgumentException
     *
     * @expectedExceptionMessage Wonde configuration token required.
     */
    public function testMakeWithoutToken()
    {
        $factory = $this->getWondeFactory();
        $factory->make(['app' => 'your-app']);
    }

    protected function getWondeFactory()
    {
        return new WondeFactory();
    }
}