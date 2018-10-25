<?php declare(strict_types=1);

namespace example;

class RouteException extends \DomainException implements Exception
{
    public static function routeMustHaveAtLeastTwoPorts(): self
    {
        return new self('Route must have at least two ports');
    }

    public static function routeIsFinished(): self
    {
        return new self('Ship already reached end of route');
    }
}
