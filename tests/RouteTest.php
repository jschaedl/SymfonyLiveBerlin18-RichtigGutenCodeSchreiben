<?php declare(strict_types=1);

namespace example;

use PHPUnit\Framework\TestCase;

class RouteTest extends TestCase
{
    public function test_route_can_be_constructed()
    {
        $ports = [
            new Port(new Name('Osthafen')),
            new Port(new Name('Westhafen'))
        ];

        $route = new Route($ports);

        $this->assertInstanceOf(Route::class, $route);
    }

    public function test_route_cant_be_constructed_with_less_than_two_ports(): void
    {
        $this->expectException(RouteException::class);
        $this->expectExceptionMessage('Route must have at least two ports');

        $ports = [
            new Port(new Name('Westhafen'))
        ];

        new Route($ports);
    }

    public function test_advance_position_changes_current_position()
    {
        $ports = [
            $start = new Port(new Name('Osthafen')),
            $end = new Port(new Name('Westhafen'))
        ];

        $route = new Route($ports);

        $this->assertSame($start, $route->currentPort());
        $route->advancePort();
        $this->assertSame($end, $route->currentPort());
    }

    public function test_cannot_advance_position_if_route_is_finished()
    {
        $ports = [
            $start = new Port(new Name('Osthafen')),
            $end = new Port(new Name('Westhafen'))
        ];

        $route = new Route($ports);

        $this->assertSame($start, $route->currentPort());
        $route->advancePort();
        $this->assertSame($end, $route->currentPort());

        $this->expectException(RouteException::class);
        $this->expectExceptionMessage('Ship already reached end of route');
        $route->advancePort();
    }
}
