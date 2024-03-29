<?php

namespace Pantono\Contracts\Locator;

interface LocatorInterface
{
    public function loadDependency(string $dependency): mixed;

    public function getClassAutoWire(string $className): mixed;

    public function lookupRecord(string $className, mixed $id): mixed;

    public function loadClass(string $className, array $dependencies): mixed;
}
