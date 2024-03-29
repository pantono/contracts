<?php

namespace Pantono\Contracts\Container;

use Pantono\Contracts\Locator\LocatorInterface;

interface ContainerInterface
{
    public function getLocator(): LocatorInterface;
}
