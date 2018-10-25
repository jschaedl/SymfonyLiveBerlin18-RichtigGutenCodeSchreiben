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
                new Capacity(100)
            )
        );

        $shippingCompany = new ShippingCompany($name, $fleet);

        $this->assertInstanceOf(ShippingCompany::class, $shippingCompany);

        $this->assertSame($name, $shippingCompany->name());
        $this->assertSame($fleet, $shippingCompany->fleet());
    }
}
