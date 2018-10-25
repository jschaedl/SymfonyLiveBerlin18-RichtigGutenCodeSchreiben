<?php declare(strict_types=1);
/*
 * This is example code that is not production-ready. It is intended for studying and learning purposes.
 *
 * (c) 2018 thePHP.cc. All rights reserved.
 */

namespace example;

final class FleetException extends \Exception implements Exception
{
    public static function fleetMustContainAtLeastOneShip(): self
    {
        return new self('Fleet must have at least one ship');
    }
}
