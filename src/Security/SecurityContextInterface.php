<?php

namespace Pantono\Contracts\Security;

interface SecurityContextInterface
{
    public function get(string $key, mixed $default = null): mixed;

    /**
     * @return void
     */
    public function set(string $key, mixed $value);

    public function has(string $key): bool;
}
