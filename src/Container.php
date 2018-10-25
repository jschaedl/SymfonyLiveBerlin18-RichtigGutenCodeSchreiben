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
     * @var ContainerId
     */
    private $id;

    /**
     * @var Port
     */
    private $port;

    public function __construct(ContainerId $id, Port $port)
    {
        $this->id = $id;
        $this->port = $port;
    }

    public function id(): ContainerId
    {
        return $this->id;
    }

    public function port(): Port
    {
        return $this->port;
    }
}
