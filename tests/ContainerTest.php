<?php declare(strict_types=1);
/*
 * This is example code that is not production-ready. It is intended for studying and learning purposes.
 *
 * (c) 2018 thePHP.cc. All rights reserved.
 */
namespace example;

use PHPUnit\Framework\TestCase;

/**
 * @covers \example\Container
 */
final class ContainerTest extends TestCase
{
    /**
     * @testdox Can be constructed with valid container id and valid port
     */
    public function test_can_be_constructed(): void
    {
        $id = ContainerId::fromString('CSQU3054383');
        $port = new Port('Westhaven');

        $container = new Container($id, $port);

        $this->assertInstanceOf(Container::class, $container);

        $this->assertSame($id, $container->id());
        $this->assertSame($port, $container->port());
    }
}
