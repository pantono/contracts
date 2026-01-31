<?php
declare(strict_types=1);

namespace Pantono\Contracts\Attributes\Database;

#[\Attribute]
class ManyToOne
{
    public string $targetModel;
    public string $inversedBy;

    public function __construct(string $targetModel, string $inversedBy)
    {
        $this->targetModel = $targetModel;
        $this->inversedBy = $inversedBy;
    }
}
