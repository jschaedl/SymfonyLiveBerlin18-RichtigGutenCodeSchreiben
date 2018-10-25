<?php declare(strict_types=1);

namespace example;

use PHPUnit\Framework\TestCase;

class FleetTest extends TestCase
{
    public function test_fleet_can_be_constructed(): void
    {
        $ship = new Ship(
            new Name('Berta'),
            new Capacity(100),
            new Port(new Name('Hawaii'))
        );

        $fleet = new Fleet($ship);

        $this->assertInstanceOf(Fleet::class, $fleet);
        $this->assertSame($ship, $fleet->getIterator()->current());
    }

    public function test_fleet_cannot_be_constructed_without_ships(): void
    {
        $this->expectException(FleetException::class);

        new Fleet();
    }
}
