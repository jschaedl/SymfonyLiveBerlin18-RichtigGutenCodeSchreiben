<?php declare(strict_types=1);
/*
 * This is example code that is not production-ready. It is intended for studying and learning purposes.
 *
 * (c) 2018 thePHP.cc. All rights reserved.
 */

namespace example;

/**
 * @author Jan Schädlich <jan.schaedlich@sensiolabs.de>
 */
final class Container
{
    /**
     * @var Port
     */
    private $port;

    public function __construct(Port $port)
    {
        $this->port = $port;
    }

    public function port(): Port
    {
        return $this->port;
    }
}
