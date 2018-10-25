<?php declare(strict_types=1);
/*
 * This is example code that is not production-ready. It is intended for studying and learning purposes.
 *
 * (c) 2018 thePHP.cc. All rights reserved.
 */
namespace example;

use PHPUnit\Framework\TestCase;

/**
 * @covers \example\Port
 */
final class PortTest extends TestCase
{
    public function test_can_be_constructed_with_a_valid_name(): void
    {
        $name = new Name('Westhafen');
        $port = new Port($name);

        $this->assertSame($name, $port->name());
    }
}
