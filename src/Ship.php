<?php

declare(strict_types=1);

namespace example;

class Ship
{
    private $name;
    private $capacity;
    private $position;
    private $targetPorts;

    public function __construct(Name $name, Capacity $capacity, Port $position, array $targetPorts)
    {
        $this->name = $name;
        $this->capacity = $capacity;
        $this->position = $position;
        $this->targetPorts = $targetPorts;
    }

    public function name(): Name
    {
        return $this->name;
    }

    public function capacity(): Capacity
    {
        return $this->capacity;
    }

    public function position(): Port
    {
        return $this->position;
    }

    /**
     * @return Port[]
     */
    public function targetPorts(): array
    {
        return $this->targetPorts;
    }
}
