<?php
declare(strict_types=1);
namespace Pantono\Contracts\Attributes;

use Attribute;

#[Attribute]
class Filter
{
    public string $filter = '';

    public function __construct(string $filter)
    {
        $this->filter = $filter;
    }
}