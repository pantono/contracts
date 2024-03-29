<?php

namespace Pantono\Contracts\Locator;

interface FactoryInterface
{
    public function createInstance(): mixed;
}
