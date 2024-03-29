<?php

namespace Pantono\Contracts\Validation;

use Symfony\Component\HttpFoundation\Request;
use Pantono\Contracts\Endpoint\EndpointInterface;

interface RequestValidatorInterface
{
    public function validateRequest(EndpointInterface $endpoint, Request $request): ValidationResultInterface;
}
