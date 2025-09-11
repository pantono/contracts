<?php
declare(strict_types=1);

namespace Pantono\Contracts\Attributes;

use Attribute;

#[Attribute]
class DatabaseConnectionName
{
    public string $name = '';

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
