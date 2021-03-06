<?php
declare(strict_types=1);

namespace ShlinkioTest\Shlink\Core\Options;

use PHPUnit\Framework\TestCase;
use Shlinkio\Shlink\Core\Options\AppOptions;
use Shlinkio\Shlink\Core\Options\AppOptionsFactory;
use Zend\ServiceManager\ServiceManager;

class AppOptionsFactoryTest extends TestCase
{
    /**
     * @var AppOptionsFactory
     */
    protected $factory;

    public function setUp()
    {
        $this->factory = new AppOptionsFactory();
    }

    /**
     * @test
     */
    public function serviceIsCreated()
    {
        $instance = $this->factory->__invoke(new ServiceManager([]), '');
        $this->assertInstanceOf(AppOptions::class, $instance);
    }
}
