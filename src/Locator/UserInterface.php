<?php

namespace Pantono\Contracts\Locator;

interface UserInterface
{
    public function getId(): mixed;

    public function authenticate(string $password): bool;

    public function getName(): string;

    public function getPassword(): string;

    public function setPassword(string $password): void;
}
