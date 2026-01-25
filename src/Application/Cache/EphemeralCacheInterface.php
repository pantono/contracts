<?php

namespace Pantono\Contracts\Application\Cache;

use Psr\SimpleCache\CacheInterface;

interface EphemeralCacheInterface extends CacheInterface
{
    public function getCallback(string $key, callable $callback): mixed;
}
