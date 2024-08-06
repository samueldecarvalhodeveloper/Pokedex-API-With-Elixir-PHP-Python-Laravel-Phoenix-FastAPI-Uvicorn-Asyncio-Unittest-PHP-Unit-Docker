<?php

namespace App\Domains\Pokemon\Infrastructure;

use App\Constants\Domains\PokemonConstants;

class PokemonSpecifications
{
    private function __construct()
    {
    }
    /**
     * @param array<array<PokemonEntity>>
     */
    public static function isCurrentNumberOfPagesEqualsToNumberOfPagesOfPaginatedMatrixOfPokemonsData(array $matrixOfPokemonData): bool
    {
        return count($matrixOfPokemonData) == PokemonConstants::NUMBER_OF_PAGES_OF_POKEMONS;
    }

    /**
     * @param int $pokemonId
     */
    public static function isPokemonIdSmallerThanLastOrGreaterThanFirstPokemonId($pokemonId): bool
    {
        return $pokemonId > PokemonConstants::NUMBER_OF_POKEMONS_FROM_THE_FIRST_GENERATION && $pokemonId < PokemonConstants::BULBASAUR_ID;
    }
}