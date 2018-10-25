<?php declare(strict_types=1);

namespace example;

class Name
{
    private $name;

    public function __construct(string $name)
    {
        if (trim($name) === '') {
            throw new InvalidNameException();
        }

        $this->name = $name;
    }
}
