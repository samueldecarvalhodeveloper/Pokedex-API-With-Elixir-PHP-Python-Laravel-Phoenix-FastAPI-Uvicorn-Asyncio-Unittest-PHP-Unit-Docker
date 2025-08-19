<?php

namespace App\Domains\Pokemon;

use App\Constants\Domains\PokemonConstants;
use Tests\TestCase;
use  App\Domains\Pokemon\PokemonMapper;

class PokemonMapperTest extends TestCase
{
    function testIfMethodGetMappedListOfPokemonEntitiesReturnsMappedListOfPokemonEntity()
    {
        /**
         * @var PokemonDataTransferObject[]
         */
        $listOfPokemonDataTransferObject = json_decode(PokemonConstants::POKEMONS_DATA_JSON);

        $mappedListOfPokemonEntities = PokemonMapper::getMappedListOfPokemonEntities($listOfPokemonDataTransferObject);

        $this->assertEquals(PokemonConstants::BULBASAUR_ID, $mappedListOfPokemonEntities[0]->id);
        $this->assertEquals(PokemonConstants::BULBASAUR_NAME, $mappedListOfPokemonEntities[0]->name);
        $this->assertEquals(PokemonConstants::BULBASAUR_IMAGE, $mappedListOfPokemonEntities[0]->image);
        $this->assertEquals(PokemonConstants::BULBASAUR_TYPES, $mappedListOfPokemonEntities[0]->types);
    }
}
