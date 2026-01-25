<?php
declare(strict_types=1);

namespace Pantono\Contracts\Attributes;
#[\Attribute]
class DatabaseIdentifier
{
    public string $id;

    public function __construct(string $id = 'id')
    {
        $this->id = $id;
    }
}
