<?php

namespace Tests\Domains\Pokemon\Infrastructure;

use App\Constants\Domains\PokemonConstants;
use Tests\TestCase;
use App\Domains\Pokemon\Infrastructure\PokemonSpecifications;

class PokemonSpecificationsTest extends TestCase
{
    function testIfMethodIsCurrentNumberOfPagesEqualsToNumberOfPagesOfPaginatedMatrixOfPokemonsDataReturnsTrueIfNumberOfPagesIsEqualsToNumberOfPagesOfMatrixOfPokemonsData()
    {
        $currentNumberOfPagesIsEqualsToNumberOfPagesOfPaginatedMatrixOfPokemonsData =
            PokemonSpecifications::isCurrentNumberOfPagesEqualsToNumberOfPagesOfPaginatedMatrixOfPokemonsData([[], [], [], [], [], [], [], [], [], [], [], [], []]);
        $currentNumberOfPagesIsNotEqualsToNumberOfPagesOfPaginatedMatrixOfPokemonsData =
            PokemonSpecifications::isCurrentNumberOfPagesEqualsToNumberOfPagesOfPaginatedMatrixOfPokemonsData([]);

        $this->assertTrue($currentNumberOfPagesIsEqualsToNumberOfPagesOfPaginatedMatrixOfPokemonsData);
        $this->assertFalse($currentNumberOfPagesIsNotEqualsToNumberOfPagesOfPaginatedMatrixOfPokemonsData);
    }

    function testIfMethodIsPokemonIdAnIdOfAPokemonFromTheFirstGenerationReturnsTrueIfIdIsGreaterOrEqualThanFirstPokemonsIdAndSmallerOrEqualThanLastPokemonsIdFromTheFirstGeneration()
    {
        $pokemonIdIsFromAPokemonFromTheFirstGeneration =
            PokemonSpecifications::isPokemonIdAnIdOfAPokemonFromTheFirstGeneration(PokemonConstants::BULBASAUR_ID);
        $pokemonIdIsNotFromAPokemonFromTheFirstGeneration =
            PokemonSpecifications::isPokemonIdAnIdOfAPokemonFromTheFirstGeneration(PokemonConstants::NOT_EXISTING_POKEMON_ID);

        $this->assertTrue($pokemonIdIsFromAPokemonFromTheFirstGeneration);
        $this->assertFalse($pokemonIdIsNotFromAPokemonFromTheFirstGeneration);
    }
}
