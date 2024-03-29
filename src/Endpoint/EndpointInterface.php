<?php

namespace Pantono\Contracts\Endpoint;

use Symfony\Component\HttpFoundation\ParameterBag;
use Symfony\Component\HttpFoundation\Request;

interface EndpointInterface
{
    public function processRequest(ParameterBag $parameters): mixed;

    public function setRequest(Request $request): void;

    public function setSecurityContext(ParameterBag $context): void;
}
