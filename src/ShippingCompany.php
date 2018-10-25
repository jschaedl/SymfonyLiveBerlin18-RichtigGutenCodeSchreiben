<?php

declare(strict_types=1);

namespace example;

class ShippingCompany
{
    private $name;

    /**
     * @var Fleet
     */
    private $fleet;

    public function __construct(Name $name, Fleet $fleet)
    {
        $this->name = $name;
        $this->fleet = $fleet;
    }

    public function name(): Name
    {
        return $this->name;
    }

    public function fleet(): Fleet
    {
        return $this->fleet;
    }

    public function findAvailableShip(Route $route): Ship
    {
        foreach ($this->fleet as $ship) {
            /** @var Ship $ship */
            if ($ship->position() === $route->currentPort()) {
                return $ship;
            }
        }
    }
}
