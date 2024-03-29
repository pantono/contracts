<?php

namespace Pantono\Contracts\Validation;

use Symfony\Component\HttpFoundation\ParameterBag;

interface ValidatorInterface
{
    public function isValid(mixed $input, array $options = []): void;

    public function setSecurityContext(ParameterBag $securityContext): void;

    public function getSecurityContext(): ParameterBag;

    public function setRequestParameters(ParameterBag $parameters): void;

    public function getRequestParameters(): ParameterBag;
}
