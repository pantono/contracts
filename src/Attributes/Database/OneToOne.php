<?php
declare(strict_types=1);

namespace Pantono\Contracts\Attributes\Database;

#[\Attribute]
class OneToOne
{
    public string $targetModel;

    public function __construct(string $targetModel)
    {
        $this->targetModel = $targetModel;
    }
}
