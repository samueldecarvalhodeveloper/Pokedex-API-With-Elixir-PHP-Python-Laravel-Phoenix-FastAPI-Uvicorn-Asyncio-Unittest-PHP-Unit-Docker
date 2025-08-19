<?php

namespace Tests\Domains\Pokemon;

use App\Constants\Domains\PokemonConstants;
use App\Domains\Pokemon\PokemonDataTransferObject;
use Tests\TestCase;

class PokemonDataTransferObjectTest extends TestCase
{
    function testIfEntityDescribesHowPokemonDataTransferObjectShouldBeUsedByTheClientCode()
    {
        $pokemonDataTransferObject =
            new PokemonDataTransferObject(
                PokemonConstants::BULBASAUR_ID,
                PokemonConstants::BULBASAUR_NAME,
                PokemonConstants::BULBASAUR_TYPES
            );

        $this->assertEquals(PokemonConstants::BULBASAUR_ID, $pokemonDataTransferObject->id);
        $this->assertEquals(PokemonConstants::BULBASAUR_NAME, $pokemonDataTransferObject->name);
        $this->assertEquals(PokemonConstants::BULBASAUR_TYPES, $pokemonDataTransferObject->types);
    }
}
