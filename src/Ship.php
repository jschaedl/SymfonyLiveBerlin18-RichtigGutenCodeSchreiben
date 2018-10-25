<?php

declare(strict_types=1);

namespace example;

class Ship
{
    private $name;
    private $capacity;
    private $position;

    public function __construct(Name $name, Capacity $capacity, Position $position)
    {
        $this->name = $name;
        $this->capacity = $capacity;
        $this->position = $position;
    }

    public function name(): Name
    {
        return $this->name;
    }

    public function capacity(): Capacity
    {
        return $this->capacity;
    }

    public function isAtPort(): bool
    {
        return $this->position instanceof Port;
    }

    public function isOnSea(): bool
    {
        return $this->position instanceof Sea;
    }

    public function position(): Position
    {
        return $this->position;
    }
}
