<?php

namespace Pantono\Contracts\Filter;

interface PageableInterface
{
    public function getTotalResults(): int;

    public function getPage(): int;

    public function getPerPage(): int;
}
