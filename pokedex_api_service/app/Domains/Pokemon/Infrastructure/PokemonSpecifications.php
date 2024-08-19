<?php

namespace App\Domains\Pokemon\Infrastructure;

use App\Constants\Domains\PokemonConstants;

class PokemonSpecifications
{
    private function __construct() {}
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
    public static function isPokemonIdAnIdOfAPokemonFromTheFirstGeneration($pokemonId): bool
    {
        return $pokemonId >= PokemonConstants::BULBASAUR_ID && $pokemonId <= PokemonConstants::NUMBER_OF_POKEMONS_FROM_THE_FIRST_GENERATION;
    }
}
