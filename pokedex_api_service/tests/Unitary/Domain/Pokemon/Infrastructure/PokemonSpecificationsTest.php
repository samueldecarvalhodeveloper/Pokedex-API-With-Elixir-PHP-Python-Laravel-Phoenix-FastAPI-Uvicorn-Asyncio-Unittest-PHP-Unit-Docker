<?php

namespace Tests\Domains\Pokemon\Infrastructure;

use Tests\TestCase;
use App\Domains\Pokemon\Infrastructure\PokemonSpecifications;

class PokemonSpecificationsTest extends TestCase
{
    function testIfMethodIsCurrentNumberOfPagesEqualsToNumberOfPagesOfPaginatedMatrixOfPokemonsDataReturnsTrueIfNumberOfPagesIsEqualsToNumberOfPagesOfMatrixOfPokemonsData()
    {
        $currentNumberOfPagesIsEqualsToNumberOfPagesOfPaginatedMatrixOfPokemonsData = PokemonSpecifications::isCurrentNumberOfPagesEqualsToNumberOfPagesOfPaginatedMatrixOfPokemonsData([[], [], [], [], [], [], [], [], [], [], [], [], []]);
        $currentNumberOfPagesIsNotEqualsToNumberOfPagesOfPaginatedMatrixOfPokemonsData = PokemonSpecifications::isCurrentNumberOfPagesEqualsToNumberOfPagesOfPaginatedMatrixOfPokemonsData([]);

        $this->assertTrue($currentNumberOfPagesIsEqualsToNumberOfPagesOfPaginatedMatrixOfPokemonsData);
        $this->assertFalse($currentNumberOfPagesIsNotEqualsToNumberOfPagesOfPaginatedMatrixOfPokemonsData);
    }
}
