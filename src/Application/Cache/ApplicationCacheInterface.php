<?php

namespace Pantono\Contracts\Application\Cache;

use Psr\SimpleCache\CacheInterface;

interface ApplicationCacheInterface extends CacheInterface
{
    public function getCallback(string $key, callable $callback): mixed;
}
