<?php

namespace App\Domains\Pokemon;

use Tests\TestCase;
use App\Domains\Pokemon\PokemonGateway;
use App\Constants\Domains\PokemonConstants;

class PokemonGatewayTest extends TestCase
{
    function testIfMethodGetListOfPokemonDataTransferObjectsReturnsThePokemonsListOfDataFromCdn()
    {
        $listOfPokemonsDataFromCdn = PokemonGateway::getListOfPokemonDataTransferObjects();

        $this->assertEquals(PokemonConstants::BULBASAUR_ID, $listOfPokemonsDataFromCdn[0]->id);
        $this->assertEquals(PokemonConstants::BULBASAUR_NAME, $listOfPokemonsDataFromCdn[0]->name);
        $this->assertEquals(PokemonConstants::BULBASAUR_TYPES, $listOfPokemonsDataFromCdn[0]->types);
    }
}
