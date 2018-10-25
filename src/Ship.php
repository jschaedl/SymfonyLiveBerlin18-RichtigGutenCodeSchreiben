<?php

declare(strict_types=1);

namespace example;

class Ship
{
    private $name;
    private $capacity;
    private $atPort = true;

    public function __construct(Name $name, Capacity $capacity)
    {
        $this->name = $name;
        $this->capacity = $capacity;
    }

    public function name(): Name
    {
        return $this->name;
    }

    public function capacity(): Capacity
    {
        return $this->capacity;
    }

    public function atPort(): bool
    {
        return $this->atPort;
    }
}
