<?php

namespace App\Domains\Pokemon;

use App\Constants\Domains\PokemonConstants;
use Tests\TestCase;

class PokemonDataLoadingAdapterTest extends TestCase
{
    function testIfMethodGetListOfPokemonsDataFetchesAndReturnsTheCacheOfListOfPokemonsData()
    {
        $listOfPokemonsData = PokemonDataLoadingAdapter::getListOfPokemonsData();

        $this->assertEquals(PokemonConstants::BULBASAUR_ID, $listOfPokemonsData[0]->id);
        $this->assertEquals(PokemonConstants::BULBASAUR_NAME, $listOfPokemonsData[0]->name);
        $this->assertEquals(PokemonConstants::BULBASAUR_IMAGE, $listOfPokemonsData[0]->image);
        $this->assertEquals(PokemonConstants::BULBASAUR_TYPES, $listOfPokemonsData[0]->types);
    }

    function testIfMethodGetMatrixOfPokemonsDataGeneratesCacheOfListOfPokemonsAndTransformsListOfPokemonsDataIntoMatrixAndCachesIt()
    {
        $matrixOfPokemonData = PokemonDataLoadingAdapter::getMatrixOfPokemonsData();

        $this->assertEquals(PokemonConstants::BULBASAUR_ID, $matrixOfPokemonData[0][0]->id);
        $this->assertEquals(PokemonConstants::BULBASAUR_NAME, $matrixOfPokemonData[0][0]->name);
        $this->assertEquals(PokemonConstants::BULBASAUR_IMAGE, $matrixOfPokemonData[0][0]->image);
        $this->assertEquals(PokemonConstants::BULBASAUR_TYPES, $matrixOfPokemonData[0][0]->types);
    }
}
