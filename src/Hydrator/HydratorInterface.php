<?php

namespace Pantono\Contracts\Hydrator;

interface HydratorInterface
{
    public function hydrate(string $className, ?array $hydrateData = []): mixed;

    public function lookupRecord(string $className, mixed $field): mixed;

    public function hydrateSet(string $className, array $data): array;
}
