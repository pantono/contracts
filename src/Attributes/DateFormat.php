<?php
declare(strict_types=1);

namespace Pantono\Contracts\Attributes;

use Attribute;

#[Attribute]
class DateFormat
{
    public string $format = '';

    public function __construct(string $format)
    {
        $this->format = $format;
    }
}
