<?php

namespace Pantono\Contracts\Config;

interface ConfigInterface
{
    public function registerPath(string $path): void;
    public function getConfigForType(string $type): FileInterface;
    public function getApplicationConfig(): FileInterface;
}
