<?php

declare(strict_types=1);

namespace example;

class Fleet implements \IteratorAggregate
{
    /**
     * @var Ship[]
     */
    private $ships;

    public function __construct(Ship ...$ships)
    {
        if (empty($ships)) {
            throw FleetException::fleetMustContainAtLeastOneShip();
        }

        $this->ships = $ships;
    }

    public function getIterator(): \Iterator
    {
        return new \ArrayIterator($this->ships);
    }
}
