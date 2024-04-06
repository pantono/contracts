<?php

namespace Pantono\Contracts\Types\Interfaces;

interface HydratableType
{
    public static function hydrate(string $input): ?self;
}