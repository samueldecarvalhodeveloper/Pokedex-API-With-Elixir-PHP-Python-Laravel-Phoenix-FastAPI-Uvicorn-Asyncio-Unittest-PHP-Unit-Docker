<?php

namespace App\Domains\Pokemon;

use App\Constants\Domains\PokemonConstants;
use Tests\TestCase;

class PokemonEntityTest extends TestCase
{
    function testIfEntityDescribesHowPokemonEntityShouldBeUsedByTheClientCode()
    {
        $pokemonEntity =
            new PokemonEntity(
                PokemonConstants::BULBASAUR_ID,
                PokemonConstants::BULBASAUR_NAME,
                PokemonConstants::BULBASAUR_IMAGE,
                PokemonConstants::BULBASAUR_TYPES
            );

        $this->assertEquals(PokemonConstants::BULBASAUR_ID, $pokemonEntity->id);
        $this->assertEquals(PokemonConstants::BULBASAUR_NAME, $pokemonEntity->name);
        $this->assertEquals(PokemonConstants::BULBASAUR_IMAGE, $pokemonEntity->image);
        $this->assertEquals(PokemonConstants::BULBASAUR_TYPES, $pokemonEntity->types);
    }
}