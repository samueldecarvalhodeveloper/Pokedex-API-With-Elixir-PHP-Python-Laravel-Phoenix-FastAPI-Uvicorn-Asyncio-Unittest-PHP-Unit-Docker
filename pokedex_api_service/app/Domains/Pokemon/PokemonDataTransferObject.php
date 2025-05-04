<?php

namespace App\Domains\Pokemon;

class PokemonDataTransferObject
{
    public int $id;
    public string $name;
    /**
     * @var string[]
     */
    public array $types;

    /**
     * @param string[] $types
     */
    function __construct(int $id, string $name, array $types)
    {
        $this->id = $id;
        $this->name = $name;
        $this->types = $types;
    }
}
