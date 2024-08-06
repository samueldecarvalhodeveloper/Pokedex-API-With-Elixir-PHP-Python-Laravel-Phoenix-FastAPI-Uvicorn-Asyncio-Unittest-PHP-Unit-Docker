<?php

namespace App\Domains\Pokemon;

class PokemonRepository
{
    static function getPokemon(int $id): PokemonEntity
    {
        return PokemonDataAccessObject::getPokemonData($id);
    }

    /**
     * @return array<array<PokemonEntity>>
     */
    static function getAllPokemons(): array
    {
        return PokemonDataAccessObject::getMatrixOfPokemonsData();
    }
}
