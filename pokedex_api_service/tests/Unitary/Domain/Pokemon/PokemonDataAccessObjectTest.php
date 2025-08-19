<?php

namespace App\Domains\Pokemon;

use App\Constants\Domains\PokemonConstants;
use Exception;
use Tests\TestCase;

class PokemonDataAccessObjectTest extends TestCase
{
    function testIfMethodGetPokemonDataSearchesForPokemonDataFromPokemonDataList()
    {
        $wantedPokemonData = PokemonDataAccessObject::getPokemonData(PokemonConstants::BULBASAUR_ID);

        $this->assertEquals(PokemonConstants::BULBASAUR_ID, $wantedPokemonData->id);
        $this->assertEquals(PokemonConstants::BULBASAUR_NAME, $wantedPokemonData->name);
        $this->assertEquals(PokemonConstants::BULBASAUR_IMAGE, $wantedPokemonData->image);
        $this->assertEquals(PokemonConstants::BULBASAUR_TYPES, $wantedPokemonData->types);
    }

    function testIfMethodGetPokemonDataThrowsNotExistingPokemonExceptionIfPokemonIsNotFound()
    {
        try {
            PokemonDataAccessObject::getPokemonData(PokemonConstants::NOT_EXISTING_POKEMON_ID);
        } catch (Exception $exception) {
            $notFoundPokemonExceptionMessage = $exception->getMessage();

            $this->assertEquals(
                PokemonConstants::NOT_EXISTING_POKEMON_EXCEPTION_MESSAGE,
                $notFoundPokemonExceptionMessage
            );
        }
    }

    function testIfMethodGetMatrixOfPokemonsDataReturnsPaginatedMatrixOfPokemonsData()
    {
        $matrixOfPokemonData = PokemonDataAccessObject::getMatrixOfPokemonsData();

        $this->assertEquals(PokemonConstants::BULBASAUR_ID, $matrixOfPokemonData[0][0]->id);
        $this->assertEquals(PokemonConstants::BULBASAUR_NAME, $matrixOfPokemonData[0][0]->name);
        $this->assertEquals(PokemonConstants::BULBASAUR_IMAGE, $matrixOfPokemonData[0][0]->image);
        $this->assertEquals(PokemonConstants::BULBASAUR_TYPES, $matrixOfPokemonData[0][0]->types);
    }
}
