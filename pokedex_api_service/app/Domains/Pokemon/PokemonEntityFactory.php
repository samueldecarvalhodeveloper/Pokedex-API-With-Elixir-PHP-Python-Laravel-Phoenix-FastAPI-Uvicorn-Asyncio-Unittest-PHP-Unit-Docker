<?php

namespace App\Domains\Pokemon;

class PokemonEntityFactory
{
    private function __construct()
    {
    }

    /**
     * @param string[] $types
     */
    public static function getInstance(int $id, string $name, string $image, array $types): PokemonEntity
    {
        return new PokemonEntity($id, $name, $image, $types);
    }
}
