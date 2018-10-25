<?php declare(strict_types=1);

namespace example;

class Capacity
{
    /**
     * @var int
     */
    private $capacity;

    public function __construct(int $capacity)
    {
        if ($capacity < 1) {
            throw new CapacityLessThenZeroException();
        }

        $this->capacity = $capacity;
    }
}
