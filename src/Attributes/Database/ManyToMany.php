<?php
declare(strict_types=1);

namespace Pantono\Contracts\Attributes\Database;

#[\Attribute]
class ManyToMany
{
    private string $joinTable;
    private string $joinColumn;
    private string $inverseJoinColumn;
    private string $targetModel;

    public function __construct(string $joinTable, string $joinColumn, string $inverseJoinColumn, string $targetModel)
    {
        $this->joinTable = $joinTable;
        $this->joinColumn = $joinColumn;
        $this->inverseJoinColumn = $inverseJoinColumn;
        $this->targetModel = $targetModel;
    }
}
