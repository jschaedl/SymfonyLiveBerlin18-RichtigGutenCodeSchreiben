<?php declare(strict_types=1);

namespace example;

use PHPUnit\Framework\TestCase;

class ShipTest extends TestCase
{
    public function test_ship_can_be_constructed(): void
    {
        $name = new Name('Berta');
        $capacity = new Capacity(100);

        $ship = new Ship(
            $name,
            $capacity
        );

        $this->assertInstanceOf(Ship::class, $ship);
        $this->assertSame($name, $ship->name());
        $this->assertSame($capacity, $ship->capacity());
    }
}
