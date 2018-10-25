<?php declare(strict_types=1);

namespace example;

use PHPUnit\Framework\TestCase;

class ShippingCompanyTest extends TestCase
{
    public function test_shipcompany_can_be_constructed(): void
    {
        $name = new Name('Company');
        $fleet = new Fleet(
            new Ship(
                new Name('Berta'),
                new Capacity(100),
                new Port(new Name('Hongkong'))
            )
        );

        $shippingCompany = new ShippingCompany($name, $fleet);

        $this->assertInstanceOf(ShippingCompany::class, $shippingCompany);

        $this->assertSame($name, $shippingCompany->name());
        $this->assertSame($fleet, $shippingCompany->fleet());
    }
    
    public function test_can_find_available_ship_for_route()
    {
        $aPort = new Port(new Name('Hongkong'));
        $anotherPort = new Port(new Name('Hawaii'));

        $ship = new Ship(
            new Name('Berta'),
            new Capacity(10),
            $aPort
        );

        $shippingCompany = new ShippingCompany(
            new Name('Berta'),
            new Fleet($ship)
        );

        $route = new Route([
            $aPort,
            $anotherPort
        ]);

        $availableShip = $shippingCompany->findAvailableShip($route);

        $this->assertSame($ship, $availableShip);
    }
}
