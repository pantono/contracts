<?php

namespace Pantono\Contracts\Validation;

interface ValidationResultFieldInterface
{
    public function getName(): string;

    public function getInput(): mixed;

    public function getError(): ?string;
}
