<?php

namespace Pantono\Contracts\Application\Interfaces;

interface SortableInterface
{
    public function getSortBy(): ?string;

    public function setSortBy(?string $sortBy): void;

    public function getSortDirection(): string;

    public function setSortDirection(string $sortDirection): void;

    /**
     * @return array<int,string>
     */
    public function getSortableFields(): array;

    public function getSortColumn(): ?string;
}
