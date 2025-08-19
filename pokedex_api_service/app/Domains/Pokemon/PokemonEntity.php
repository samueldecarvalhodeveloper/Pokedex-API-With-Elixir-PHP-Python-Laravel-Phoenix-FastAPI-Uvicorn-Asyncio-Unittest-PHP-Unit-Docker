<?php

namespace App\Domains\Pokemon;

class PokemonEntity
{
    public int $id;
    public string $name;
    public string $image;
    /**
     * @var string[]
     */
    public array $types;

    /**
     * @param string[] $types
     */
    function __construct(int $id, string $name, string $image, array $types)
    {
        $this->id = $id;
        $this->name = $name;
        $this->image = $image;
        $this->types = $types;
    }
}
