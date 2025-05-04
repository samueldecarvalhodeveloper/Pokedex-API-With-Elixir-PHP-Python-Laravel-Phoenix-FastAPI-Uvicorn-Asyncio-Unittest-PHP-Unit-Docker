<?php

namespace App\Domains\Pokemon;

use App\Constants\Domains\PokemonConstants;
use Tests\TestCase;

class MatrixOfPokemonsDataTransformingAdapterTest extends TestCase
{
    function testIfMethodGetMatrixOfPokemonsDataTransformsListOfPokemonsDataToAPaginatedMatrixOfPokemonsData()
    {
        $paginatedMatrixOfPokemonsData = MatrixOfPokemonsDataTransformingAdapter::getMatrixOfPokemonsData();

        $this->assertEquals(PokemonConstants::BULBASAUR_ID, $paginatedMatrixOfPokemonsData[0][0]->id);
        $this->assertEquals(PokemonConstants::BULBASAUR_NAME, $paginatedMatrixOfPokemonsData[0][0]->name);
        $this->assertEquals(PokemonConstants::BULBASAUR_IMAGE, $paginatedMatrixOfPokemonsData[0][0]->image);
        $this->assertEquals(PokemonConstants::BULBASAUR_TYPES, $paginatedMatrixOfPokemonsData[0][0]->types);
    }
}
