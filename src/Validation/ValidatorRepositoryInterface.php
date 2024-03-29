<?php

namespace Pantono\Contracts\Validation;

interface ValidatorRepositoryInterface
{
    public function addValidator(string $name, ValidatorInterface $validator): void;

    public function getValidator(string $name): ValidatorInterface;
}
