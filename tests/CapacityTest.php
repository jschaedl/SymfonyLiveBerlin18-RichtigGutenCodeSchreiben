<?php declare(strict_types=1);

namespace example;

use PHPUnit\Framework\TestCase;

class CapacityTest extends TestCase
{
    public function test_can_be_constructed_with_a_valid_capacity()
    {
        $capacity = new Capacity(100);

        $this->assertInstanceOf(Capacity::class, $capacity);
    }

    public function test_cannot_be_constructed_with_an_invalid_capacity()
    {
        $this->expectException(CapacityLessThenZeroException::class);

        new Capacity(-1);
    }
}

