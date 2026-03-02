<?php

namespace Pantono\Contracts\Filter;

interface PageableInterface
{
    public function getTotalResults(): int;

    public function getPage(): int;

    public function getPerPage(): int;

    public function setTotalResults(int $totalResults): void;

    public function setPage(int $page): void;

    public function setPerPage(int $perPage): void;
}
