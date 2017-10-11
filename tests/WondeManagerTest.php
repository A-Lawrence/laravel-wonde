<?php

namespace ALawrence\Tests\LaravelWonde;

use Wonde\Client;
use ALawrence\LaravelWonde\WondeFactory;
use ALawrence\LaravelWonde\WondeManager;
use GrahamCampbell\TestBench\AbstractTestCase as AbstractTestBenchTestCase;
use Illuminate\Contracts\Config\Repository;
use Mockery;

class WondeManagerTest extends AbstractTestBenchTestCase
{
    public function testCreateConnection()
    {
        $config = ['path' => __DIR__];

        $manager = $this->getManager($config);

        $manager->getConfig()->shouldReceive('get')->once()
                ->with('wonde.default')->andReturn('wonde');

        $this->assertSame([], $manager->getConnections());

        $return = $manager->connection();

        $this->assertInstanceOf('Wonde\Client', $return);

        $this->assertArrayHasKey('wonde', $manager->getConnections());
    }

    protected function getManager(array $config)
    {
        $repo = Mockery::mock(Repository::class);

        $factory = Mockery::mock(WondeFactory::class);

        $manager = new WondeManager($repo, $factory);

        $manager->getConfig()->shouldReceive('get')->once()
                ->with('wonde.connections')->andReturn(['wonde' => $config]);

        $config['name'] = 'wonde';

        $manager->getFactory()->shouldReceive('make')->once()
                ->with($config)->andReturn(Mockery::mock(Client::class));

        return $manager;
    }
}