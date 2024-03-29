<?php

namespace Pantono\Contracts\Endpoint;

interface EndpointDefinitionInterface
{
    public function getId(): string;
    public function getMethod(): string;

    public function getRoute(): string;

    public function getController(): string;

    public function getTitle(): ?string;

    public function getDescription(): ?string;

    public function getSecurityGates(): array;

    public function getServices(): array;

    public function getFields(): array;
}