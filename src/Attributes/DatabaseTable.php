<?php

namespace Pantono\Contracts\Attributes;
#[\Attribute]
class DatabaseTable
{
    public string $table;
    public string $idColumn;

    public function __construct(string $table, string $idColumn)
    {
        $this->table = $table;
        $this->idColumn = $idColumn;
    }
}
