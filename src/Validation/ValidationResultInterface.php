<?php

namespace Pantono\Contracts\Validation;


use Symfony\Component\HttpFoundation\ParameterBag;

interface ValidationResultInterface
{
    public function addField(ValidationResultFieldInterface $field): void;

    public function isOk(): bool;

    public function hasField(string $name): bool;

    public function getFieldErrors(): array;

    public function getProcessedFieldInput(): ParameterBag;
}
