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
}
