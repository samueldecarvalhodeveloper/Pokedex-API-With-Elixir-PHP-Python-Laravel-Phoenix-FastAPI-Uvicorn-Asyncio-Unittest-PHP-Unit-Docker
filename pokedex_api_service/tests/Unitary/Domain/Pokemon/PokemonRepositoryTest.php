<?php

namespace App\Domains\Pokemon;

use App\Constants\Domains\PokemonConstants;
use Tests\TestCase;
use App\Domains\Pokemon\PokemonRepository;

class PokemonRepositoryTest extends TestCase
{
    function testIfMethodGetPokemonReturnsWantedPokemon()
    {
        $wantedPokemon = PokemonRepository::getPokemon(PokemonConstants::BULBASAUR_ID);

        $this->assertEquals(PokemonConstants::BULBASAUR_ID, $wantedPokemon->id);
        $this->assertEquals(PokemonConstants::BULBASAUR_NAME, $wantedPokemon->name);
        $this->assertEquals(PokemonConstants::BULBASAUR_IMAGE, $wantedPokemon->image);
        $this->assertEquals(PokemonConstants::BULBASAUR_TYPES, $wantedPokemon->types);
    }

    function testIfMethodGetAllPokemonsReturnsPaginatedAllPokemonsData()
    {
        $matrixOfAllPokemons = PokemonRepository::getAllPokemons();

        $this->assertEquals(PokemonConstants::BULBASAUR_ID, $matrixOfAllPokemons[0][0]->id);
        $this->assertEquals(PokemonConstants::BULBASAUR_NAME, $matrixOfAllPokemons[0][0]->name);
        $this->assertEquals(PokemonConstants::BULBASAUR_IMAGE, $matrixOfAllPokemons[0][0]->image);
        $this->assertEquals(PokemonConstants::BULBASAUR_TYPES, $matrixOfAllPokemons[0][0]->types);
    }
}
