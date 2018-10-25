<?php declare(strict_types=1);

namespace example;

class Route
{
    /**
     * @var Port[]
     */
    private $ports;

    private $position;

    /**
     * @param Port[] $ports
     */
    public function __construct(array $ports)
    {
        if (count($ports) < 2) {
            throw RouteException::routeMustHaveAtLeastTwoPorts();
        }

        $this->ports = $ports;
        $this->position = 0;
    }

    public function currentPort(): Port
    {
        return $this->ports[$this->position];
    }

    public function advancePort(): void
    {
        if ($this->position === count($this->ports) - 1) {
            throw RouteException::routeIsFinished();
        }

        ++$this->position;
    }
}
