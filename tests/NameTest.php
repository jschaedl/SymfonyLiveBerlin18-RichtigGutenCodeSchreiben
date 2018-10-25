<?php declare(strict_types=1);

namespace example;

use PHPUnit\Framework\TestCase;

class NameTest extends TestCase
{
    /**
     * @dataProvider empty_name_provider
     */
    public function test_cannot_be_constructed_with_an_empty_name(string $name): void
    {
        $this->expectException(InvalidNameException::class);

        new Name($name);
    }

    public function empty_name_provider(): array
    {
        return [
            [''],
            [' ']
        ];
    }
}
