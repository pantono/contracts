<?php

namespace Pantono\Contracts\Router;

use Symfony\Component\HttpFoundation\Request;
use Pantono\Contracts\Endpoint\EndpointDefinitionInterface;

interface RouterInterface
{
    public function registerEndpoint(EndpointDefinitionInterface $endpoint): void;

    public function getController(Request $request): callable|false;
}
