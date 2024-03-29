<?php

namespace Pantono\Contracts\Security\Gate;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Pantono\Contracts\Endpoint\EndpointDefinitionInterface;
use Symfony\Component\HttpFoundation\ParameterBag;

interface SecurityGateInterface
{
    public function isValid(Request $request, EndpointDefinitionInterface $endpoint, ParameterBag $options, ?Session $session = null): void;
}
