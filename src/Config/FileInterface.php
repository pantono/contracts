<?php

namespace Pantono\Contracts\Config;

interface FileInterface extends \ArrayAccess, \Iterator
{
    public function getValue(string $key, mixed $default = null): mixed;

    public function getAllData(): array;

    public function toArray(): array;
}
