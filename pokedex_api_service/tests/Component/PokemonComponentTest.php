<?php

use App\Constants\Domains\PokemonConstants;
use App\Domains\Pokemon\PokemonRepository;
use Tests\TestCase;

class PokemonComponentTest extends TestCase
{
    function testFetchingPokemonData()
    {
        $pokemonRepository = new PokemonRepository();

        $matrixOfPokemonsData = $pokemonRepository->getAllPokemons();
        $bulbasaurData = $pokemonRepository->getPokemon(PokemonConstants::BULBASAUR_ID);

        $this->assertEquals($matrixOfPokemonsData[0][0]->id, $bulbasaurData->id);
        $this->assertEquals($matrixOfPokemonsData[0][0]->name, $bulbasaurData->name);
        $this->assertEquals($matrixOfPokemonsData[0][0]->image, $bulbasaurData->image);
        $this->assertEquals($matrixOfPokemonsData[0][0]->types, $bulbasaurData->types);
    }
}
