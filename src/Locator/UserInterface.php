<?php

namespace Pantono\Contracts\Locator;

interface UserInterface
{
    public function getId(): mixed;

    public function setId(?int $id): void;

    public function getAllData(): array;

    public function authenticate(string $password): bool;

    public function getName(): string;

    public function getPassword(): string;

    public function setPassword(string $password): void;

    public function hasPermission(string $permissionName): bool;
}
